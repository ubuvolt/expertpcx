<?php
/* @var $this LogEbayItemController */
/* @var $data LogEbayItem */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_time')); ?>:</b>
	<?php echo CHtml::encode($data->data_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('field_name')); ?>:</b>
	<?php echo CHtml::encode($data->field_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('old_value')); ?>:</b>
	<?php echo CHtml::encode($data->old_value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('new_value')); ?>:</b>
	<?php echo CHtml::encode($data->new_value); ?>
	<br />


</div>