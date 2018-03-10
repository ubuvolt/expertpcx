<?php
/* @var $this EbayTrackingController */
/* @var $data EbayTracking */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ebay_item_id')); ?>:</b>
	<?php echo CHtml::encode($data->ebay_item_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified')); ?>:</b>
	<?php echo CHtml::encode($data->modified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flow')); ?>:</b>
	<?php echo CHtml::encode($data->flow); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('referral_ebay_item_id')); ?>:</b>
	<?php echo CHtml::encode($data->referral_ebay_item_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('log')); ?>:</b>
	<?php echo CHtml::encode($data->log); ?>
	<br />


</div>