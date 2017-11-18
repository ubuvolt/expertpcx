<?php

class EbayApiController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array(
                    'index',
                    'view',
                    'main',
                    'ajaxOfficialTime',
                    'reStartBaySelling'
                ),
                'users' => array('admin', 'expertpcx'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionMain() {

        switch ($_GET['attribute']) {

            case 'OfficialTime':
                $response = $this->actionGeteBayOfficialTime();
                $development = true;
                break;
            case 'MyeBaySelling':
//                eBay Selling
                $response = $this->actionGetMyeBaySelling();
                return;
            case 'GetItem':
                $response = $this->actionAllItems();
                return;

            case 'GetStore':
                $response = $this->GetStore();
                $development = true;
                return;
        }

        $this->render('api_view', array(
            'response' => $response,
            'development' => $development)
        );
    }

    /**
     * @param type $headers
     * @param type $xml_request
     * @param type $serverUrl
     * @return type
     */
    public function ebayApiCall($headers, $xml_request, $serverUrl) {

        $connection = curl_init();
        curl_setopt($connection, CURLOPT_URL, $serverUrl);
        curl_setopt($connection, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($connection, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($connection, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($connection, CURLOPT_POST, 1);
        curl_setopt($connection, CURLOPT_POSTFIELDS, $xml_request);
        curl_setopt($connection, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($connection);
        curl_close($connection);

        $dom = new DOMDocument();
        $dom->loadXML($response);

//        file_put_contents("/var/www/engine/shop.xhtml", "\n" . $response, FILE_APPEND);

        return $response;
    }

    /**
     * @param type $apiKey
     * @param type $call_name
     * @return string
     */
    public function apiHeaders($apiKey, $call_name) {
        // Create headers to send with CURL request.
        $headers = array(
            'X-EBAY-API-COMPATIBILITY-LEVEL: ' . $apiKey['compatabilityLevel'],
            'X-EBAY-API-DEV-NAME: ' . $apiKey['devID'],
            'X-EBAY-API-APP-NAME: ' . $apiKey['appID'],
            'X-EBAY-API-CERT-NAME: ' . $apiKey['certID'],
            'X-EBAY-API-CALL-NAME: ' . $call_name,
            'X-EBAY-API-SITEID: ' . $apiKey['siteID']);

        return $headers;
    }

    /**
     * @return type
     */
    public function actionGeteBayOfficialTime() {
        Yii::import('application.components.Ebay');

        $ebay = new Ebay_hairacc();
        $apiKey = $ebay->getApiKey();

        $call_name = 'GeteBayOfficialTime';

        $headers = $this->apiHeaders($apiKey, $call_name);

        $xml_request = $this->apiGeteBayOfficialTime($apiKey);

        $response = $this->ebayApiCall($headers, $xml_request, $apiKey['serverUrl']);

        return $response;
    }

    /**
     * GeteBayOfficialTime
     * 
     * @param type $apiKey
     * @return string
     */
    public function apiGeteBayOfficialTime($apiKey) {
        // Generate XML request

        $xml_request = "<?xml version=\"1.0\" encoding=\"utf-8\" ?>
                <GeteBayOfficialTimeRequest xmlns=\"urn:ebay:apis:eBLBaseComponents\">
                <RequesterCredentials>
                  <eBayAuthToken>" . $apiKey['appToken'] . "</eBayAuthToken>
                </RequesterCredentials>
                </GeteBayOfficialTimeRequest>";



        return $xml_request;
    }

    public function getItem($auth_token, $itemID) {
        // Generate XML request
        $xml_request = "<?xml version=\"1.0\" encoding=\"utf-8\" ?>
                <GetItemRequest xmlns=\"urn:ebay:apis:eBLBaseComponents\">
                <RequesterCredentials>
                <eBayAuthToken>" . $auth_token . "</eBayAuthToken>
                </RequesterCredentials>
                <DetailLevel>ReturnAll</DetailLevel>
                <IncludeItemSpecifics>true</IncludeItemSpecifics>
                <IncludeWatchCount>true</IncludeWatchCount>
                <ItemID>" . $itemID . "</ItemID>
                </GetItemRequest>";

        return $xml_request;
    }

    //                form actionMain
    //                eBay Selling
    //                1
    public function actionGetMyeBaySelling() {
        Yii::import('application.components.Ebay');

        $ebay = new Ebay_hairacc();
        $apiKey = $ebay->getApiKey();

        $call_name = 'GetMyeBaySelling';

        $headers = $this->apiHeaders($apiKey, $call_name);

        $xml_request = $this->getMyeBaySelling($apiKey);

        $response = $this->ebayApiCall($headers, $xml_request, $apiKey['serverUrl']);

        $this->processeBaySelling($response);

        return $response;
    }

    //
    //                form actionMain
    //                eBay Selling
    //                2
    public function getMyeBaySelling($apiKey) {

        $var = EbayApiController::get_central_setting(1, 'get_my_eBay_selling');

        // Generate XML request
        $requestXmlBody = '<?xml version="1.0" encoding="utf-8"?>
			<GetMyeBaySellingRequest xmlns="urn:ebay:apis:eBLBaseComponents">
				<RequesterCredentials>
    				<eBayAuthToken>' . $apiKey['appToken'] . '</eBayAuthToken>
  				</RequesterCredentials>
 				<ErrorLanguage>en_En</ErrorLanguage>
  				<Version>' . $apiKey['compatabilityLevel'] . '</Version>
  				<ActiveList>
    			
				<DetailLevel>ReturnAll</DetailLevel>
				<IncludeNotes>true</IncludeNotes>
				<Pagination>
                        	<PageNumber>' . $var . '</PageNumber>
                                </Pagination>
				
                		</ActiveList>
                        	</GetMyeBaySellingRequest>';

        EbayApiController::set_central_setting(1, 'get_my_eBay_selling', ++$var);

        return $requestXmlBody;
    }

    //
    //                form actionMain
    //                eBay Selling
    //                3
    public function processeBaySelling($xml) {

        $file = "/var/www/engine/processeBaySelling.xhtml";

        $f = @fopen($file, "r+");
        if ($f !== false) {
            ftruncate($f, 0);
            fclose($f);
        }
        file_put_contents($file, "\n" . $xml, FILE_APPEND);

        $dom = new DOMDocument();
        $dom->loadXML($xml);

        $Timestamp = $dom->getElementsByTagName('Timestamp')->item(0)->nodeValue;
        $Ack = $dom->getElementsByTagName('Ack')->item(0)->nodeValue;
        $Version = $dom->getElementsByTagName('Version')->item(0)->nodeValue;
        $Build = $dom->getElementsByTagName('Build')->item(0)->nodeValue;
        $ActiveList = $dom->getElementsByTagName('ActiveList')->item(0)->nodeValue;

        $TotalNumberOfPages = $dom->getElementsByTagName('TotalNumberOfPages')->item(0)->nodeValue;
        EbayApiController::set_central_setting(1, 'total_number_of_pages', $TotalNumberOfPages);
        $TotalNumberOfEntries = $dom->getElementsByTagName('TotalNumberOfEntries')->item(0)->nodeValue;
        EbayApiController::set_central_setting(1, 'total_number_of_entries', $TotalNumberOfEntries);

        $elements = $dom->getElementsByTagName('ItemArray');
        $data = array();
        $i = 0;
        foreach ($elements as $node) {
            foreach ($node->childNodes as $child_1) {
                $data[$i][$child_1->nodeName] = array($child_1->nodeName => $child_1->nodeValue);
                if ($child_1->hasChildNodes()) {
                    foreach ($child_1->childNodes as $child_2) {
                        $data[$i][$child_1->nodeName][$child_2->nodeName] = array($child_2->nodeName => $child_2->nodeValue);
                        if ($child_2->hasChildNodes()) {
                            foreach ($child_2->childNodes as $child_3) {
                                $data[$i][$child_1->nodeName][$child_2->nodeName][$child_3->nodeName] = array($child_3->nodeName => $child_3->nodeValue);
                                if ($child_3->hasChildNodes()) {
                                    foreach ($child_3->childNodes as $child_4) {
                                        $data[$i][$child_1->nodeName][$child_2->nodeName][$child_3->nodeName][$child_4->nodeName] = array($child_4->nodeName => $child_4->nodeValue);
                                    }
                                }
                            }
                        }
                    }
                }
                $i++;
            }
        }
        $this->saveBaySelling($data);
    }

    //                form actionMain
    //                eBay Selling
    //                3
    public function saveBaySelling($data) {

        $report_array = array();

        foreach ($data as $item) {
            $model = new MyEbaySelling();
            $model->buyItNowPrice = $item['Item']['BuyItNowPrice']['BuyItNowPrice'];
            $model->itemID = $item['Item']['ItemID']['ItemID'];
            $model->convertStartTime($item['Item']['ListingDetails']['StartTime']['StartTime']);
            $model->viewItemURL = $item['Item']['ListingDetails']['ViewItemURL']['ViewItemURL'];
            $model->viewItemURLForNaturalSearch = $item['Item']['ListingDetails']['ViewItemURLForNaturalSearch']['ViewItemURLForNaturalSearch'];
            $model->listingDuration = $item['Item']['ListingDuration']['ListingDuration'];
            $model->listingType = $item['Item']['ListingType']['ListingType'];
            $model->quantity = $item['Item']['Quantity']['Quantity'];
            $model->currentPrice = $item['Item']['SellingStatus']['CurrentPrice']['CurrentPrice'];
            $model->shippingServiceCost = $item['Item']['ShippingDetails']['ShippingServiceOptions']['ShippingServiceCost']['ShippingServiceCost'];
            $model->shippingType = $item['Item']['ShippingDetails']['ShippingType']['ShippingType'];
            $model->timeLeft = $item['Item']['TimeLeft']['TimeLeft'];
            $model->title = $item['Item']['Title']['Title'];
            $model->watchCount = $item['Item']['WatchCount']['WatchCount'];
            $model->quantityAvailable = $item['Item']['QuantityAvailable']['QuantityAvailable'];
            $model->galleryURL = $item['Item']['PictureDetails']['GalleryURL']['GalleryURL'];
            $model->classifiedAdPayPerLeadFee = $item['Item']['ClassifiedAdPayPerLeadFee']['ClassifiedAdPayPerLeadFee'];
            $model->shippingProfileID = $item['Item']['SellerProfiles']['SellerShippingProfile']['ShippingProfileID']['ShippingProfileID'];
            $model->shippingProfileName = $item['Item']['SellerProfiles']['SellerShippingProfile']['ShippingProfileName']['ShippingProfileName'];
            $model->returnProfileID = $item['Item']['SellerProfiles']['SellerReturnProfile']['ReturnProfileID']['ReturnProfileID'];
            $model->returnProfileName = $item['Item']['SellerProfiles']['SellerReturnProfile']['ReturnProfileName']['ReturnProfileName'];
            $model->paymentProfileID = $item['Item']['SellerProfiles']['SellerPaymentProfile']['PaymentProfileID']['PaymentProfileID'];
            $model->paymentProfileName = $item['Item']['SellerProfiles']['SellerPaymentProfile']['PaymentProfileName']['PaymentProfileName'];

            // cheack if ebay product exist in my_ebay_selling
            $sql = "
                SELECT
                        buyItNowPrice, 
                        itemID, 
                        quantity, 
                        currentPrice
                        
                FROM my_ebay_selling
                WHERE itemID = '" . $item['Item']['ItemID']['ItemID'] . "';";

            $command = Yii::app()->db->createCommand($sql);

            //if itemID exist
            $results = $command->queryAll();
            if ($results[0]['itemID']) {
                // update
                $my_ebay_selling = Yii::app()->db->createCommand('
                        UPDATE 
                            my_ebay_selling 
                        SET 
                            buyItNowPrice = ' . $model->buyItNowPrice . ',
                            startTime = "' . $model->startTime . '",
                            viewItemURL = "' . $model->viewItemURL . '",
                            viewItemURLForNaturalSearch = "' . $model->viewItemURLForNaturalSearch . '",
                            listingDuration = "' . $model->listingDuration . '",
                            listingType = "' . $model->listingType . '",
                            quantity = ' . $model->quantity . ',
                            currentPrice = ' . $model->currentPrice . ',
                            shippingServiceCost = ' . $model->shippingServiceCost . ',
                            shippingType = "' . $model->shippingType . '",
                            timeLeft = "' . $model->timeLeft . '",
                            title = "' . $model->title . '",
                            watchCount = ' . (empty($model->watchCount) ? 0 : $model->watchCount) . ',
                            quantityAvailable = ' . $model->quantityAvailable . ',
                            galleryURL = "' . $model->galleryURL . '",
                            classifiedAdPayPerLeadFee = ' . $model->classifiedAdPayPerLeadFee . ',
                            shippingProfileID = "' . $model->shippingProfileID . '",
                            shippingProfileName = "' . $model->shippingProfileName . '",
                            returnProfileID = "' . $model->returnProfileID . '",
                            returnProfileName = "' . $model->returnProfileName . '",
                            paymentProfileID = "' . $model->paymentProfileID . '",
                            paymentProfileName = "' . $model->paymentProfileName . '"

                        WHERE itemID=' . $model->itemID . '
                        LIMIT 1')->execute();

                if ($my_ebay_selling)
                    $report_array['updated'][$model->itemID] = 'ok';

                $count_saved = count($report_array['updated']);
                $count_error = count($report_array['error']);
            } else {
                // insert

                $rest = $model->save();
                if ($rest) {
                    $report_array['saved'][$model->itemID] = 'ok';
                } else {
                    $report_array['error'][$model->itemID] = $model->errors;
                }
                $count_saved = count($report_array['saved']);
                $count_error = count($report_array['error']);
            }
        }


        $this->render('my_ebay_report', array(
            'count_saved' => $count_saved,
            'count_error' => $count_error,
            'message' => 'eBay Selling')
        );
    }

    //                form actionMain
    //                eBay Selling
    //                END
//4
    public function processeItem($response) {

        $report_array = array();

//        $sql = 'TRUNCATE ebay_item';
//        Yii::app()->db->createCommand($sql)->query();

        foreach ($response as $item_id => $xml) {
//                    file_put_contents("/var/www/engine/newxhtml.xhtml", "\n" . $xml, FILE_APPEND);
            $elements = '';
            $dom = new DOMDocument();
            $dom->loadXML($xml);

            $model = new EbayItem();

            $model->timestamp = $dom->getElementsByTagName('Timestamp')->item(0)->nodeValue;
            $model->ack = $dom->getElementsByTagName('Ack')->item(0)->nodeValue;
            $model->version = $dom->getElementsByTagName('Version')->item(0)->nodeValue;
            $model->build = $dom->getElementsByTagName('Build')->item(0)->nodeValue;

            $model->autoPay = $dom->getElementsByTagName('AutoPay')->item(0)->nodeValue;
            $model->buyerProtection = $dom->getElementsByTagName('BuyerProtection')->item(0)->nodeValue;
            $model->buyIstNowPrice = $dom->getElementsByTagName('BuyItNowPrice')->item(0)->nodeValue;
            $model->country = $dom->getElementsByTagName('Country')->item(0)->nodeValue;
            $model->currency = $dom->getElementsByTagName('Currency')->item(0)->nodeValue;
            $model->description = $dom->getElementsByTagName('Description')->item(0)->nodeValue;
            $model->giftIcon = $dom->getElementsByTagName('GiftIcon')->item(0)->nodeValue;
            $model->hitCounter = $dom->getElementsByTagName('HitCounter')->item(0)->nodeValue;
            $model->itemID = $dom->getElementsByTagName('ItemID')->item(0)->nodeValue;

            //ListingDetails            
            $model->adult = $dom->getElementsByTagName('Adult')->item(0)->nodeValue;
            $model->bindingAuction = $dom->getElementsByTagName('BindingAuction')->item(0)->nodeValue;
            $model->checkoutEnabled = $dom->getElementsByTagName('CheckoutEnabled')->item(0)->nodeValue;
            $model->convertedBuyItNowPrice = $dom->getElementsByTagName('ConvertedBuyItNowPrice')->item(0)->nodeValue;
            $model->convertedStartPrice = $dom->getElementsByTagName('ConvertedStartPrice')->item(0)->nodeValue;
            $model->convertedReservePrice = $dom->getElementsByTagName('ConvertedReservePrice')->item(0)->nodeValue;
            $model->hasReservePrice = $dom->getElementsByTagName('HasReservePrice')->item(0)->nodeValue;
            $model->startTime = $dom->getElementsByTagName('StartTime')->item(0)->nodeValue;
            $model->endTime = $dom->getElementsByTagName('EndTime')->item(0)->nodeValue;
            $model->viewItemURL = $dom->getElementsByTagName('ViewItemURL')->item(0)->nodeValue;
            $model->hasUnansweredQuestions = $dom->getElementsByTagName('HasUnansweredQuestions')->item(0)->nodeValue;
            $model->hasPublicMessages = $dom->getElementsByTagName('HasPublicMessages')->item(0)->nodeValue;
            $model->viewItemURLForNaturalSearch = $dom->getElementsByTagName('ViewItemURLForNaturalSearch')->item(0)->nodeValue;

            //ListingDesigner
            $model->layoutID = $dom->getElementsByTagName('LayoutID')->item(0)->nodeValue;
            $model->themeID = $dom->getElementsByTagName('ThemeID')->item(0)->nodeValue;

            $model->listingDuration = $dom->getElementsByTagName('ListingDuration')->item(0)->nodeValue;
            $model->listingType = $dom->getElementsByTagName('ListingType')->item(0)->nodeValue;
            $model->location = $dom->getElementsByTagName('Location')->item(0)->nodeValue;
            $model->paymentMethods = $dom->getElementsByTagName('PaymentMethods')->item(0)->nodeValue;

            $PaymentMethods_1 = $dom->getElementsByTagName('PaymentMethods')->item(1)->nodeValue;
            if (!empty($PaymentMethods_1))
                $model->paymentMethods .= '##' . $PaymentMethods_1;

            $PaymentMethods_2 = $dom->getElementsByTagName('PaymentMethods')->item(2)->nodeValue;
            if (!empty($PaymentMethods_2))
                $model->paymentMethods .= '##' . $PaymentMethods_2;

            $PaymentMethods_3 = $dom->getElementsByTagName('PaymentMethods')->item(3)->nodeValue;
            if (!empty($PaymentMethods_3))
                $model->paymentMethods .= '##' . $PaymentMethods_3;

            $PaymentMethods_4 = $dom->getElementsByTagName('PaymentMethods')->item(4)->nodeValue;
            if (!empty($PaymentMethods_4))
                $model->paymentMethods .= '##' . $PaymentMethods_4;

            $PaymentMethods_5 = $dom->getElementsByTagName('PaymentMethods')->item(5)->nodeValue;
            if (!empty($PaymentMethods_5))
                $model->paymentMethods .= '##' . $PaymentMethods_5;

            $model->payPalEmailAddress = $dom->getElementsByTagName('PayPalEmailAddress')->item(0)->nodeValue;

            //PrimaryCategory
            $model->categoryID = $dom->getElementsByTagName('CategoryID')->item(0)->nodeValue;
            $model->categoryName = $dom->getElementsByTagName('CategoryName')->item(0)->nodeValue;
            $model->privateListing = $dom->getElementsByTagName('PrivateListing')->item(0)->nodeValue;

            //ProductListingDetails
            $model->EAN = $dom->getElementsByTagName('EAN')->item(0)->nodeValue;
            $model->brandMPN = $dom->getElementsByTagName('Brand')->item(0)->nodeValue;
            $model->includeeBayProductDetails = $dom->getElementsByTagName('IncludeeBayProductDetails')->item(0)->nodeValue;
            $model->quantity = $dom->getElementsByTagName('Quantity')->item(0)->nodeValue;
            $model->reservePrice = $dom->getElementsByTagName('ReservePrice')->item(0)->nodeValue;
            $model->itemRevised = $dom->getElementsByTagName('ItemRevised')->item(0)->nodeValue;

            //Seller
            $model->seller_aboutMePage = $dom->getElementsByTagName('AboutMePage')->item(0)->nodeValue;
            $model->seller_email = $dom->getElementsByTagName('Email')->item(0)->nodeValue;
            $model->seller_feedbackScore = $dom->getElementsByTagName('FeedbackScore')->item(0)->nodeValue;
            $model->seller_positiveFeedbackPercent = $dom->getElementsByTagName('PositiveFeedbackPercent')->item(0)->nodeValue;
            $model->seller_feedbackPrivate = $dom->getElementsByTagName('FeedbackPrivate')->item(0)->nodeValue;
            $model->seller_feedbackRatingStar = $dom->getElementsByTagName('FeedbackRatingStar')->item(0)->nodeValue;
            $model->seller_IDVerified = $dom->getElementsByTagName('IDVerified')->item(0)->nodeValue;
            $model->seller_eBayGoodStanding = $dom->getElementsByTagName('eBayGoodStanding')->item(0)->nodeValue;
            $model->seller_newUser = $dom->getElementsByTagName('NewUser')->item(0)->nodeValue;
            $model->seller_registrationDate = $dom->getElementsByTagName('RegistrationDate')->item(0)->nodeValue;
            $model->seller_site = $dom->getElementsByTagName('Site')->item(0)->nodeValue;
            $model->seller_status = $dom->getElementsByTagName('Status')->item(0)->nodeValue;
            $model->seller_userID = $dom->getElementsByTagName('UserID')->item(0)->nodeValue;
            $model->seller_userIDChanged = $dom->getElementsByTagName('UserIDChanged')->item(0)->nodeValue;
            $model->seller_userIDLastChanged = $dom->getElementsByTagName('UserIDLastChanged')->item(0)->nodeValue;
            $model->seller_VATStatus = $dom->getElementsByTagName('VATStatus')->item(0)->nodeValue;
            $model->seller_allowPaymentEdit = $dom->getElementsByTagName('AllowPaymentEdit')->item(0)->nodeValue;
            $model->seller_checkoutEnabled = $dom->getElementsByTagName('CheckoutEnabled')->item(0)->nodeValue;
            $model->seller_CIPBankAccountStored = $dom->getElementsByTagName('CIPBankAccountStored')->item(0)->nodeValue;
            $model->seller_goodStanding = $dom->getElementsByTagName('GoodStanding')->item(0)->nodeValue;
            $model->seller_liveAuctionAuthorized = $dom->getElementsByTagName('LiveAuctionAuthorized')->item(0)->nodeValue;
            $model->seller_merchandizingPref = $dom->getElementsByTagName('MerchandizingPref')->item(0)->nodeValue;
            $model->seller_qualifiesForB2BVAT = $dom->getElementsByTagName('QualifiesForB2BVAT')->item(0)->nodeValue;
            $model->seller_storeOwner = $dom->getElementsByTagName('StoreOwner')->item(0)->nodeValue;
            $model->seller_storeURL = $dom->getElementsByTagName('StoreURL')->item(0)->nodeValue;
            $model->seller_sellerBusinessType = $dom->getElementsByTagName('SellerBusinessType')->item(0)->nodeValue;
            $model->seller_safePaymentExempt = $dom->getElementsByTagName('SafePaymentExempt')->item(0)->nodeValue;
            $model->seller_motorsDealer = $dom->getElementsByTagName('MotorsDealer')->item(0)->nodeValue;

            //SellingStatus
            $model->sellingStatus_bidCount = $dom->getElementsByTagName('BidCount')->item(0)->nodeValue;
            $model->sellingStatus_bidIncrement = $dom->getElementsByTagName('BidIncrement')->item(0)->nodeValue;
            $model->sellingStatus_convertedCurrentPrice = $dom->getElementsByTagName('ConvertedCurrentPrice')->item(0)->nodeValue;
            $model->sellingStatus_currentPrice = $dom->getElementsByTagName('CurrentPrice')->item(0)->nodeValue;
            $model->sellingStatus_leadCount = $dom->getElementsByTagName('LeadCount')->item(0)->nodeValue;
            $model->sellingStatus_minimumToBid = $dom->getElementsByTagName('MinimumToBid')->item(0)->nodeValue;
            $model->sellingStatus_quantitySold = $dom->getElementsByTagName('QuantitySold')->item(0)->nodeValue;
            $model->sellingStatus_reserveMet = $dom->getElementsByTagName('ReserveMet')->item(0)->nodeValue;
            $model->sellingStatus_secondChanceEligible = $dom->getElementsByTagName('SecondChanceEligible')->item(0)->nodeValue;
            $model->sellingStatus_listingStatus = $dom->getElementsByTagName('ListingStatus')->item(0)->nodeValue;
            $model->sellingStatus_quantitySoldByPickupInStore = $dom->getElementsByTagName('QuantitySoldByPickupInStore')->item(0)->nodeValue;

            //ShippingDetails            
            $model->shippDet_applyShippingDiscount = $dom->getElementsByTagName('ApplyShippingDiscount')->item(0)->nodeValue;
            $model->shippDet_weightMajor = $dom->getElementsByTagName('WeightMajor')->item(0)->nodeValue;
            $model->shippDet_weightMinor = $dom->getElementsByTagName('WeightMinor')->item(0)->nodeValue;
            $model->shippDet_salesTaxPercent = $dom->getElementsByTagName('SalesTaxPercent')->item(0)->nodeValue;
            $model->shippDet_shippingIncludedInTax = $dom->getElementsByTagName('ShippingIncludedInTax')->item(0)->nodeValue;
            $model->shippDet_shippingService = $dom->getElementsByTagName('ShippingService')->item(0)->nodeValue;
            $model->shippDet_shippingServiceCost = $dom->getElementsByTagName('ShippingServiceCost')->item(0)->nodeValue;
            $model->shippDet_shippingServiceAdditionalCost = $dom->getElementsByTagName('ShippingServiceAdditionalCost')->item(0)->nodeValue;
            $model->shippDet_shippingServicePriority = $dom->getElementsByTagName('ShippingServicePriority')->item(0)->nodeValue;
            $model->shippDet_expeditedService = $dom->getElementsByTagName('ExpeditedService')->item(0)->nodeValue;
            $model->shippDet_shippingTimeMin = $dom->getElementsByTagName('ShippingTimeMin')->item(0)->nodeValue;
            $model->shippDet_shippingTimeMax = $dom->getElementsByTagName('ShippingTimeMax')->item(0)->nodeValue;
            $model->shippDet_freeShipping = $dom->getElementsByTagName('FreeShipping')->item(0)->nodeValue;
            $model->shippDet_shippingType = $dom->getElementsByTagName('ShippingType')->item(0)->nodeValue;
            $model->shippDet_thirdPartyCheckout = $dom->getElementsByTagName('ThirdPartyCheckout')->item(0)->nodeValue;
            $model->shippDet_shippingDiscountProfileID = $dom->getElementsByTagName('ShippingDiscountProfileID')->item(0)->nodeValue;
            $model->shippDet_internationalShippingDiscountProfileID = $dom->getElementsByTagName('InternationalShippingDiscountProfileID')->item(0)->nodeValue;
            $model->shippDet_sellerExcludeShipToLocationsPreference = $dom->getElementsByTagName('SellerExcludeShipToLocationsPreference')->item(0)->nodeValue;

            $model->shipToLocations = $dom->getElementsByTagName('ShipToLocations')->item(0)->nodeValue;
            $model->site = $dom->getElementsByTagName('Site')->item(0)->nodeValue;
            $model->startPrice = $dom->getElementsByTagName('StartPrice')->item(0)->nodeValue;
            $model->storeCategoryID = $dom->getElementsByTagName('StoreCategoryID')->item(0)->nodeValue;
            $model->storeCategory2ID = $dom->getElementsByTagName('StoreCategory2ID')->item(0)->nodeValue;
            $model->storeURL = $dom->getElementsByTagName('StoreURL')->item(0)->nodeValue;
            $model->timeLeft = $dom->getElementsByTagName('TimeLeft')->item(0)->nodeValue;
            $model->title = $dom->getElementsByTagName('Title')->item(0)->nodeValue;
            $model->watchCount = $dom->getElementsByTagName('WatchCount')->item(0)->nodeValue;
            $model->hitCount = $dom->getElementsByTagName('HitCount')->item(0)->nodeValue;
            $model->locationDefaulted = $dom->getElementsByTagName('LocationDefaulted')->item(0)->nodeValue;
            $model->getItFast = $dom->getElementsByTagName('GetItFast')->item(0)->nodeValue;
            $model->postalCode = $dom->getElementsByTagName('PostalCode')->item(0)->nodeValue;

            //PictureDetails
            $model->galleryType = $dom->getElementsByTagName('GalleryType')->item(0)->nodeValue;
            $model->galleryURL = $dom->getElementsByTagName('GalleryURL')->item(0)->nodeValue;

            $elements = $dom->getElementsByTagName('PictureDetails');
            $data = array();
            $i = 0;
            foreach ($elements as $node) {
                foreach ($node->childNodes as $child_1) {
                    $data[$i][$child_1->nodeName] = array($child_1->nodeName => $child_1->nodeValue);
                    $i++;
                }
            }

            $pictureURL = '';
            $qt_specyfic = count($data) - 1;
            for ($i = 3; $i < $qt_specyfic; $i++) {
                $pictureURL .= '[]PictureURL##' . $data[$i]['PictureURL']['PictureURL'];
            }
            $model->pictureURL = $pictureURL;

            $model->photoDisplay = $dom->getElementsByTagName('PhotoDisplay')->item(0)->nodeValue;
            $model->pictureSource = $dom->getElementsByTagName('PictureSource')->item(0)->nodeValue;
            $model->dispatchTimeMax = $dom->getElementsByTagName('DispatchTimeMax')->item(0)->nodeValue;
            $model->proxyItem = $dom->getElementsByTagName('ProxyItem')->item(0)->nodeValue;

            //BusinessSellerDetails
            $model->bSellerD_street1 = $dom->getElementsByTagName('Street1')->item(0)->nodeValue;
            $model->bSellerD_cityName = $dom->getElementsByTagName('CityName')->item(0)->nodeValue;
            $model->bSellerD_stateOrProvince = $dom->getElementsByTagName('StateOrProvince')->item(0)->nodeValue;
            $model->bSellerD_countryName = $dom->getElementsByTagName('CountryName')->item(0)->nodeValue;
            $model->bSellerD_phone = $dom->getElementsByTagName('Phone')->item(0)->nodeValue;
            $model->bSellerD_postalCode = $dom->getElementsByTagName('PostalCode')->item(0)->nodeValue;
            $model->bSellerD_companyName = $dom->getElementsByTagName('CompanyName')->item(0)->nodeValue;
            $model->bSellerD_firstName = $dom->getElementsByTagName('FirstName')->item(0)->nodeValue;
            $model->bSellerD_lastName = $dom->getElementsByTagName('LastName')->item(0)->nodeValue;
            $model->bSellerD_email = $dom->getElementsByTagName('Email')->item(0)->nodeValue;
            $model->bSellerD_legalInvoice = $dom->getElementsByTagName('LegalInvoice')->item(0)->nodeValue;
            $model->buyerGuaranteePrice = $dom->getElementsByTagName('BuyerGuaranteePrice')->item(0)->nodeValue;

            //ReturnPolicy
            $model->returnP_returnsWithinOption = $dom->getElementsByTagName('ReturnsWithinOption')->item(0)->nodeValue;
            $model->returnP_returnsWithin = $dom->getElementsByTagName('ReturnsWithin')->item(0)->nodeValue;
            $model->returnP_returnsAcceptedOption = $dom->getElementsByTagName('ReturnsAcceptedOption')->item(0)->nodeValue;
            $model->returnP_returnsAccepted = $dom->getElementsByTagName('ReturnsAccepted')->item(0)->nodeValue;
            $model->returnP_shippingCostPaidByOption = $dom->getElementsByTagName('ShippingCostPaidByOption')->item(0)->nodeValue;
            $model->returnP_shippingCostPaidBy = $dom->getElementsByTagName('ShippingCostPaidBy')->item(0)->nodeValue;

            $model->conditionID = $dom->getElementsByTagName('ConditionID')->item(0)->nodeValue;
            $model->conditionDisplayName = $dom->getElementsByTagName('ConditionDisplayName')->item(0)->nodeValue;
            $model->postCheckoutExperienceEnabled = $dom->getElementsByTagName('PostCheckoutExperienceEnabled')->item(0)->nodeValue;

            //SellerProfiles
            $model->sp_shippingProfileID = $dom->getElementsByTagName('ShippingProfileID')->item(0)->nodeValue;
            $model->sp_shippingProfileName = $dom->getElementsByTagName('ShippingProfileName')->item(0)->nodeValue;
            $model->sp_returnProfileID = $dom->getElementsByTagName('ReturnProfileID')->item(0)->nodeValue;
            $model->sp_returnProfileName = $dom->getElementsByTagName('ReturnProfileName')->item(0)->nodeValue;
            $model->sp_paymentProfileID = $dom->getElementsByTagName('PaymentProfileID')->item(0)->nodeValue;
            $model->sp_paymentProfileName = $dom->getElementsByTagName('PaymentProfileName')->item(0)->nodeValue;

            //ShippingPackageDetails
            $elements = $dom->getElementsByTagName('ShippingPackageDetails');
            $data = array();
            $i = 0;

            foreach ($elements as $node) {
                foreach ($node->childNodes as $child_1) {
                    $data[$i][$child_1->nodeName] = array($child_1->nodeName => $child_1->nodeValue);
                    $i++;
                }
            }
            $model->spd_shippingIrregular = $data[0]['ShippingIrregular']['ShippingIrregular'];
            $model->spd_shippingPackage = $data[1]['ShippingPackage']['ShippingPackage'];
            $model->spd_weightMajor = $data[2]['WeightMajor']['WeightMajor'];
            $model->spd_weightMinor = $data[3]['WeightMinor']['WeightMinor'];

            $model->hideFromSearch = $dom->getElementsByTagName('HideFromSearch')->item(0)->nodeValue;
            $model->eBayPlus = $dom->getElementsByTagName('eBayPlus')->item(0)->nodeValue;
            $model->eBayPlusEligible = $dom->getElementsByTagName('eBayPlusEligible')->item(0)->nodeValue;

            //ItemSpecifics
            $elements = $dom->getElementsByTagName('ItemSpecifics');
            $data = array();
            $i = 0;

            foreach ($elements as $node) {
                foreach ($node->childNodes as $child_1) {
                    $data[$i][$child_1->nodeName] = array($child_1->nodeName => $child_1->nodeValue);
                    if ($child_1->hasChildNodes()) {
                        foreach ($child_1->childNodes as $child_2) {
                            $data[$i][$child_1->nodeName][$child_2->nodeName] = array($child_2->nodeName => $child_2->nodeValue);
                        }
                    }
                    $i++;
                }
            }

            $qt_specyfic = count($data);
            $itemSpecific = '';
            for ($i = 0; $i < $qt_specyfic; $i++) {

                $itemSpecific .= '[]Name##' . $data[$i]['NameValueList']['Name']['Name'] . '@@Value##'
                        . $data[$i]['NameValueList']['Value']['Value'] . '@@Source##'
                        . $data[$i]['NameValueList']['Source']['Source'];
            }

            $model->itemSpecifics = $itemSpecific;

            $rest = $model->save();

            if ($rest) {
                $report_array['saved'][$model->itemID] = 'ok';
            } else {
                $report_array['error'][$model->itemID] = $model->errors;
            }
        }

        $count_saved = count($report_array['saved']);
        $count_error = count($report_array['error']);

        $this->render('my_ebay_report', array(
            'count_saved' => $count_saved,
            'count_error' => $count_error,
            'message' => 'eBay Item'
        ));
    }

    /**
     * 
     */
    public function getStore() {
        Yii::import('application.components.Ebay');

        $ebay = new Ebay_hairacc();
        $apiKey = $ebay->getApiKey();

        $call_name = 'GetStore';

        $headers = $this->apiHeaders($apiKey, $call_name);

        $xml_request = $this->getStoreInfo($apiKey);

        $response = $this->ebayApiCall($headers, $xml_request, $apiKey['serverUrl']);

        $this->processeStoreInfo($response);

        return $response;
    }

    public function getStoreInfo($apiKey) {
        // Generate XML request
        $requestXmlBody = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
                <GetStoreRequest xmlns=\"urn:ebay:apis:eBLBaseComponents\">
                  <RequesterCredentials>
                    <eBayAuthToken>" . $apiKey['appToken'] . "</eBayAuthToken>
                  </RequesterCredentials>
                  <LevelLimit>1</LevelLimit>
                </GetStoreRequest>";

        return $requestXmlBody;
    }

    public function processeStoreInfo($xml) {

        $report_array = array();
//                file_put_contents("/var/www/engine/storeInfo.xhtml", "\n" . $xml, FILE_APPEND);

        $dom = new DOMDocument();
        $dom->loadXML($xml);

        $elements = $dom->getElementsByTagName('CustomCategories');
        $data = array();
        $i = 0;
        foreach ($elements as $node) {
            foreach ($node->childNodes as $child_1) {
                $data[$i][$child_1->nodeName] = array($child_1->nodeName => $child_1->nodeValue);
                if ($child_1->hasChildNodes()) {
                    foreach ($child_1->childNodes as $child_2) {
                        $data[$i][$child_1->nodeName][$child_2->nodeName] = array($child_2->nodeName => $child_2->nodeValue);
                    }
                }
                $i++;
            }
        }

        foreach ($data as $item) {

            $ebayStore = new EbayStore();

            $ebayStore->CategoryID = $item['CustomCategory']['CategoryID']['CategoryID'];
            $ebayStore->Name = $item['CustomCategory']['Name']['Name'];
            $ebayStore->Order = $item['CustomCategory']['Order']['Order'];

            $rest = $ebayStore->save();

            if ($rest) {
                $report_array['saved'][$ebayStore->CategoryID] = 'ok';
            } else {
                $report_array['error'][$ebayStore->CategoryID] = $ebayStore->errors;
            }
        }
        $count_saved = count($report_array['saved']);
        $count_error = count($report_array['error']);

        $this->render('my_ebay_report', array(
            'count_saved' => $count_saved,
            'count_error' => $count_error,
            'message' => 'eBay Store'
        ));
    }

    public function actionAjaxOfficialTime() {

        $eBayOfficialTime = $this->actionGeteBayOfficialTime();

        $dom = new DOMDocument();
        $dom->loadXML($eBayOfficialTime);

        $Timestamp = $dom->getElementsByTagName('Timestamp')->item(0)->nodeValue;
        $Ack = $dom->getElementsByTagName('Ack')->item(0)->nodeValue;
        $Version = $dom->getElementsByTagName('Version')->item(0)->nodeValue;
        $Build = $dom->getElementsByTagName('Build')->item(0)->nodeValue;

        echo CJSON::encode(array(
            'status' => 'success',
            'timestamp' => $Timestamp,
            'ack' => $Ack,
            'version' => $Version,
            'build' => $Build
        ));
    }

    public function actionReStartBaySelling() {

        $sql = 'TRUNCATE my_ebay_selling';
        Yii::app()->db->createCommand($sql)->query();
        sleep(1);

        EbayApiController::set_central_setting(1, 'get_my_eBay_selling', 1);
        $this->actionMain();
    }

    public static function get_central_setting($user_id = 1, $key = '') {

        $sql = "
            SELECT
            Value
            FROM admin_central_storage
            WHERE User_ID = 1
            AND Name = '" . $key . "'
            LIMIT 0, 1;
        ";

        $command = Yii::app()->db->createCommand($sql);
        $results = $command->queryAll();

        $value = unserialize($results[0]['Value']);

        return $value;
    }

    public static function set_central_setting($user_id, $key, $value) {

        $sql = "
            DELETE FROM admin_central_storage
            WHERE User_ID = " . $user_id . "
            AND Name = '" . $key . "'
            LIMIT 1;
        ";
        Yii::app()->db->createCommand($sql)->query();

        $sql = "
            INSERT INTO admin_central_storage
            (
                User_ID,
                Name,
                Value
            ) VALUES (
                " . $user_id . " , '" . $key . "' , '" . serialize($value) . "'
            )
        ";
        Yii::app()->db->createCommand($sql)->query();
    }

    //    
    //    
    //    
    //    
    //    eBay GetItem
    //
    //
    //
    //
    //1
    public function actionAllItems() {

        $item_id_array = $this->getAllItemID();

        $this->actionGetItem($item_id_array);
    }

    //2
    private function getAllItemID() {

        $increment = 50;
        $var = EbayApiController::get_central_setting(1, 'get_all_item_id');
        $item_id_array = array();

        $sql = 'SELECT itemID FROM my_ebay_selling LIMIT ' . $var . ', ' . ($increment + $var);
        $command = Yii::app()->db->createCommand($sql);
        $results = $command->queryAll();

        foreach ($results as $item_no) {
            $item_id_array [] = $item_no['itemID'];
        }

        $var += $increment;
        EbayApiController::set_central_setting(1, 'get_all_item_id', $var);

        return $item_id_array;
    }

//3
    public function actionGetItem($item_id) {
        Yii::import('application.components.Ebay');

        $ebay = new Ebay_hairacc();
        $apiKey = $ebay->getApiKey();

        $call_name = 'GetItem';

        $headers = $this->apiHeaders($apiKey, $call_name);

        foreach ($item_id as $item) {
            $xml_request = $this->getItem($apiKey['appToken'], $item);
            $response [$item] = $this->ebayApiCall($headers, $xml_request, $apiKey['serverUrl']);

            $this->processeItem($response);
            $response = array();
        }
    }

}
