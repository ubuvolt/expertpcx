<?php
/* @var $this MyEbaySellingController */
/* @var $data MyEbaySelling */
?>

<div class="view view_cms">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buyItNowPrice')); ?>:</b>
	<?php echo CHtml::encode($data->buyItNowPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('itemID')); ?>:</b>
	<?php echo CHtml::encode($data->itemID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('startTime')); ?>:</b>
	<?php echo CHtml::encode($data->startTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viewItemURL')); ?>:</b>
	<?php echo CHtml::encode($data->viewItemURL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viewItemURLForNaturalSearch')); ?>:</b>
	<?php echo CHtml::encode($data->viewItemURLForNaturalSearch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('listingDuration')); ?>:</b>
	<?php echo CHtml::encode($data->listingDuration); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('listingType')); ?>:</b>
	<?php echo CHtml::encode($data->listingType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currentPrice')); ?>:</b>
	<?php echo CHtml::encode($data->currentPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippingServiceCost')); ?>:</b>
	<?php echo CHtml::encode($data->shippingServiceCost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippingType')); ?>:</b>
	<?php echo CHtml::encode($data->shippingType); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantityAvailable')); ?>:</b>
	<?php echo CHtml::encode($data->quantityAvailable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('galleryURL')); ?>:</b>
	<?php echo CHtml::encode($data->galleryURL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('classifiedAdPayPerLeadFee')); ?>:</b>
	<?php echo CHtml::encode($data->classifiedAdPayPerLeadFee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippingProfileID')); ?>:</b>
	<?php echo CHtml::encode($data->shippingProfileID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shippingProfileName')); ?>:</b>
	<?php echo CHtml::encode($data->shippingProfileName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('returnProfileID')); ?>:</b>
	<?php echo CHtml::encode($data->returnProfileID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('returnProfileName')); ?>:</b>
	<?php echo CHtml::encode($data->returnProfileName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentProfileID')); ?>:</b>
	<?php echo CHtml::encode($data->paymentProfileID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentProfileName')); ?>:</b>
	<?php echo CHtml::encode($data->paymentProfileName); ?>
	<br />

	*/ ?>

</div>
