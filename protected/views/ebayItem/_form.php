<?php
/* @var $this EbayItemController */
/* @var $model EbayItem */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ebay-item-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'timestamp'); ?>
		<?php echo $form->textField($model,'timestamp',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'timestamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ack'); ?>
		<?php echo $form->textField($model,'ack',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ack'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'version'); ?>
		<?php echo $form->textField($model,'version',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'version'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'build'); ?>
		<?php echo $form->textField($model,'build',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'build'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'autoPay'); ?>
		<?php echo $form->textField($model,'autoPay',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'autoPay'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'buyerProtection'); ?>
		<?php echo $form->textField($model,'buyerProtection',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'buyerProtection'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'buyIstNowPrice'); ?>
		<?php echo $form->textField($model,'buyIstNowPrice'); ?>
		<?php echo $form->error($model,'buyIstNowPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currency'); ?>
		<?php echo $form->textField($model,'currency',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'currency'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'giftIcon'); ?>
		<?php echo $form->textField($model,'giftIcon',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'giftIcon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hitCounter'); ?>
		<?php echo $form->textField($model,'hitCounter',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'hitCounter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'itemID'); ?>
		<?php echo $form->textField($model,'itemID',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'itemID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adult'); ?>
		<?php echo $form->textField($model,'adult',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'adult'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bindingAuction'); ?>
		<?php echo $form->textField($model,'bindingAuction',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'bindingAuction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'checkoutEnabled'); ?>
		<?php echo $form->textField($model,'checkoutEnabled',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'checkoutEnabled'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'convertedBuyItNowPrice'); ?>
		<?php echo $form->textField($model,'convertedBuyItNowPrice'); ?>
		<?php echo $form->error($model,'convertedBuyItNowPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'convertedStartPrice'); ?>
		<?php echo $form->textField($model,'convertedStartPrice'); ?>
		<?php echo $form->error($model,'convertedStartPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'convertedReservePrice'); ?>
		<?php echo $form->textField($model,'convertedReservePrice'); ?>
		<?php echo $form->error($model,'convertedReservePrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hasReservePrice'); ?>
		<?php echo $form->textField($model,'hasReservePrice',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'hasReservePrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'startTime'); ?>
		<?php echo $form->textField($model,'startTime',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'startTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endTime'); ?>
		<?php echo $form->textField($model,'endTime',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'endTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'viewItemURL'); ?>
		<?php echo $form->textArea($model,'viewItemURL',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'viewItemURL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hasUnansweredQuestions'); ?>
		<?php echo $form->textField($model,'hasUnansweredQuestions',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'hasUnansweredQuestions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hasPublicMessages'); ?>
		<?php echo $form->textField($model,'hasPublicMessages',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'hasPublicMessages'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'viewItemURLForNaturalSearch'); ?>
		<?php echo $form->textArea($model,'viewItemURLForNaturalSearch',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'viewItemURLForNaturalSearch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'layoutID'); ?>
		<?php echo $form->textField($model,'layoutID',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'layoutID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'themeID'); ?>
		<?php echo $form->textField($model,'themeID',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'themeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'listingDuration'); ?>
		<?php echo $form->textField($model,'listingDuration',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'listingDuration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'listingType'); ?>
		<?php echo $form->textField($model,'listingType',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'listingType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paymentMethods'); ?>
		<?php echo $form->textField($model,'paymentMethods',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'paymentMethods'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payPalEmailAddress'); ?>
		<?php echo $form->textField($model,'payPalEmailAddress',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'payPalEmailAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categoryID'); ?>
		<?php echo $form->textField($model,'categoryID',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'categoryID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categoryName'); ?>
		<?php echo $form->textField($model,'categoryName',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'categoryName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'privateListing'); ?>
		<?php echo $form->textField($model,'privateListing',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'privateListing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EAN'); ?>
		<?php echo $form->textField($model,'EAN',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'EAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'brandMPN'); ?>
		<?php echo $form->textField($model,'brandMPN',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'brandMPN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'includeeBayProductDetails'); ?>
		<?php echo $form->textField($model,'includeeBayProductDetails',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'includeeBayProductDetails'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reservePrice'); ?>
		<?php echo $form->textField($model,'reservePrice'); ?>
		<?php echo $form->error($model,'reservePrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'itemRevised'); ?>
		<?php echo $form->textField($model,'itemRevised',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'itemRevised'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_aboutMePage'); ?>
		<?php echo $form->textField($model,'seller_aboutMePage',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'seller_aboutMePage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_email'); ?>
		<?php echo $form->textField($model,'seller_email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'seller_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_feedbackScore'); ?>
		<?php echo $form->textField($model,'seller_feedbackScore',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'seller_feedbackScore'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_positiveFeedbackPercent'); ?>
		<?php echo $form->textField($model,'seller_positiveFeedbackPercent'); ?>
		<?php echo $form->error($model,'seller_positiveFeedbackPercent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_feedbackPrivate'); ?>
		<?php echo $form->textField($model,'seller_feedbackPrivate',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'seller_feedbackPrivate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_feedbackRatingStar'); ?>
		<?php echo $form->textField($model,'seller_feedbackRatingStar',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'seller_feedbackRatingStar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_IDVerified'); ?>
		<?php echo $form->textField($model,'seller_IDVerified',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'seller_IDVerified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_eBayGoodStanding'); ?>
		<?php echo $form->textField($model,'seller_eBayGoodStanding',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'seller_eBayGoodStanding'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_newUser'); ?>
		<?php echo $form->textField($model,'seller_newUser',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'seller_newUser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_registrationDate'); ?>
		<?php echo $form->textField($model,'seller_registrationDate',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'seller_registrationDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_site'); ?>
		<?php echo $form->textField($model,'seller_site',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'seller_site'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_status'); ?>
		<?php echo $form->textField($model,'seller_status',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'seller_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_userID'); ?>
		<?php echo $form->textField($model,'seller_userID',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'seller_userID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_userIDChanged'); ?>
		<?php echo $form->textField($model,'seller_userIDChanged',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'seller_userIDChanged'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_userIDLastChanged'); ?>
		<?php echo $form->textField($model,'seller_userIDLastChanged',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'seller_userIDLastChanged'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_VATStatus'); ?>
		<?php echo $form->textField($model,'seller_VATStatus',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'seller_VATStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_allowPaymentEdit'); ?>
		<?php echo $form->textField($model,'seller_allowPaymentEdit',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'seller_allowPaymentEdit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_checkoutEnabled'); ?>
		<?php echo $form->textField($model,'seller_checkoutEnabled',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'seller_checkoutEnabled'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_CIPBankAccountStored'); ?>
		<?php echo $form->textField($model,'seller_CIPBankAccountStored',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'seller_CIPBankAccountStored'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_goodStanding'); ?>
		<?php echo $form->textField($model,'seller_goodStanding',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'seller_goodStanding'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_liveAuctionAuthorized'); ?>
		<?php echo $form->textField($model,'seller_liveAuctionAuthorized',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'seller_liveAuctionAuthorized'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_merchandizingPref'); ?>
		<?php echo $form->textField($model,'seller_merchandizingPref',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'seller_merchandizingPref'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_qualifiesForB2BVAT'); ?>
		<?php echo $form->textField($model,'seller_qualifiesForB2BVAT',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'seller_qualifiesForB2BVAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_storeOwner'); ?>
		<?php echo $form->textField($model,'seller_storeOwner',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'seller_storeOwner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_storeURL'); ?>
		<?php echo $form->textArea($model,'seller_storeURL',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'seller_storeURL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_sellerBusinessType'); ?>
		<?php echo $form->textField($model,'seller_sellerBusinessType',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'seller_sellerBusinessType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_safePaymentExempt'); ?>
		<?php echo $form->textField($model,'seller_safePaymentExempt',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'seller_safePaymentExempt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller_motorsDealer'); ?>
		<?php echo $form->textField($model,'seller_motorsDealer',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'seller_motorsDealer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sellingStatus_bidCount'); ?>
		<?php echo $form->textField($model,'sellingStatus_bidCount'); ?>
		<?php echo $form->error($model,'sellingStatus_bidCount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sellingStatus_bidIncrement'); ?>
		<?php echo $form->textField($model,'sellingStatus_bidIncrement'); ?>
		<?php echo $form->error($model,'sellingStatus_bidIncrement'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sellingStatus_convertedCurrentPrice'); ?>
		<?php echo $form->textField($model,'sellingStatus_convertedCurrentPrice'); ?>
		<?php echo $form->error($model,'sellingStatus_convertedCurrentPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sellingStatus_currentPrice'); ?>
		<?php echo $form->textField($model,'sellingStatus_currentPrice'); ?>
		<?php echo $form->error($model,'sellingStatus_currentPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sellingStatus_leadCount'); ?>
		<?php echo $form->textField($model,'sellingStatus_leadCount'); ?>
		<?php echo $form->error($model,'sellingStatus_leadCount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sellingStatus_minimumToBid'); ?>
		<?php echo $form->textField($model,'sellingStatus_minimumToBid'); ?>
		<?php echo $form->error($model,'sellingStatus_minimumToBid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sellingStatus_quantitySold'); ?>
		<?php echo $form->textField($model,'sellingStatus_quantitySold'); ?>
		<?php echo $form->error($model,'sellingStatus_quantitySold'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sellingStatus_reserveMet'); ?>
		<?php echo $form->textField($model,'sellingStatus_reserveMet',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'sellingStatus_reserveMet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sellingStatus_secondChanceEligible'); ?>
		<?php echo $form->textField($model,'sellingStatus_secondChanceEligible',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'sellingStatus_secondChanceEligible'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sellingStatus_listingStatus'); ?>
		<?php echo $form->textField($model,'sellingStatus_listingStatus',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'sellingStatus_listingStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sellingStatus_quantitySoldByPickupInStore'); ?>
		<?php echo $form->textField($model,'sellingStatus_quantitySoldByPickupInStore'); ?>
		<?php echo $form->error($model,'sellingStatus_quantitySoldByPickupInStore'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippDet_applyShippingDiscount'); ?>
		<?php echo $form->textField($model,'shippDet_applyShippingDiscount',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'shippDet_applyShippingDiscount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippDet_weightMajor'); ?>
		<?php echo $form->textField($model,'shippDet_weightMajor'); ?>
		<?php echo $form->error($model,'shippDet_weightMajor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippDet_weightMinor'); ?>
		<?php echo $form->textField($model,'shippDet_weightMinor'); ?>
		<?php echo $form->error($model,'shippDet_weightMinor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippDet_salesTaxPercent'); ?>
		<?php echo $form->textField($model,'shippDet_salesTaxPercent'); ?>
		<?php echo $form->error($model,'shippDet_salesTaxPercent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippDet_shippingIncludedInTax'); ?>
		<?php echo $form->textField($model,'shippDet_shippingIncludedInTax',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'shippDet_shippingIncludedInTax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippDet_shippingService'); ?>
		<?php echo $form->textField($model,'shippDet_shippingService',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'shippDet_shippingService'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippDet_shippingServiceCost'); ?>
		<?php echo $form->textField($model,'shippDet_shippingServiceCost'); ?>
		<?php echo $form->error($model,'shippDet_shippingServiceCost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippDet_shippingServiceAdditionalCost'); ?>
		<?php echo $form->textField($model,'shippDet_shippingServiceAdditionalCost'); ?>
		<?php echo $form->error($model,'shippDet_shippingServiceAdditionalCost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippDet_shippingServicePriority'); ?>
		<?php echo $form->textField($model,'shippDet_shippingServicePriority'); ?>
		<?php echo $form->error($model,'shippDet_shippingServicePriority'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippDet_expeditedService'); ?>
		<?php echo $form->textField($model,'shippDet_expeditedService',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'shippDet_expeditedService'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippDet_shippingTimeMin'); ?>
		<?php echo $form->textField($model,'shippDet_shippingTimeMin',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'shippDet_shippingTimeMin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippDet_shippingTimeMax'); ?>
		<?php echo $form->textField($model,'shippDet_shippingTimeMax',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'shippDet_shippingTimeMax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippDet_freeShipping'); ?>
		<?php echo $form->textField($model,'shippDet_freeShipping',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'shippDet_freeShipping'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippDet_shippingType'); ?>
		<?php echo $form->textField($model,'shippDet_shippingType',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'shippDet_shippingType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippDet_thirdPartyCheckout'); ?>
		<?php echo $form->textField($model,'shippDet_thirdPartyCheckout',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'shippDet_thirdPartyCheckout'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippDet_shippingDiscountProfileID'); ?>
		<?php echo $form->textField($model,'shippDet_shippingDiscountProfileID',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'shippDet_shippingDiscountProfileID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippDet_internationalShippingDiscountProfileID'); ?>
		<?php echo $form->textField($model,'shippDet_internationalShippingDiscountProfileID',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'shippDet_internationalShippingDiscountProfileID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippDet_sellerExcludeShipToLocationsPreference'); ?>
		<?php echo $form->textField($model,'shippDet_sellerExcludeShipToLocationsPreference',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'shippDet_sellerExcludeShipToLocationsPreference'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shipToLocations'); ?>
		<?php echo $form->textField($model,'shipToLocations',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'shipToLocations'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'site'); ?>
		<?php echo $form->textField($model,'site',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'site'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'startPrice'); ?>
		<?php echo $form->textField($model,'startPrice'); ?>
		<?php echo $form->error($model,'startPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'storeCategoryID'); ?>
		<?php echo $form->textField($model,'storeCategoryID',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'storeCategoryID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'storeCategory2ID'); ?>
		<?php echo $form->textField($model,'storeCategory2ID',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'storeCategory2ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'storeURL'); ?>
		<?php echo $form->textArea($model,'storeURL',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'storeURL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timeLeft'); ?>
		<?php echo $form->textField($model,'timeLeft',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'timeLeft'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textArea($model,'title',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'watchCount'); ?>
		<?php echo $form->textField($model,'watchCount'); ?>
		<?php echo $form->error($model,'watchCount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hitCount'); ?>
		<?php echo $form->textField($model,'hitCount'); ?>
		<?php echo $form->error($model,'hitCount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'locationDefaulted'); ?>
		<?php echo $form->textField($model,'locationDefaulted',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'locationDefaulted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'getItFast'); ?>
		<?php echo $form->textField($model,'getItFast',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'getItFast'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postalCode'); ?>
		<?php echo $form->textField($model,'postalCode',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'postalCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'galleryType'); ?>
		<?php echo $form->textField($model,'galleryType',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'galleryType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'galleryURL'); ?>
		<?php echo $form->textArea($model,'galleryURL',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'galleryURL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photoDisplay'); ?>
		<?php echo $form->textField($model,'photoDisplay',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'photoDisplay'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pictureURL'); ?>
		<?php echo $form->textArea($model,'pictureURL',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pictureURL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pictureSource'); ?>
		<?php echo $form->textField($model,'pictureSource',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'pictureSource'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dispatchTimeMax'); ?>
		<?php echo $form->textField($model,'dispatchTimeMax'); ?>
		<?php echo $form->error($model,'dispatchTimeMax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proxyItem'); ?>
		<?php echo $form->textField($model,'proxyItem',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'proxyItem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'itemSpecifics'); ?>
		<?php echo $form->textArea($model,'itemSpecifics',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'itemSpecifics'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bSellerD_street1'); ?>
		<?php echo $form->textField($model,'bSellerD_street1',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'bSellerD_street1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bSellerD_cityName'); ?>
		<?php echo $form->textField($model,'bSellerD_cityName',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'bSellerD_cityName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bSellerD_stateOrProvince'); ?>
		<?php echo $form->textField($model,'bSellerD_stateOrProvince',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'bSellerD_stateOrProvince'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bSellerD_countryName'); ?>
		<?php echo $form->textField($model,'bSellerD_countryName',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'bSellerD_countryName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bSellerD_phone'); ?>
		<?php echo $form->textField($model,'bSellerD_phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'bSellerD_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bSellerD_postalCode'); ?>
		<?php echo $form->textField($model,'bSellerD_postalCode',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'bSellerD_postalCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bSellerD_companyName'); ?>
		<?php echo $form->textField($model,'bSellerD_companyName',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'bSellerD_companyName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bSellerD_firstName'); ?>
		<?php echo $form->textField($model,'bSellerD_firstName',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'bSellerD_firstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bSellerD_lastName'); ?>
		<?php echo $form->textField($model,'bSellerD_lastName',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'bSellerD_lastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bSellerD_email'); ?>
		<?php echo $form->textField($model,'bSellerD_email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'bSellerD_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bSellerD_legalInvoice'); ?>
		<?php echo $form->textField($model,'bSellerD_legalInvoice',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'bSellerD_legalInvoice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'buyerGuaranteePrice'); ?>
		<?php echo $form->textField($model,'buyerGuaranteePrice'); ?>
		<?php echo $form->error($model,'buyerGuaranteePrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'returnP_returnsWithinOption'); ?>
		<?php echo $form->textField($model,'returnP_returnsWithinOption',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'returnP_returnsWithinOption'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'returnP_returnsWithin'); ?>
		<?php echo $form->textField($model,'returnP_returnsWithin',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'returnP_returnsWithin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'returnP_returnsAcceptedOption'); ?>
		<?php echo $form->textField($model,'returnP_returnsAcceptedOption',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'returnP_returnsAcceptedOption'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'returnP_returnsAccepted'); ?>
		<?php echo $form->textField($model,'returnP_returnsAccepted',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'returnP_returnsAccepted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'returnP_shippingCostPaidByOption'); ?>
		<?php echo $form->textField($model,'returnP_shippingCostPaidByOption',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'returnP_shippingCostPaidByOption'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'returnP_shippingCostPaidBy'); ?>
		<?php echo $form->textField($model,'returnP_shippingCostPaidBy',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'returnP_shippingCostPaidBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conditionID'); ?>
		<?php echo $form->textField($model,'conditionID'); ?>
		<?php echo $form->error($model,'conditionID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conditionDisplayName'); ?>
		<?php echo $form->textField($model,'conditionDisplayName',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'conditionDisplayName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postCheckoutExperienceEnabled'); ?>
		<?php echo $form->textField($model,'postCheckoutExperienceEnabled',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'postCheckoutExperienceEnabled'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sp_shippingProfileID'); ?>
		<?php echo $form->textField($model,'sp_shippingProfileID',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'sp_shippingProfileID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sp_shippingProfileName'); ?>
		<?php echo $form->textField($model,'sp_shippingProfileName',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'sp_shippingProfileName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sp_returnProfileID'); ?>
		<?php echo $form->textField($model,'sp_returnProfileID',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'sp_returnProfileID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sp_returnProfileName'); ?>
		<?php echo $form->textField($model,'sp_returnProfileName',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'sp_returnProfileName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sp_paymentProfileID'); ?>
		<?php echo $form->textField($model,'sp_paymentProfileID',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'sp_paymentProfileID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sp_paymentProfileName'); ?>
		<?php echo $form->textField($model,'sp_paymentProfileName',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'sp_paymentProfileName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spd_shippingIrregular'); ?>
		<?php echo $form->textArea($model,'spd_shippingIrregular',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'spd_shippingIrregular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spd_shippingPackage'); ?>
		<?php echo $form->textArea($model,'spd_shippingPackage',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'spd_shippingPackage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spd_weightMajor'); ?>
		<?php echo $form->textArea($model,'spd_weightMajor',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'spd_weightMajor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spd_weightMinor'); ?>
		<?php echo $form->textArea($model,'spd_weightMinor',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'spd_weightMinor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hideFromSearch'); ?>
		<?php echo $form->textField($model,'hideFromSearch',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'hideFromSearch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eBayPlus'); ?>
		<?php echo $form->textField($model,'eBayPlus',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'eBayPlus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eBayPlusEligible'); ?>
		<?php echo $form->textField($model,'eBayPlusEligible',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'eBayPlusEligible'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->