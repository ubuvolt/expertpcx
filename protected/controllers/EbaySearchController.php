<?php

class EbaySearchController extends Controller {

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
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array(
                    'ebaySearch'
                ),
                'users' => array('admin', 'piotr', 'hairacc'),
            ),
            array('allow',
                'actions' => array(
                    'ajaxLoadEbaySearchResult',
                    'ajaxUpdateEbayPriceTracking',
                    'ajaxApplyEbayPriceTracking',
                    'ajaxClearEbayPriceTracking',
                ),
                'users' => array('*'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Manages all models.
     */
    public function actionEbaySearch() {

        $this->render('api_search_view', array());
    }

    public function GetAPISearch($phrase) {
        Yii::import('application.components.Ebay');

        $ebay = new Ebay_api();
        $apiKey = $ebay->getApiKey('expertpcx');

        error_reporting(E_ALL);  // Turn on all errors, warnings and notices for easier debugging
        // API request variables
        $endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';  // URL to call
        $version = '1.0.0';  // API version supported by your application
        $appid = $apiKey['appID'];  // Replace with your own AppID
        $globalid = 'EBAY-GB';  // Global ID of the eBay site you want to search (e.g., EBAY-DE)
        $query = $phrase;  // You may want to supply your own query
        $safequery = urlencode($query);  // Make the query URL-friendly
        //
        // Construct the findItemsByKeywords HTTP GET call
        $apicall = "$endpoint?";
        $apicall .= "OPERATION-NAME=findItemsAdvanced";
        $apicall .= "&SERVICE-VERSION=$version";
        $apicall .= "&SECURITY-APPNAME=$appid";
        $apicall .= "&GLOBAL-ID=$globalid";
        $apicall .= "&keywords=$safequery";
        $apicall .= "&paginationInput.entriesPerPage=13";

        // Load the call and capture the document returned by eBay API
        $resp = simplexml_load_file($apicall);

        // Check to see if the request was successful, else print an error
        if ($resp->ack == "Success") {
            $result_array = array();
            // If the response was loaded, parse it and build links
            foreach ($resp->searchResult->item as $item) {
                
                $ebayID = (string) $item->itemId;
                $result_array[$ebayID]['title'] = (string) $item->title;
                $result_array[$ebayID]['galleryURL'] = (string) $item->galleryURL;
                $result_array[$ebayID]['viewItemURL'] = (string) $item->viewItemURL;
                $result_array[$ebayID]['paymentMethod'] = (string) $item->paymentMethod;
                $result_array[$ebayID]['postalCode'] = (string) $item->postalCode;
                $result_array[$ebayID]['location'] = (string) $item->location;
                $result_array[$ebayID]['country'] = (string) $item->country;

                $result_array[$ebayID]['shippingServiceCost'] = (string) $item->shippingInfo->shippingServiceCost;
                $result_array[$ebayID]['shippingType'] = (string) $item->shippingInfo->shippingType;
                $result_array[$ebayID]['shipToLocations'] = (string) $item->shippingInfo->shipToLocations;

                $result_array[$ebayID]['currentPrice'] = (string) $item->sellingStatus->currentPrice;
                $result_array[$ebayID]['convertedCurrentPrice'] = (string) $item->sellingStatus->convertedCurrentPrice;
                $result_array[$ebayID]['sellingState'] = (string) $item->sellingStatus->sellingState;

                $result_array[$ebayID]['conditionDisplayName'] = (string) $item->condition->conditionDisplayName;

                $result_array[$ebayID]['listingType'] = (string) $item->listingInfo->listingType;
                $result_array[$ebayID]['watchCount'] = (string) $item->listingInfo->watchCount;
            }
        }

        return $result_array;
    }

    public function actionAjaxLoadEbaySearchResult() {

        $search_value = $_POST['search_value'];

        if (!empty($search_value))
            $eBay_API_search_result = $this->GetAPISearch($search_value);

        $this->renderPartial('ajax_load_ebay_search_result', array('search_result' => $eBay_API_search_result));
    }

    public function actionAjaxUpdateEbayPriceTracking() {

        $ebay_id = $_POST['ebay_id'];
        $flow = $_POST['flow'];

        $_SESSION['ebay_price_tracking'][$ebay_id] = $flow;

        echo CJSON::encode(array(
            'status' => 'success',
            'ebay_id' => $ebay_id,
            'flow' => $flow,
        ));
    }
    
    public function actionAjaxClearEbayPriceTracking(){
        
        $_SESSION['ebay_price_tracking'] = array();
        
    }
    
    public function actionAjaxApplyEbayPriceTracking() {

        d::d($_SESSION['ebay_price_tracking']);

    }

}
