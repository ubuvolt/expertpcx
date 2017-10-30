<?php
/* @var $this ProcesseItemController */
/* @var $data ProcesseItem */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->timestamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ack')); ?>:</b>
	<?php echo CHtml::encode($data->ack); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('version')); ?>:</b>
	<?php echo CHtml::encode($data->version); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('build')); ?>:</b>
	<?php echo CHtml::encode($data->build); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activeList')); ?>:</b>
	<?php echo CHtml::encode($data->activeList); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('autoPay')); ?>:</b>
	<?php echo CHtml::encode($data->autoPay); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('buyerProtection')); ?>:</b>
	<?php echo CHtml::encode($data->buyerProtection); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buyIstNowPrice')); ?>:</b>
	<?php echo CHtml::encode($data->buyIstNowPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currency')); ?>:</b>
	<?php echo CHtml::encode($data->currency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('giftIcon')); ?>:</b>
	<?php echo CHtml::encode($data->giftIcon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hitCounter')); ?>:</b>
	<?php echo CHtml::encode($data->hitCounter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('itemID')); ?>:</b>
	<?php echo CHtml::encode($data->itemID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adult')); ?>:</b>
	<?php echo CHtml::encode($data->adult); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bindingAuction')); ?>:</b>
	<?php echo CHtml::encode($data->bindingAuction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('checkoutEnabled')); ?>:</b>
	<?php echo CHtml::encode($data->checkoutEnabled); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('convertedBuyItNowPrice')); ?>:</b>
	<?php echo CHtml::encode($data->convertedBuyItNowPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('convertedStartPrice')); ?>:</b>
	<?php echo CHtml::encode($data->convertedStartPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('convertedReservePrice')); ?>:</b>
	<?php echo CHtml::encode($data->convertedReservePrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hasReservePrice')); ?>:</b>
	<?php echo CHtml::encode($data->hasReservePrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('startTime')); ?>:</b>
	<?php echo CHtml::encode($data->startTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endTime')); ?>:</b>
	<?php echo CHtml::encode($data->endTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viewItemURL')); ?>:</b>
	<?php echo CHtml::encode($data->viewItemURL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hasUnansweredQuestions')); ?>:</b>
	<?php echo CHtml::encode($data->hasUnansweredQuestions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hasPublicMessages')); ?>:</b>
	<?php echo CHtml::encode($data->hasPublicMessages); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viewItemURLForNaturalSearch')); ?>:</b>
	<?php echo CHtml::encode($data->viewItemURLForNaturalSearch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('layoutID')); ?>:</b>
	<?php echo CHtml::encode($data->layoutID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('themeID')); ?>:</b>
	<?php echo CHtml::encode($data->themeID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('listingDuration')); ?>:</b>
	<?php echo CHtml::encode($data->listingDuration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('listingType')); ?>:</b>
	<?php echo CHtml::encode($data->listingType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentMethods')); ?>:</b>
	<?php echo CHtml::encode($data->paymentMethods); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payPalEmailAddress')); ?>:</b>
	<?php echo CHtml::encode($data->payPalEmailAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoryID')); ?>:</b>
	<?php echo CHtml::encode($data->categoryID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoryName')); ?>:</b>
	<?php echo CHtml::encode($data->categoryName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('privateListing')); ?>:</b>
	<?php echo CHtml::encode($data->privateListing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EAN')); ?>:</b>
	<?php echo CHtml::encode($data->EAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brandMPN')); ?>:</b>
	<?php echo CHtml::encode($data->brandMPN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('includeeBayProductDetails')); ?>:</b>
	<?php echo CHtml::encode($data->includeeBayProductDetails); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reservePrice')); ?>:</b>
	<?php echo CHtml::encode($data->reservePrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('itemRevised')); ?>:</b>
	<?php echo CHtml::encode($data->itemRevised); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_aboutMePage')); ?>:</b>
	<?php echo CHtml::encode($data->seller_aboutMePage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_email')); ?>:</b>
	<?php echo CHtml::encode($data->seller_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_feedbackScore')); ?>:</b>
	<?php echo CHtml::encode($data->seller_feedbackScore); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_positiveFeedbackPercent')); ?>:</b>
	<?php echo CHtml::encode($data->seller_positiveFeedbackPercent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_feedbackPrivate')); ?>:</b>
	<?php echo CHtml::encode($data->seller_feedbackPrivate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_feedbackRatingStar')); ?>:</b>
	<?php echo CHtml::encode($data->seller_feedbackRatingStar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_IDVerified')); ?>:</b>
	<?php echo CHtml::encode($data->seller_IDVerified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_eBayGoodStanding')); ?>:</b>
	<?php echo CHtml::encode($data->seller_eBayGoodStanding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_newUser')); ?>:</b>
	<?php echo CHtml::encode($data->seller_newUser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_registrationDate')); ?>:</b>
	<?php echo CHtml::encode($data->seller_registrationDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_site')); ?>:</b>
	<?php echo CHtml::encode($data->seller_site); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_status')); ?>:</b>
	<?php echo CHtml::encode($data->seller_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_userID')); ?>:</b>
	<?php echo CHtml::encode($data->seller_userID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_userIDChanged')); ?>:</b>
	<?php echo CHtml::encode($data->seller_userIDChanged); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_userIDLastChanged')); ?>:</b>
	<?php echo CHtml::encode($data->seller_userIDLastChanged); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_VATStatus')); ?>:</b>
	<?php echo CHtml::encode($data->seller_VATStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_allowPaymentEdit')); ?>:</b>
	<?php echo CHtml::encode($data->seller_allowPaymentEdit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_checkoutEnabled')); ?>:</b>
	<?php echo CHtml::encode($data->seller_checkoutEnabled); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_CIPBankAccountStored')); ?>:</b>
	<?php echo CHtml::encode($data->seller_CIPBankAccountStored); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_goodStanding')); ?>:</b>
	<?php echo CHtml::encode($data->seller_goodStanding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_liveAuctionAuthorized')); ?>:</b>
	<?php echo CHtml::encode($data->seller_liveAuctionAuthorized); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_merchandizingPref')); ?>:</b>
	<?php echo CHtml::encode($data->seller_merchandizingPref); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_qualifiesForB2BVAT')); ?>:</b>
	<?php echo CHtml::encode($data->seller_qualifiesForB2BVAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_storeOwner')); ?>:</b>
	<?php echo CHtml::encode($data->seller_storeOwner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_storeURL')); ?>:</b>
	<?php echo CHtml::encode($data->seller_storeURL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_sellerBusinessType')); ?>:</b>
	<?php echo CHtml::encode($data->seller_sellerBusinessType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_safePaymentExempt')); ?>:</b>
	<?php echo CHtml::encode($data->seller_safePaymentExempt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seller_motorsDealer')); ?>:</b>
	<?php echo CHtml::encode($data->seller_motorsDealer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sellingStatus_bidCount')); ?>:</b>
	<?php echo CHtml::encode($data->sellingStatus_bidCount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sellingStatus_bidIncrement')); ?>:</b>
	<?php echo CHtml::encode($data->sellingStatus_bidIncrement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sellingStatus_convertedCurrentPrice')); ?>:</b>
	<?php echo CHtml::encode($data->sellingStatus_convertedCurrentPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sellingStatus_currentPrice')); ?>:</b>
	<?php echo CHtml::encode($data->sellingStatus_currentPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sellingStatus_leadCount')); ?>:</b>
	<?php echo CHtml::encode($data->sellingStatus_leadCount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sellingStatus_minimumToBid')); ?>:</b>
	<?php echo CHtml::encode($data->sellingStatus_minimumToBid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sellingStatus_quantitySold')); ?>:</b>
	<?php echo CHtml::encode($data->sellingStatus_quantitySold); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sellingStatus_reserveMet')); ?>:</b>
	<?php echo CHtml::encode($data->sellingStatus_reserveMet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sellingStatus_secondChanceEligible')); ?>:</b>
	<?php echo CHtml::encode($data->sellingStatus_secondChanceEligible); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sellingStatus_listingStatus')); ?>:</b>
	<?php echo CHtml::encode($data->sellingStatus_listingStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sellingStatus_quantitySoldByPickupInStore')); ?>:</b>
	<?php echo CHtml::encode($data->sellingStatus_quantitySoldByPickupInStore); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippDet_applyShippingDiscount')); ?>:</b>
	<?php echo CHtml::encode($data->shippDet_applyShippingDiscount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippDet_weightMajor')); ?>:</b>
	<?php echo CHtml::encode($data->shippDet_weightMajor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippDet_salesTaxPercent')); ?>:</b>
	<?php echo CHtml::encode($data->shippDet_salesTaxPercent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippDet_shippingIncludedInTax')); ?>:</b>
	<?php echo CHtml::encode($data->shippDet_shippingIncludedInTax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippDet_shippingService')); ?>:</b>
	<?php echo CHtml::encode($data->shippDet_shippingService); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippDet_shippingServiceAdditionalCost')); ?>:</b>
	<?php echo CHtml::encode($data->shippDet_shippingServiceAdditionalCost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippDet_shippingServicePriority')); ?>:</b>
	<?php echo CHtml::encode($data->shippDet_shippingServicePriority); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippDet_expeditedService')); ?>:</b>
	<?php echo CHtml::encode($data->shippDet_expeditedService); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippDet_shippingTimeMin')); ?>:</b>
	<?php echo CHtml::encode($data->shippDet_shippingTimeMin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippDet_shippingTimeMax')); ?>:</b>
	<?php echo CHtml::encode($data->shippDet_shippingTimeMax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippDet_freeShipping')); ?>:</b>
	<?php echo CHtml::encode($data->shippDet_freeShipping); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippDet_shippingType')); ?>:</b>
	<?php echo CHtml::encode($data->shippDet_shippingType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippDet_thirdPartyCheckout')); ?>:</b>
	<?php echo CHtml::encode($data->shippDet_thirdPartyCheckout); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippDet_shippingDiscountProfileID')); ?>:</b>
	<?php echo CHtml::encode($data->shippDet_shippingDiscountProfileID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippDet_internationalShippingDiscountProfileID')); ?>:</b>
	<?php echo CHtml::encode($data->shippDet_internationalShippingDiscountProfileID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippDet_sellerExcludeShipToLocationsPreference')); ?>:</b>
	<?php echo CHtml::encode($data->shippDet_sellerExcludeShipToLocationsPreference); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipToLocations')); ?>:</b>
	<?php echo CHtml::encode($data->shipToLocations); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site')); ?>:</b>
	<?php echo CHtml::encode($data->site); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('startPrice')); ?>:</b>
	<?php echo CHtml::encode($data->startPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('storeCategoryID')); ?>:</b>
	<?php echo CHtml::encode($data->storeCategoryID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('storeCategory2ID')); ?>:</b>
	<?php echo CHtml::encode($data->storeCategory2ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('storeURL')); ?>:</b>
	<?php echo CHtml::encode($data->storeURL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timeLeft')); ?>:</b>
	<?php echo CHtml::encode($data->timeLeft); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('watchCount')); ?>:</b>
	<?php echo CHtml::encode($data->watchCount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hitCount')); ?>:</b>
	<?php echo CHtml::encode($data->hitCount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('locationDefaulted')); ?>:</b>
	<?php echo CHtml::encode($data->locationDefaulted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('getItFast')); ?>:</b>
	<?php echo CHtml::encode($data->getItFast); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postalCode')); ?>:</b>
	<?php echo CHtml::encode($data->postalCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('galleryType')); ?>:</b>
	<?php echo CHtml::encode($data->galleryType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('galleryURL')); ?>:</b>
	<?php echo CHtml::encode($data->galleryURL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photoDisplay')); ?>:</b>
	<?php echo CHtml::encode($data->photoDisplay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pictureURL')); ?>:</b>
	<?php echo CHtml::encode($data->pictureURL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pictureSource')); ?>:</b>
	<?php echo CHtml::encode($data->pictureSource); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dispatchTimeMax')); ?>:</b>
	<?php echo CHtml::encode($data->dispatchTimeMax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proxyItem')); ?>:</b>
	<?php echo CHtml::encode($data->proxyItem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('itemSpecifics')); ?>:</b>
	<?php echo CHtml::encode($data->itemSpecifics); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bSellerD_street1')); ?>:</b>
	<?php echo CHtml::encode($data->bSellerD_street1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bSellerD_cityName')); ?>:</b>
	<?php echo CHtml::encode($data->bSellerD_cityName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bSellerD_stateOrProvince')); ?>:</b>
	<?php echo CHtml::encode($data->bSellerD_stateOrProvince); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bSellerD_countryName')); ?>:</b>
	<?php echo CHtml::encode($data->bSellerD_countryName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bSellerD_phone')); ?>:</b>
	<?php echo CHtml::encode($data->bSellerD_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bSellerD_postalCode')); ?>:</b>
	<?php echo CHtml::encode($data->bSellerD_postalCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bSellerD_companyName')); ?>:</b>
	<?php echo CHtml::encode($data->bSellerD_companyName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bSellerD_firstName')); ?>:</b>
	<?php echo CHtml::encode($data->bSellerD_firstName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bSellerD_lastName')); ?>:</b>
	<?php echo CHtml::encode($data->bSellerD_lastName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bSellerD_email')); ?>:</b>
	<?php echo CHtml::encode($data->bSellerD_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bSellerD_legalInvoice')); ?>:</b>
	<?php echo CHtml::encode($data->bSellerD_legalInvoice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buyerGuaranteePrice')); ?>:</b>
	<?php echo CHtml::encode($data->buyerGuaranteePrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('returnP_returnsWithinOption')); ?>:</b>
	<?php echo CHtml::encode($data->returnP_returnsWithinOption); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('returnP_returnsWithin')); ?>:</b>
	<?php echo CHtml::encode($data->returnP_returnsWithin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('returnP_returnsAcceptedOption')); ?>:</b>
	<?php echo CHtml::encode($data->returnP_returnsAcceptedOption); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('returnP_returnsAccepted')); ?>:</b>
	<?php echo CHtml::encode($data->returnP_returnsAccepted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('returnP_shippingCostPaidByOption')); ?>:</b>
	<?php echo CHtml::encode($data->returnP_shippingCostPaidByOption); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('returnP_shippingCostPaidBy')); ?>:</b>
	<?php echo CHtml::encode($data->returnP_shippingCostPaidBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conditionID')); ?>:</b>
	<?php echo CHtml::encode($data->conditionID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conditionDisplayName')); ?>:</b>
	<?php echo CHtml::encode($data->conditionDisplayName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postCheckoutExperienceEnabled')); ?>:</b>
	<?php echo CHtml::encode($data->postCheckoutExperienceEnabled); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sellerProfiles')); ?>:</b>
	<?php echo CHtml::encode($data->sellerProfiles); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spd_shippingIrregular')); ?>:</b>
	<?php echo CHtml::encode($data->spd_shippingIrregular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spd_shippingPackage')); ?>:</b>
	<?php echo CHtml::encode($data->spd_shippingPackage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spd_weightMajor')); ?>:</b>
	<?php echo CHtml::encode($data->spd_weightMajor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spd_weightMinor')); ?>:</b>
	<?php echo CHtml::encode($data->spd_weightMinor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hideFromSearch')); ?>:</b>
	<?php echo CHtml::encode($data->hideFromSearch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eBayPlus')); ?>:</b>
	<?php echo CHtml::encode($data->eBayPlus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eBayPlusEligible')); ?>:</b>
	<?php echo CHtml::encode($data->eBayPlusEligible); ?>
	<br />

	*/ ?>

</div>