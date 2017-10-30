<?php
/* @var $this ProcesseItemController */
/* @var $model ProcesseItem */

$this->breadcrumbs=array(
	'Processe Items'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ProcesseItem', 'url'=>array('index')),
	array('label'=>'Create ProcesseItem', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#processe-item-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Processe Items</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'processe-item-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'timestamp',
		'ack',
		'version',
		'build',
		'activeList',
		/*
		'autoPay',
		'buyerProtection',
		'buyIstNowPrice',
		'country',
		'currency',
		'description',
		'giftIcon',
		'hitCounter',
		'itemID',
		'adult',
		'bindingAuction',
		'checkoutEnabled',
		'convertedBuyItNowPrice',
		'convertedStartPrice',
		'convertedReservePrice',
		'hasReservePrice',
		'startTime',
		'endTime',
		'viewItemURL',
		'hasUnansweredQuestions',
		'hasPublicMessages',
		'viewItemURLForNaturalSearch',
		'layoutID',
		'themeID',
		'listingDuration',
		'listingType',
		'location',
		'paymentMethods',
		'payPalEmailAddress',
		'categoryID',
		'categoryName',
		'privateListing',
		'EAN',
		'brandMPN',
		'includeeBayProductDetails',
		'quantity',
		'reservePrice',
		'itemRevised',
		'seller_aboutMePage',
		'seller_email',
		'seller_feedbackScore',
		'seller_positiveFeedbackPercent',
		'seller_feedbackPrivate',
		'seller_feedbackRatingStar',
		'seller_IDVerified',
		'seller_eBayGoodStanding',
		'seller_newUser',
		'seller_registrationDate',
		'seller_site',
		'seller_status',
		'seller_userID',
		'seller_userIDChanged',
		'seller_userIDLastChanged',
		'seller_VATStatus',
		'seller_allowPaymentEdit',
		'seller_checkoutEnabled',
		'seller_CIPBankAccountStored',
		'seller_goodStanding',
		'seller_liveAuctionAuthorized',
		'seller_merchandizingPref',
		'seller_qualifiesForB2BVAT',
		'seller_storeOwner',
		'seller_storeURL',
		'seller_sellerBusinessType',
		'seller_safePaymentExempt',
		'seller_motorsDealer',
		'sellingStatus_bidCount',
		'sellingStatus_bidIncrement',
		'sellingStatus_convertedCurrentPrice',
		'sellingStatus_currentPrice',
		'sellingStatus_leadCount',
		'sellingStatus_minimumToBid',
		'sellingStatus_quantitySold',
		'sellingStatus_reserveMet',
		'sellingStatus_secondChanceEligible',
		'sellingStatus_listingStatus',
		'sellingStatus_quantitySoldByPickupInStore',
		'shippDet_applyShippingDiscount',
		'shippDet_weightMajor',
		'shippDet_salesTaxPercent',
		'shippDet_shippingIncludedInTax',
		'shippDet_shippingService',
		'shippDet_shippingServiceAdditionalCost',
		'shippDet_shippingServicePriority',
		'shippDet_expeditedService',
		'shippDet_shippingTimeMin',
		'shippDet_shippingTimeMax',
		'shippDet_freeShipping',
		'shippDet_shippingType',
		'shippDet_thirdPartyCheckout',
		'shippDet_shippingDiscountProfileID',
		'shippDet_internationalShippingDiscountProfileID',
		'shippDet_sellerExcludeShipToLocationsPreference',
		'shipToLocations',
		'site',
		'startPrice',
		'storeCategoryID',
		'storeCategory2ID',
		'storeURL',
		'timeLeft',
		'title',
		'watchCount',
		'hitCount',
		'locationDefaulted',
		'getItFast',
		'postalCode',
		'galleryType',
		'galleryURL',
		'photoDisplay',
		'pictureURL',
		'pictureSource',
		'dispatchTimeMax',
		'proxyItem',
		'itemSpecifics',
		'bSellerD_street1',
		'bSellerD_cityName',
		'bSellerD_stateOrProvince',
		'bSellerD_countryName',
		'bSellerD_phone',
		'bSellerD_postalCode',
		'bSellerD_companyName',
		'bSellerD_firstName',
		'bSellerD_lastName',
		'bSellerD_email',
		'bSellerD_legalInvoice',
		'buyerGuaranteePrice',
		'returnP_returnsWithinOption',
		'returnP_returnsWithin',
		'returnP_returnsAcceptedOption',
		'returnP_returnsAccepted',
		'returnP_shippingCostPaidByOption',
		'returnP_shippingCostPaidBy',
		'conditionID',
		'conditionDisplayName',
		'postCheckoutExperienceEnabled',
		'sellerProfiles',
		'spd_shippingIrregular',
		'spd_shippingPackage',
		'spd_weightMajor',
		'spd_weightMinor',
		'hideFromSearch',
		'eBayPlus',
		'eBayPlusEligible',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
