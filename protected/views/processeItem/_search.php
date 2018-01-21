<?php
/* @var $this ProcesseItemController */
/* @var $model ProcesseItem */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timestamp'); ?>
		<?php echo $form->textField($model,'timestamp',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ack'); ?>
		<?php echo $form->textField($model,'ack',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'version'); ?>
		<?php echo $form->textField($model,'version',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'build'); ?>
		<?php echo $form->textField($model,'build',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activeList'); ?>
		<?php echo $form->textField($model,'activeList',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'autoPay'); ?>
		<?php echo $form->textField($model,'autoPay',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'buyerProtection'); ?>
		<?php echo $form->textField($model,'buyerProtection',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'buyIstNowPrice'); ?>
		<?php echo $form->textField($model,'buyIstNowPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'currency'); ?>
		<?php echo $form->textField($model,'currency',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'giftIcon'); ?>
		<?php echo $form->textField($model,'giftIcon',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hitCounter'); ?>
		<?php echo $form->textField($model,'hitCounter',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'itemID'); ?>
		<?php echo $form->textField($model,'itemID',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adult'); ?>
		<?php echo $form->textField($model,'adult',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bindingAuction'); ?>
		<?php echo $form->textField($model,'bindingAuction',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'checkoutEnabled'); ?>
		<?php echo $form->textField($model,'checkoutEnabled',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'convertedBuyItNowPrice'); ?>
		<?php echo $form->textField($model,'convertedBuyItNowPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'convertedStartPrice'); ?>
		<?php echo $form->textField($model,'convertedStartPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'convertedReservePrice'); ?>
		<?php echo $form->textField($model,'convertedReservePrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hasReservePrice'); ?>
		<?php echo $form->textField($model,'hasReservePrice',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'startTime'); ?>
		<?php echo $form->textField($model,'startTime',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'endTime'); ?>
		<?php echo $form->textField($model,'endTime',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'viewItemURL'); ?>
		<?php echo $form->textArea($model,'viewItemURL',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hasUnansweredQuestions'); ?>
		<?php echo $form->textField($model,'hasUnansweredQuestions',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hasPublicMessages'); ?>
		<?php echo $form->textField($model,'hasPublicMessages',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'viewItemURLForNaturalSearch'); ?>
		<?php echo $form->textArea($model,'viewItemURLForNaturalSearch',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'layoutID'); ?>
		<?php echo $form->textField($model,'layoutID',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'themeID'); ?>
		<?php echo $form->textField($model,'themeID',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'listingDuration'); ?>
		<?php echo $form->textField($model,'listingDuration',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'listingType'); ?>
		<?php echo $form->textField($model,'listingType',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paymentMethods'); ?>
		<?php echo $form->textField($model,'paymentMethods',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payPalEmailAddress'); ?>
		<?php echo $form->textField($model,'payPalEmailAddress',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categoryID'); ?>
		<?php echo $form->textField($model,'categoryID',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categoryName'); ?>
		<?php echo $form->textField($model,'categoryName',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'privateListing'); ?>
		<?php echo $form->textField($model,'privateListing',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EAN'); ?>
		<?php echo $form->textField($model,'EAN',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brandMPN'); ?>
		<?php echo $form->textField($model,'brandMPN',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'includeeBayProductDetails'); ?>
		<?php echo $form->textField($model,'includeeBayProductDetails',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reservePrice'); ?>
		<?php echo $form->textField($model,'reservePrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'itemRevised'); ?>
		<?php echo $form->textField($model,'itemRevised',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_aboutMePage'); ?>
		<?php echo $form->textField($model,'seller_aboutMePage',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_email'); ?>
		<?php echo $form->textField($model,'seller_email',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_feedbackScore'); ?>
		<?php echo $form->textField($model,'seller_feedbackScore'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_positiveFeedbackPercent'); ?>
		<?php echo $form->textField($model,'seller_positiveFeedbackPercent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_feedbackPrivate'); ?>
		<?php echo $form->textField($model,'seller_feedbackPrivate',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_feedbackRatingStar'); ?>
		<?php echo $form->textField($model,'seller_feedbackRatingStar',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_IDVerified'); ?>
		<?php echo $form->textField($model,'seller_IDVerified'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_eBayGoodStanding'); ?>
		<?php echo $form->textField($model,'seller_eBayGoodStanding',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_newUser'); ?>
		<?php echo $form->textField($model,'seller_newUser',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_registrationDate'); ?>
		<?php echo $form->textField($model,'seller_registrationDate',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_site'); ?>
		<?php echo $form->textField($model,'seller_site',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_status'); ?>
		<?php echo $form->textField($model,'seller_status',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_userID'); ?>
		<?php echo $form->textField($model,'seller_userID',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_userIDChanged'); ?>
		<?php echo $form->textField($model,'seller_userIDChanged',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_userIDLastChanged'); ?>
		<?php echo $form->textField($model,'seller_userIDLastChanged',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_VATStatus'); ?>
		<?php echo $form->textField($model,'seller_VATStatus',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_allowPaymentEdit'); ?>
		<?php echo $form->textField($model,'seller_allowPaymentEdit',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_checkoutEnabled'); ?>
		<?php echo $form->textField($model,'seller_checkoutEnabled',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_CIPBankAccountStored'); ?>
		<?php echo $form->textField($model,'seller_CIPBankAccountStored',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_goodStanding'); ?>
		<?php echo $form->textField($model,'seller_goodStanding',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_liveAuctionAuthorized'); ?>
		<?php echo $form->textField($model,'seller_liveAuctionAuthorized',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_merchandizingPref'); ?>
		<?php echo $form->textField($model,'seller_merchandizingPref',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_qualifiesForB2BVAT'); ?>
		<?php echo $form->textField($model,'seller_qualifiesForB2BVAT',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_storeOwner'); ?>
		<?php echo $form->textField($model,'seller_storeOwner',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_storeURL'); ?>
		<?php echo $form->textArea($model,'seller_storeURL',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_sellerBusinessType'); ?>
		<?php echo $form->textField($model,'seller_sellerBusinessType',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_safePaymentExempt'); ?>
		<?php echo $form->textField($model,'seller_safePaymentExempt',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seller_motorsDealer'); ?>
		<?php echo $form->textField($model,'seller_motorsDealer',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sellingStatus_bidCount'); ?>
		<?php echo $form->textField($model,'sellingStatus_bidCount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sellingStatus_bidIncrement'); ?>
		<?php echo $form->textField($model,'sellingStatus_bidIncrement'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sellingStatus_convertedCurrentPrice'); ?>
		<?php echo $form->textField($model,'sellingStatus_convertedCurrentPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sellingStatus_currentPrice'); ?>
		<?php echo $form->textField($model,'sellingStatus_currentPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sellingStatus_leadCount'); ?>
		<?php echo $form->textField($model,'sellingStatus_leadCount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sellingStatus_minimumToBid'); ?>
		<?php echo $form->textField($model,'sellingStatus_minimumToBid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sellingStatus_quantitySold'); ?>
		<?php echo $form->textField($model,'sellingStatus_quantitySold'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sellingStatus_reserveMet'); ?>
		<?php echo $form->textField($model,'sellingStatus_reserveMet',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sellingStatus_secondChanceEligible'); ?>
		<?php echo $form->textField($model,'sellingStatus_secondChanceEligible',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sellingStatus_listingStatus'); ?>
		<?php echo $form->textField($model,'sellingStatus_listingStatus',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sellingStatus_quantitySoldByPickupInStore'); ?>
		<?php echo $form->textField($model,'sellingStatus_quantitySoldByPickupInStore'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippDet_applyShippingDiscount'); ?>
		<?php echo $form->textField($model,'shippDet_applyShippingDiscount',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippDet_weightMajor'); ?>
		<?php echo $form->textField($model,'shippDet_weightMajor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippDet_salesTaxPercent'); ?>
		<?php echo $form->textField($model,'shippDet_salesTaxPercent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippDet_shippingIncludedInTax'); ?>
		<?php echo $form->textField($model,'shippDet_shippingIncludedInTax',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippDet_shippingService'); ?>
		<?php echo $form->textField($model,'shippDet_shippingService',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippDet_shippingServiceAdditionalCost'); ?>
		<?php echo $form->textField($model,'shippDet_shippingServiceAdditionalCost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippDet_shippingServicePriority'); ?>
		<?php echo $form->textField($model,'shippDet_shippingServicePriority'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippDet_expeditedService'); ?>
		<?php echo $form->textField($model,'shippDet_expeditedService',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippDet_shippingTimeMin'); ?>
		<?php echo $form->textField($model,'shippDet_shippingTimeMin',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippDet_shippingTimeMax'); ?>
		<?php echo $form->textField($model,'shippDet_shippingTimeMax',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippDet_freeShipping'); ?>
		<?php echo $form->textField($model,'shippDet_freeShipping',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippDet_shippingType'); ?>
		<?php echo $form->textField($model,'shippDet_shippingType',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippDet_thirdPartyCheckout'); ?>
		<?php echo $form->textField($model,'shippDet_thirdPartyCheckout',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippDet_shippingDiscountProfileID'); ?>
		<?php echo $form->textField($model,'shippDet_shippingDiscountProfileID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippDet_internationalShippingDiscountProfileID'); ?>
		<?php echo $form->textField($model,'shippDet_internationalShippingDiscountProfileID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippDet_sellerExcludeShipToLocationsPreference'); ?>
		<?php echo $form->textField($model,'shippDet_sellerExcludeShipToLocationsPreference',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shipToLocations'); ?>
		<?php echo $form->textField($model,'shipToLocations',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'site'); ?>
		<?php echo $form->textField($model,'site',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'startPrice'); ?>
		<?php echo $form->textField($model,'startPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'storeCategoryID'); ?>
		<?php echo $form->textField($model,'storeCategoryID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'storeCategory2ID'); ?>
		<?php echo $form->textField($model,'storeCategory2ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'storeURL'); ?>
		<?php echo $form->textArea($model,'storeURL',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timeLeft'); ?>
		<?php echo $form->textField($model,'timeLeft',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textArea($model,'title',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'watchCount'); ?>
		<?php echo $form->textField($model,'watchCount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hitCount'); ?>
		<?php echo $form->textField($model,'hitCount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'locationDefaulted'); ?>
		<?php echo $form->textField($model,'locationDefaulted',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'getItFast'); ?>
		<?php echo $form->textField($model,'getItFast',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'postalCode'); ?>
		<?php echo $form->textField($model,'postalCode',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'galleryType'); ?>
		<?php echo $form->textField($model,'galleryType',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'galleryURL'); ?>
		<?php echo $form->textArea($model,'galleryURL',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'photoDisplay'); ?>
		<?php echo $form->textField($model,'photoDisplay',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pictureURL'); ?>
		<?php echo $form->textArea($model,'pictureURL',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pictureSource'); ?>
		<?php echo $form->textField($model,'pictureSource',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dispatchTimeMax'); ?>
		<?php echo $form->textField($model,'dispatchTimeMax'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proxyItem'); ?>
		<?php echo $form->textField($model,'proxyItem',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'itemSpecifics'); ?>
		<?php echo $form->textArea($model,'itemSpecifics',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bSellerD_street1'); ?>
		<?php echo $form->textField($model,'bSellerD_street1',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bSellerD_cityName'); ?>
		<?php echo $form->textField($model,'bSellerD_cityName',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bSellerD_stateOrProvince'); ?>
		<?php echo $form->textField($model,'bSellerD_stateOrProvince',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bSellerD_countryName'); ?>
		<?php echo $form->textField($model,'bSellerD_countryName',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bSellerD_phone'); ?>
		<?php echo $form->textField($model,'bSellerD_phone',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bSellerD_postalCode'); ?>
		<?php echo $form->textField($model,'bSellerD_postalCode',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bSellerD_companyName'); ?>
		<?php echo $form->textField($model,'bSellerD_companyName',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bSellerD_firstName'); ?>
		<?php echo $form->textField($model,'bSellerD_firstName',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bSellerD_lastName'); ?>
		<?php echo $form->textField($model,'bSellerD_lastName',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bSellerD_email'); ?>
		<?php echo $form->textField($model,'bSellerD_email',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bSellerD_legalInvoice'); ?>
		<?php echo $form->textField($model,'bSellerD_legalInvoice',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'buyerGuaranteePrice'); ?>
		<?php echo $form->textField($model,'buyerGuaranteePrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'returnP_returnsWithinOption'); ?>
		<?php echo $form->textField($model,'returnP_returnsWithinOption',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'returnP_returnsWithin'); ?>
		<?php echo $form->textField($model,'returnP_returnsWithin',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'returnP_returnsAcceptedOption'); ?>
		<?php echo $form->textField($model,'returnP_returnsAcceptedOption',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'returnP_returnsAccepted'); ?>
		<?php echo $form->textField($model,'returnP_returnsAccepted',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'returnP_shippingCostPaidByOption'); ?>
		<?php echo $form->textField($model,'returnP_shippingCostPaidByOption',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'returnP_shippingCostPaidBy'); ?>
		<?php echo $form->textField($model,'returnP_shippingCostPaidBy',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conditionID'); ?>
		<?php echo $form->textField($model,'conditionID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conditionDisplayName'); ?>
		<?php echo $form->textField($model,'conditionDisplayName',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'postCheckoutExperienceEnabled'); ?>
		<?php echo $form->textField($model,'postCheckoutExperienceEnabled',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sellerProfiles'); ?>
		<?php echo $form->textArea($model,'sellerProfiles',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spd_shippingIrregular'); ?>
		<?php echo $form->textField($model,'spd_shippingIrregular',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spd_shippingPackage'); ?>
		<?php echo $form->textField($model,'spd_shippingPackage',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spd_weightMajor'); ?>
		<?php echo $form->textField($model,'spd_weightMajor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spd_weightMinor'); ?>
		<?php echo $form->textField($model,'spd_weightMinor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hideFromSearch'); ?>
		<?php echo $form->textField($model,'hideFromSearch',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eBayPlus'); ?>
		<?php echo $form->textField($model,'eBayPlus',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eBayPlusEligible'); ?>
		<?php echo $form->textField($model,'eBayPlusEligible',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->