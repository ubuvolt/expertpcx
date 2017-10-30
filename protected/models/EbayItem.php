<?php

/**
 * This is the model class for table "ebay_item".
 *
 * The followings are the available columns in table 'ebay_item':
 * @property integer $id
 * @property string $timestamp
 * @property string $ack
 * @property string $version
 * @property string $build
 * @property string $autoPay
 * @property string $buyerProtection
 * @property double $buyIstNowPrice
 * @property string $country
 * @property string $currency
 * @property string $description
 * @property string $giftIcon
 * @property string $hitCounter
 * @property string $itemID
 * @property string $adult
 * @property string $bindingAuction
 * @property string $checkoutEnabled
 * @property double $convertedBuyItNowPrice
 * @property double $convertedStartPrice
 * @property double $convertedReservePrice
 * @property string $hasReservePrice
 * @property string $startTime
 * @property string $endTime
 * @property string $viewItemURL
 * @property string $hasUnansweredQuestions
 * @property string $hasPublicMessages
 * @property string $viewItemURLForNaturalSearch
 * @property string $layoutID
 * @property string $themeID
 * @property string $listingDuration
 * @property string $listingType
 * @property string $location
 * @property string $paymentMethods
 * @property string $payPalEmailAddress
 * @property string $categoryID
 * @property string $categoryName
 * @property string $privateListing
 * @property string $EAN
 * @property string $brandMPN
 * @property string $includeeBayProductDetails
 * @property integer $quantity
 * @property double $reservePrice
 * @property string $itemRevised
 * @property string $seller_aboutMePage
 * @property string $seller_email
 * @property string $seller_feedbackScore
 * @property double $seller_positiveFeedbackPercent
 * @property string $seller_feedbackPrivate
 * @property string $seller_feedbackRatingStar
 * @property string $seller_IDVerified
 * @property string $seller_eBayGoodStanding
 * @property string $seller_newUser
 * @property string $seller_registrationDate
 * @property string $seller_site
 * @property string $seller_status
 * @property string $seller_userID
 * @property string $seller_userIDChanged
 * @property string $seller_userIDLastChanged
 * @property string $seller_VATStatus
 * @property string $seller_allowPaymentEdit
 * @property string $seller_checkoutEnabled
 * @property string $seller_CIPBankAccountStored
 * @property string $seller_goodStanding
 * @property string $seller_liveAuctionAuthorized
 * @property string $seller_merchandizingPref
 * @property string $seller_qualifiesForB2BVAT
 * @property string $seller_storeOwner
 * @property string $seller_storeURL
 * @property string $seller_sellerBusinessType
 * @property string $seller_safePaymentExempt
 * @property string $seller_motorsDealer
 * @property integer $sellingStatus_bidCount
 * @property double $sellingStatus_bidIncrement
 * @property double $sellingStatus_convertedCurrentPrice
 * @property double $sellingStatus_currentPrice
 * @property integer $sellingStatus_leadCount
 * @property double $sellingStatus_minimumToBid
 * @property integer $sellingStatus_quantitySold
 * @property string $sellingStatus_reserveMet
 * @property string $sellingStatus_secondChanceEligible
 * @property string $sellingStatus_listingStatus
 * @property integer $sellingStatus_quantitySoldByPickupInStore
 * @property string $shippDet_applyShippingDiscount
 * @property double $shippDet_weightMajor
 * @property double $shippDet_weightMinor
 * @property double $shippDet_salesTaxPercent
 * @property string $shippDet_shippingIncludedInTax
 * @property string $shippDet_shippingService
 * @property double $shippDet_shippingServiceCost
 * @property double $shippDet_shippingServiceAdditionalCost
 * @property integer $shippDet_shippingServicePriority
 * @property string $shippDet_expeditedService
 * @property string $shippDet_shippingTimeMin
 * @property string $shippDet_shippingTimeMax
 * @property string $shippDet_freeShipping
 * @property string $shippDet_shippingType
 * @property string $shippDet_thirdPartyCheckout
 * @property string $shippDet_shippingDiscountProfileID
 * @property string $shippDet_internationalShippingDiscountProfileID
 * @property string $shippDet_sellerExcludeShipToLocationsPreference
 * @property string $shipToLocations
 * @property string $site
 * @property double $startPrice
 * @property string $storeCategoryID
 * @property string $storeCategory2ID
 * @property string $storeURL
 * @property string $timeLeft
 * @property string $title
 * @property integer $watchCount
 * @property integer $hitCount
 * @property string $locationDefaulted
 * @property string $getItFast
 * @property string $postalCode
 * @property string $galleryType
 * @property string $galleryURL
 * @property string $photoDisplay
 * @property string $pictureURL
 * @property string $pictureSource
 * @property integer $dispatchTimeMax
 * @property string $proxyItem
 * @property string $itemSpecifics
 * @property string $bSellerD_street1
 * @property string $bSellerD_cityName
 * @property string $bSellerD_stateOrProvince
 * @property string $bSellerD_countryName
 * @property string $bSellerD_phone
 * @property string $bSellerD_postalCode
 * @property string $bSellerD_companyName
 * @property string $bSellerD_firstName
 * @property string $bSellerD_lastName
 * @property string $bSellerD_email
 * @property string $bSellerD_legalInvoice
 * @property double $buyerGuaranteePrice
 * @property string $returnP_returnsWithinOption
 * @property string $returnP_returnsWithin
 * @property string $returnP_returnsAcceptedOption
 * @property string $returnP_returnsAccepted
 * @property string $returnP_shippingCostPaidByOption
 * @property string $returnP_shippingCostPaidBy
 * @property integer $conditionID
 * @property string $conditionDisplayName
 * @property string $postCheckoutExperienceEnabled
 * @property string $sp_shippingProfileID
 * @property string $sp_shippingProfileName
 * @property string $sp_returnProfileID
 * @property string $sp_returnProfileName
 * @property string $sp_paymentProfileID
 * @property string $sp_paymentProfileName
 * @property string $spd_shippingIrregular
 * @property string $spd_shippingPackage
 * @property string $spd_weightMajor
 * @property string $spd_weightMinor
 * @property string $hideFromSearch
 * @property string $eBayPlus
 * @property string $eBayPlusEligible
 * @property integer $ps_id_product
 */
class EbayItem extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ebay_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('quantity, sellingStatus_bidCount, sellingStatus_leadCount, sellingStatus_quantitySold, sellingStatus_quantitySoldByPickupInStore, shippDet_shippingServicePriority, watchCount, hitCount, dispatchTimeMax, conditionID, ps_id_product', 'numerical', 'integerOnly'=>true),
			array('buyIstNowPrice, convertedBuyItNowPrice, convertedStartPrice, convertedReservePrice, reservePrice, seller_positiveFeedbackPercent, sellingStatus_bidIncrement, sellingStatus_convertedCurrentPrice, sellingStatus_currentPrice, sellingStatus_minimumToBid, shippDet_weightMajor, shippDet_weightMinor, shippDet_salesTaxPercent, shippDet_shippingServiceCost, shippDet_shippingServiceAdditionalCost, startPrice, buyerGuaranteePrice', 'numerical'),
			array('timestamp, hitCounter, itemID, startTime, endTime, layoutID, themeID, listingDuration, listingType, location, paymentMethods, payPalEmailAddress, categoryName, EAN, brandMPN, seller_aboutMePage, seller_email, seller_feedbackPrivate, seller_feedbackRatingStar, seller_eBayGoodStanding, seller_newUser, seller_registrationDate, seller_site, seller_status, seller_userID, seller_userIDChanged, seller_userIDLastChanged, seller_VATStatus, seller_merchandizingPref, seller_sellerBusinessType, shippDet_shippingService, shippDet_shippingType, shippDet_thirdPartyCheckout, timeLeft, galleryType, photoDisplay, pictureSource, bSellerD_street1, bSellerD_cityName, bSellerD_stateOrProvince, bSellerD_countryName, bSellerD_companyName, bSellerD_email, returnP_returnsWithinOption, returnP_returnsWithin, returnP_returnsAcceptedOption, returnP_returnsAccepted, returnP_shippingCostPaidByOption, returnP_shippingCostPaidBy, sp_shippingProfileName, sp_returnProfileName, sp_paymentProfileName', 'length', 'max'=>128),
			array('ack, version, build', 'length', 'max'=>50),
			array('autoPay, buyerProtection, country, currency, giftIcon, categoryID, sellingStatus_listingStatus, shipToLocations, site', 'length', 'max'=>32),
			array('adult, bindingAuction, checkoutEnabled, hasReservePrice, hasUnansweredQuestions, hasPublicMessages, privateListing, includeeBayProductDetails, itemRevised, seller_allowPaymentEdit, seller_checkoutEnabled, seller_CIPBankAccountStored, seller_goodStanding, seller_liveAuctionAuthorized, seller_qualifiesForB2BVAT, seller_storeOwner, seller_safePaymentExempt, seller_motorsDealer, sellingStatus_reserveMet, sellingStatus_secondChanceEligible, shippDet_applyShippingDiscount, shippDet_shippingIncludedInTax, shippDet_expeditedService, shippDet_shippingTimeMin, shippDet_shippingTimeMax, shippDet_freeShipping, shippDet_shippingDiscountProfileID, shippDet_internationalShippingDiscountProfileID, shippDet_sellerExcludeShipToLocationsPreference, locationDefaulted, getItFast, proxyItem, bSellerD_legalInvoice, conditionDisplayName, postCheckoutExperienceEnabled, sp_shippingProfileID, sp_returnProfileID, sp_paymentProfileID, hideFromSearch, eBayPlus, eBayPlusEligible', 'length', 'max'=>30),
			array('seller_feedbackScore, seller_IDVerified, storeCategoryID, storeCategory2ID, postalCode, bSellerD_phone, bSellerD_postalCode', 'length', 'max'=>20),
			array('bSellerD_firstName, bSellerD_lastName', 'length', 'max'=>60),
			array('description, viewItemURL, viewItemURLForNaturalSearch, seller_storeURL, storeURL, title, galleryURL, pictureURL, itemSpecifics, spd_shippingIrregular, spd_shippingPackage, spd_weightMajor, spd_weightMinor', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, timestamp, ack, version, build, autoPay, buyerProtection, buyIstNowPrice, country, currency, description, giftIcon, hitCounter, itemID, adult, bindingAuction, checkoutEnabled, convertedBuyItNowPrice, convertedStartPrice, convertedReservePrice, hasReservePrice, startTime, endTime, viewItemURL, hasUnansweredQuestions, hasPublicMessages, viewItemURLForNaturalSearch, layoutID, themeID, listingDuration, listingType, location, paymentMethods, payPalEmailAddress, categoryID, categoryName, privateListing, EAN, brandMPN, includeeBayProductDetails, quantity, reservePrice, itemRevised, seller_aboutMePage, seller_email, seller_feedbackScore, seller_positiveFeedbackPercent, seller_feedbackPrivate, seller_feedbackRatingStar, seller_IDVerified, seller_eBayGoodStanding, seller_newUser, seller_registrationDate, seller_site, seller_status, seller_userID, seller_userIDChanged, seller_userIDLastChanged, seller_VATStatus, seller_allowPaymentEdit, seller_checkoutEnabled, seller_CIPBankAccountStored, seller_goodStanding, seller_liveAuctionAuthorized, seller_merchandizingPref, seller_qualifiesForB2BVAT, seller_storeOwner, seller_storeURL, seller_sellerBusinessType, seller_safePaymentExempt, seller_motorsDealer, sellingStatus_bidCount, sellingStatus_bidIncrement, sellingStatus_convertedCurrentPrice, sellingStatus_currentPrice, sellingStatus_leadCount, sellingStatus_minimumToBid, sellingStatus_quantitySold, sellingStatus_reserveMet, sellingStatus_secondChanceEligible, sellingStatus_listingStatus, sellingStatus_quantitySoldByPickupInStore, shippDet_applyShippingDiscount, shippDet_weightMajor, shippDet_weightMinor, shippDet_salesTaxPercent, shippDet_shippingIncludedInTax, shippDet_shippingService, shippDet_shippingServiceCost, shippDet_shippingServiceAdditionalCost, shippDet_shippingServicePriority, shippDet_expeditedService, shippDet_shippingTimeMin, shippDet_shippingTimeMax, shippDet_freeShipping, shippDet_shippingType, shippDet_thirdPartyCheckout, shippDet_shippingDiscountProfileID, shippDet_internationalShippingDiscountProfileID, shippDet_sellerExcludeShipToLocationsPreference, shipToLocations, site, startPrice, storeCategoryID, storeCategory2ID, storeURL, timeLeft, title, watchCount, hitCount, locationDefaulted, getItFast, postalCode, galleryType, galleryURL, photoDisplay, pictureURL, pictureSource, dispatchTimeMax, proxyItem, itemSpecifics, bSellerD_street1, bSellerD_cityName, bSellerD_stateOrProvince, bSellerD_countryName, bSellerD_phone, bSellerD_postalCode, bSellerD_companyName, bSellerD_firstName, bSellerD_lastName, bSellerD_email, bSellerD_legalInvoice, buyerGuaranteePrice, returnP_returnsWithinOption, returnP_returnsWithin, returnP_returnsAcceptedOption, returnP_returnsAccepted, returnP_shippingCostPaidByOption, returnP_shippingCostPaidBy, conditionID, conditionDisplayName, postCheckoutExperienceEnabled, sp_shippingProfileID, sp_shippingProfileName, sp_returnProfileID, sp_returnProfileName, sp_paymentProfileID, sp_paymentProfileName, spd_shippingIrregular, spd_shippingPackage, spd_weightMajor, spd_weightMinor, hideFromSearch, eBayPlus, eBayPlusEligible, ps_id_product', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'timestamp' => 'Timestamp',
			'ack' => 'Ack',
			'version' => 'Version',
			'build' => 'Build',
			'autoPay' => 'Auto Pay',
			'buyerProtection' => 'Buyer Protection',
			'buyIstNowPrice' => 'Buy Ist Now Price',
			'country' => 'Country',
			'currency' => 'Currency',
			'description' => 'Description',
			'giftIcon' => 'Gift Icon',
			'hitCounter' => 'Hit Counter',
			'itemID' => 'Item',
			'adult' => 'Adult',
			'bindingAuction' => 'Binding Auction',
			'checkoutEnabled' => 'Checkout Enabled',
			'convertedBuyItNowPrice' => 'Converted Buy It Now Price',
			'convertedStartPrice' => 'Converted Start Price',
			'convertedReservePrice' => 'Converted Reserve Price',
			'hasReservePrice' => 'Has Reserve Price',
			'startTime' => 'Start Time',
			'endTime' => 'End Time',
			'viewItemURL' => 'View Item Url',
			'hasUnansweredQuestions' => 'Has Unanswered Questions',
			'hasPublicMessages' => 'Has Public Messages',
			'viewItemURLForNaturalSearch' => 'View Item Urlfor Natural Search',
			'layoutID' => 'Layout',
			'themeID' => 'Theme',
			'listingDuration' => 'Listing Duration',
			'listingType' => 'Listing Type',
			'location' => 'Location',
			'paymentMethods' => 'Payment Methods',
			'payPalEmailAddress' => 'Pay Pal Email Address',
			'categoryID' => 'Category',
			'categoryName' => 'Category Name',
			'privateListing' => 'Private Listing',
			'EAN' => 'Ean',
			'brandMPN' => 'Brand Mpn',
			'includeeBayProductDetails' => 'Includee Bay Product Details',
			'quantity' => 'Quantity',
			'reservePrice' => 'Reserve Price',
			'itemRevised' => 'Item Revised',
			'seller_aboutMePage' => 'Seller About Me Page',
			'seller_email' => 'Seller Email',
			'seller_feedbackScore' => 'Seller Feedback Score',
			'seller_positiveFeedbackPercent' => 'Seller Positive Feedback Percent',
			'seller_feedbackPrivate' => 'Seller Feedback Private',
			'seller_feedbackRatingStar' => 'Seller Feedback Rating Star',
			'seller_IDVerified' => 'Seller Idverified',
			'seller_eBayGoodStanding' => 'Seller E Bay Good Standing',
			'seller_newUser' => 'Seller New User',
			'seller_registrationDate' => 'Seller Registration Date',
			'seller_site' => 'Seller Site',
			'seller_status' => 'Seller Status',
			'seller_userID' => 'Seller User',
			'seller_userIDChanged' => 'Seller User Idchanged',
			'seller_userIDLastChanged' => 'Seller User Idlast Changed',
			'seller_VATStatus' => 'Seller Vatstatus',
			'seller_allowPaymentEdit' => 'Seller Allow Payment Edit',
			'seller_checkoutEnabled' => 'Seller Checkout Enabled',
			'seller_CIPBankAccountStored' => 'Seller Cipbank Account Stored',
			'seller_goodStanding' => 'Seller Good Standing',
			'seller_liveAuctionAuthorized' => 'Seller Live Auction Authorized',
			'seller_merchandizingPref' => 'Seller Merchandizing Pref',
			'seller_qualifiesForB2BVAT' => 'Seller Qualifies For B2 Bvat',
			'seller_storeOwner' => 'Seller Store Owner',
			'seller_storeURL' => 'Seller Store Url',
			'seller_sellerBusinessType' => 'Seller Seller Business Type',
			'seller_safePaymentExempt' => 'Seller Safe Payment Exempt',
			'seller_motorsDealer' => 'Seller Motors Dealer',
			'sellingStatus_bidCount' => 'Selling Status Bid Count',
			'sellingStatus_bidIncrement' => 'Selling Status Bid Increment',
			'sellingStatus_convertedCurrentPrice' => 'Selling Status Converted Current Price',
			'sellingStatus_currentPrice' => 'Selling Status Current Price',
			'sellingStatus_leadCount' => 'Selling Status Lead Count',
			'sellingStatus_minimumToBid' => 'Selling Status Minimum To Bid',
			'sellingStatus_quantitySold' => 'Selling Status Quantity Sold',
			'sellingStatus_reserveMet' => 'Selling Status Reserve Met',
			'sellingStatus_secondChanceEligible' => 'Selling Status Second Chance Eligible',
			'sellingStatus_listingStatus' => 'Selling Status Listing Status',
			'sellingStatus_quantitySoldByPickupInStore' => 'Selling Status Quantity Sold By Pickup In Store',
			'shippDet_applyShippingDiscount' => 'Shipp Det Apply Shipping Discount',
			'shippDet_weightMajor' => 'Shipp Det Weight Major',
			'shippDet_weightMinor' => 'Shipp Det Weight Minor',
			'shippDet_salesTaxPercent' => 'Shipp Det Sales Tax Percent',
			'shippDet_shippingIncludedInTax' => 'Shipp Det Shipping Included In Tax',
			'shippDet_shippingService' => 'Shipp Det Shipping Service',
			'shippDet_shippingServiceCost' => 'Shipp Det Shipping Service Cost',
			'shippDet_shippingServiceAdditionalCost' => 'Shipp Det Shipping Service Additional Cost',
			'shippDet_shippingServicePriority' => 'Shipp Det Shipping Service Priority',
			'shippDet_expeditedService' => 'Shipp Det Expedited Service',
			'shippDet_shippingTimeMin' => 'Shipp Det Shipping Time Min',
			'shippDet_shippingTimeMax' => 'Shipp Det Shipping Time Max',
			'shippDet_freeShipping' => 'Shipp Det Free Shipping',
			'shippDet_shippingType' => 'Shipp Det Shipping Type',
			'shippDet_thirdPartyCheckout' => 'Shipp Det Third Party Checkout',
			'shippDet_shippingDiscountProfileID' => 'Shipp Det Shipping Discount Profile',
			'shippDet_internationalShippingDiscountProfileID' => 'Shipp Det International Shipping Discount Profile',
			'shippDet_sellerExcludeShipToLocationsPreference' => 'Shipp Det Seller Exclude Ship To Locations Preference',
			'shipToLocations' => 'Ship To Locations',
			'site' => 'Site',
			'startPrice' => 'Start Price',
			'storeCategoryID' => 'Store Category',
			'storeCategory2ID' => 'Store Category2',
			'storeURL' => 'Store Url',
			'timeLeft' => 'Time Left',
			'title' => 'Title',
			'watchCount' => 'Watch Count',
			'hitCount' => 'Hit Count',
			'locationDefaulted' => 'Location Defaulted',
			'getItFast' => 'Get It Fast',
			'postalCode' => 'Postal Code',
			'galleryType' => 'Gallery Type',
			'galleryURL' => 'Gallery Url',
			'photoDisplay' => 'Photo Display',
			'pictureURL' => 'Picture Url',
			'pictureSource' => 'Picture Source',
			'dispatchTimeMax' => 'Dispatch Time Max',
			'proxyItem' => 'Proxy Item',
			'itemSpecifics' => 'Item Specifics',
			'bSellerD_street1' => 'B Seller D Street1',
			'bSellerD_cityName' => 'B Seller D City Name',
			'bSellerD_stateOrProvince' => 'B Seller D State Or Province',
			'bSellerD_countryName' => 'B Seller D Country Name',
			'bSellerD_phone' => 'B Seller D Phone',
			'bSellerD_postalCode' => 'B Seller D Postal Code',
			'bSellerD_companyName' => 'B Seller D Company Name',
			'bSellerD_firstName' => 'B Seller D First Name',
			'bSellerD_lastName' => 'B Seller D Last Name',
			'bSellerD_email' => 'B Seller D Email',
			'bSellerD_legalInvoice' => 'B Seller D Legal Invoice',
			'buyerGuaranteePrice' => 'Buyer Guarantee Price',
			'returnP_returnsWithinOption' => 'Return P Returns Within Option',
			'returnP_returnsWithin' => 'Return P Returns Within',
			'returnP_returnsAcceptedOption' => 'Return P Returns Accepted Option',
			'returnP_returnsAccepted' => 'Return P Returns Accepted',
			'returnP_shippingCostPaidByOption' => 'Return P Shipping Cost Paid By Option',
			'returnP_shippingCostPaidBy' => 'Return P Shipping Cost Paid By',
			'conditionID' => 'Condition',
			'conditionDisplayName' => 'Condition Display Name',
			'postCheckoutExperienceEnabled' => 'Post Checkout Experience Enabled',
			'sp_shippingProfileID' => 'Sp Shipping Profile',
			'sp_shippingProfileName' => 'Sp Shipping Profile Name',
			'sp_returnProfileID' => 'Sp Return Profile',
			'sp_returnProfileName' => 'Sp Return Profile Name',
			'sp_paymentProfileID' => 'Sp Payment Profile',
			'sp_paymentProfileName' => 'Sp Payment Profile Name',
			'spd_shippingIrregular' => 'Spd Shipping Irregular',
			'spd_shippingPackage' => 'Spd Shipping Package',
			'spd_weightMajor' => 'Spd Weight Major',
			'spd_weightMinor' => 'Spd Weight Minor',
			'hideFromSearch' => 'Hide From Search',
			'eBayPlus' => 'E Bay Plus',
			'eBayPlusEligible' => 'E Bay Plus Eligible',
			'ps_id_product' => 'Ps Id Product',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('timestamp',$this->timestamp,true);
		$criteria->compare('ack',$this->ack,true);
		$criteria->compare('version',$this->version,true);
		$criteria->compare('build',$this->build,true);
		$criteria->compare('autoPay',$this->autoPay,true);
		$criteria->compare('buyerProtection',$this->buyerProtection,true);
		$criteria->compare('buyIstNowPrice',$this->buyIstNowPrice);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('currency',$this->currency,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('giftIcon',$this->giftIcon,true);
		$criteria->compare('hitCounter',$this->hitCounter,true);
		$criteria->compare('itemID',$this->itemID,true);
		$criteria->compare('adult',$this->adult,true);
		$criteria->compare('bindingAuction',$this->bindingAuction,true);
		$criteria->compare('checkoutEnabled',$this->checkoutEnabled,true);
		$criteria->compare('convertedBuyItNowPrice',$this->convertedBuyItNowPrice);
		$criteria->compare('convertedStartPrice',$this->convertedStartPrice);
		$criteria->compare('convertedReservePrice',$this->convertedReservePrice);
		$criteria->compare('hasReservePrice',$this->hasReservePrice,true);
		$criteria->compare('startTime',$this->startTime,true);
		$criteria->compare('endTime',$this->endTime,true);
		$criteria->compare('viewItemURL',$this->viewItemURL,true);
		$criteria->compare('hasUnansweredQuestions',$this->hasUnansweredQuestions,true);
		$criteria->compare('hasPublicMessages',$this->hasPublicMessages,true);
		$criteria->compare('viewItemURLForNaturalSearch',$this->viewItemURLForNaturalSearch,true);
		$criteria->compare('layoutID',$this->layoutID,true);
		$criteria->compare('themeID',$this->themeID,true);
		$criteria->compare('listingDuration',$this->listingDuration,true);
		$criteria->compare('listingType',$this->listingType,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('paymentMethods',$this->paymentMethods,true);
		$criteria->compare('payPalEmailAddress',$this->payPalEmailAddress,true);
		$criteria->compare('categoryID',$this->categoryID,true);
		$criteria->compare('categoryName',$this->categoryName,true);
		$criteria->compare('privateListing',$this->privateListing,true);
		$criteria->compare('EAN',$this->EAN,true);
		$criteria->compare('brandMPN',$this->brandMPN,true);
		$criteria->compare('includeeBayProductDetails',$this->includeeBayProductDetails,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('reservePrice',$this->reservePrice);
		$criteria->compare('itemRevised',$this->itemRevised,true);
		$criteria->compare('seller_aboutMePage',$this->seller_aboutMePage,true);
		$criteria->compare('seller_email',$this->seller_email,true);
		$criteria->compare('seller_feedbackScore',$this->seller_feedbackScore,true);
		$criteria->compare('seller_positiveFeedbackPercent',$this->seller_positiveFeedbackPercent);
		$criteria->compare('seller_feedbackPrivate',$this->seller_feedbackPrivate,true);
		$criteria->compare('seller_feedbackRatingStar',$this->seller_feedbackRatingStar,true);
		$criteria->compare('seller_IDVerified',$this->seller_IDVerified,true);
		$criteria->compare('seller_eBayGoodStanding',$this->seller_eBayGoodStanding,true);
		$criteria->compare('seller_newUser',$this->seller_newUser,true);
		$criteria->compare('seller_registrationDate',$this->seller_registrationDate,true);
		$criteria->compare('seller_site',$this->seller_site,true);
		$criteria->compare('seller_status',$this->seller_status,true);
		$criteria->compare('seller_userID',$this->seller_userID,true);
		$criteria->compare('seller_userIDChanged',$this->seller_userIDChanged,true);
		$criteria->compare('seller_userIDLastChanged',$this->seller_userIDLastChanged,true);
		$criteria->compare('seller_VATStatus',$this->seller_VATStatus,true);
		$criteria->compare('seller_allowPaymentEdit',$this->seller_allowPaymentEdit,true);
		$criteria->compare('seller_checkoutEnabled',$this->seller_checkoutEnabled,true);
		$criteria->compare('seller_CIPBankAccountStored',$this->seller_CIPBankAccountStored,true);
		$criteria->compare('seller_goodStanding',$this->seller_goodStanding,true);
		$criteria->compare('seller_liveAuctionAuthorized',$this->seller_liveAuctionAuthorized,true);
		$criteria->compare('seller_merchandizingPref',$this->seller_merchandizingPref,true);
		$criteria->compare('seller_qualifiesForB2BVAT',$this->seller_qualifiesForB2BVAT,true);
		$criteria->compare('seller_storeOwner',$this->seller_storeOwner,true);
		$criteria->compare('seller_storeURL',$this->seller_storeURL,true);
		$criteria->compare('seller_sellerBusinessType',$this->seller_sellerBusinessType,true);
		$criteria->compare('seller_safePaymentExempt',$this->seller_safePaymentExempt,true);
		$criteria->compare('seller_motorsDealer',$this->seller_motorsDealer,true);
		$criteria->compare('sellingStatus_bidCount',$this->sellingStatus_bidCount);
		$criteria->compare('sellingStatus_bidIncrement',$this->sellingStatus_bidIncrement);
		$criteria->compare('sellingStatus_convertedCurrentPrice',$this->sellingStatus_convertedCurrentPrice);
		$criteria->compare('sellingStatus_currentPrice',$this->sellingStatus_currentPrice);
		$criteria->compare('sellingStatus_leadCount',$this->sellingStatus_leadCount);
		$criteria->compare('sellingStatus_minimumToBid',$this->sellingStatus_minimumToBid);
		$criteria->compare('sellingStatus_quantitySold',$this->sellingStatus_quantitySold);
		$criteria->compare('sellingStatus_reserveMet',$this->sellingStatus_reserveMet,true);
		$criteria->compare('sellingStatus_secondChanceEligible',$this->sellingStatus_secondChanceEligible,true);
		$criteria->compare('sellingStatus_listingStatus',$this->sellingStatus_listingStatus,true);
		$criteria->compare('sellingStatus_quantitySoldByPickupInStore',$this->sellingStatus_quantitySoldByPickupInStore);
		$criteria->compare('shippDet_applyShippingDiscount',$this->shippDet_applyShippingDiscount,true);
		$criteria->compare('shippDet_weightMajor',$this->shippDet_weightMajor);
		$criteria->compare('shippDet_weightMinor',$this->shippDet_weightMinor);
		$criteria->compare('shippDet_salesTaxPercent',$this->shippDet_salesTaxPercent);
		$criteria->compare('shippDet_shippingIncludedInTax',$this->shippDet_shippingIncludedInTax,true);
		$criteria->compare('shippDet_shippingService',$this->shippDet_shippingService,true);
		$criteria->compare('shippDet_shippingServiceCost',$this->shippDet_shippingServiceCost);
		$criteria->compare('shippDet_shippingServiceAdditionalCost',$this->shippDet_shippingServiceAdditionalCost);
		$criteria->compare('shippDet_shippingServicePriority',$this->shippDet_shippingServicePriority);
		$criteria->compare('shippDet_expeditedService',$this->shippDet_expeditedService,true);
		$criteria->compare('shippDet_shippingTimeMin',$this->shippDet_shippingTimeMin,true);
		$criteria->compare('shippDet_shippingTimeMax',$this->shippDet_shippingTimeMax,true);
		$criteria->compare('shippDet_freeShipping',$this->shippDet_freeShipping,true);
		$criteria->compare('shippDet_shippingType',$this->shippDet_shippingType,true);
		$criteria->compare('shippDet_thirdPartyCheckout',$this->shippDet_thirdPartyCheckout,true);
		$criteria->compare('shippDet_shippingDiscountProfileID',$this->shippDet_shippingDiscountProfileID,true);
		$criteria->compare('shippDet_internationalShippingDiscountProfileID',$this->shippDet_internationalShippingDiscountProfileID,true);
		$criteria->compare('shippDet_sellerExcludeShipToLocationsPreference',$this->shippDet_sellerExcludeShipToLocationsPreference,true);
		$criteria->compare('shipToLocations',$this->shipToLocations,true);
		$criteria->compare('site',$this->site,true);
		$criteria->compare('startPrice',$this->startPrice);
		$criteria->compare('storeCategoryID',$this->storeCategoryID,true);
		$criteria->compare('storeCategory2ID',$this->storeCategory2ID,true);
		$criteria->compare('storeURL',$this->storeURL,true);
		$criteria->compare('timeLeft',$this->timeLeft,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('watchCount',$this->watchCount);
		$criteria->compare('hitCount',$this->hitCount);
		$criteria->compare('locationDefaulted',$this->locationDefaulted,true);
		$criteria->compare('getItFast',$this->getItFast,true);
		$criteria->compare('postalCode',$this->postalCode,true);
		$criteria->compare('galleryType',$this->galleryType,true);
		$criteria->compare('galleryURL',$this->galleryURL,true);
		$criteria->compare('photoDisplay',$this->photoDisplay,true);
		$criteria->compare('pictureURL',$this->pictureURL,true);
		$criteria->compare('pictureSource',$this->pictureSource,true);
		$criteria->compare('dispatchTimeMax',$this->dispatchTimeMax);
		$criteria->compare('proxyItem',$this->proxyItem,true);
		$criteria->compare('itemSpecifics',$this->itemSpecifics,true);
		$criteria->compare('bSellerD_street1',$this->bSellerD_street1,true);
		$criteria->compare('bSellerD_cityName',$this->bSellerD_cityName,true);
		$criteria->compare('bSellerD_stateOrProvince',$this->bSellerD_stateOrProvince,true);
		$criteria->compare('bSellerD_countryName',$this->bSellerD_countryName,true);
		$criteria->compare('bSellerD_phone',$this->bSellerD_phone,true);
		$criteria->compare('bSellerD_postalCode',$this->bSellerD_postalCode,true);
		$criteria->compare('bSellerD_companyName',$this->bSellerD_companyName,true);
		$criteria->compare('bSellerD_firstName',$this->bSellerD_firstName,true);
		$criteria->compare('bSellerD_lastName',$this->bSellerD_lastName,true);
		$criteria->compare('bSellerD_email',$this->bSellerD_email,true);
		$criteria->compare('bSellerD_legalInvoice',$this->bSellerD_legalInvoice,true);
		$criteria->compare('buyerGuaranteePrice',$this->buyerGuaranteePrice);
		$criteria->compare('returnP_returnsWithinOption',$this->returnP_returnsWithinOption,true);
		$criteria->compare('returnP_returnsWithin',$this->returnP_returnsWithin,true);
		$criteria->compare('returnP_returnsAcceptedOption',$this->returnP_returnsAcceptedOption,true);
		$criteria->compare('returnP_returnsAccepted',$this->returnP_returnsAccepted,true);
		$criteria->compare('returnP_shippingCostPaidByOption',$this->returnP_shippingCostPaidByOption,true);
		$criteria->compare('returnP_shippingCostPaidBy',$this->returnP_shippingCostPaidBy,true);
		$criteria->compare('conditionID',$this->conditionID);
		$criteria->compare('conditionDisplayName',$this->conditionDisplayName,true);
		$criteria->compare('postCheckoutExperienceEnabled',$this->postCheckoutExperienceEnabled,true);
		$criteria->compare('sp_shippingProfileID',$this->sp_shippingProfileID,true);
		$criteria->compare('sp_shippingProfileName',$this->sp_shippingProfileName,true);
		$criteria->compare('sp_returnProfileID',$this->sp_returnProfileID,true);
		$criteria->compare('sp_returnProfileName',$this->sp_returnProfileName,true);
		$criteria->compare('sp_paymentProfileID',$this->sp_paymentProfileID,true);
		$criteria->compare('sp_paymentProfileName',$this->sp_paymentProfileName,true);
		$criteria->compare('spd_shippingIrregular',$this->spd_shippingIrregular,true);
		$criteria->compare('spd_shippingPackage',$this->spd_shippingPackage,true);
		$criteria->compare('spd_weightMajor',$this->spd_weightMajor,true);
		$criteria->compare('spd_weightMinor',$this->spd_weightMinor,true);
		$criteria->compare('hideFromSearch',$this->hideFromSearch,true);
		$criteria->compare('eBayPlus',$this->eBayPlus,true);
		$criteria->compare('eBayPlusEligible',$this->eBayPlusEligible,true);
		$criteria->compare('ps_id_product',$this->ps_id_product);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EbayItem the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
