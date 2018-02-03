<?php
/* @var $this EbayPriceTrackingController */
/* @var $model EbayPriceTracking */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ebay-price-tracking-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ebay_item_id'); ?>
		<?php echo $form->textField($model,'ebay_item_id',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'ebay_item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modified'); ?>
		<?php echo $form->textField($model,'modified'); ?>
		<?php echo $form->error($model,'modified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flow'); ?>
		<?php echo $form->textField($model,'flow'); ?>
		<?php echo $form->error($model,'flow'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'referral_ebay_item_id'); ?>
		<?php echo $form->textField($model,'referral_ebay_item_id',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'referral_ebay_item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'log'); ?>
		<?php echo $form->textArea($model,'log',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'log'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->