<?php
/* @var $this UpdateEbayItemController */
/* @var $model UpdateEbayItem */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'update-ebay-item-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'data_time'); ?>
		<?php echo $form->textField($model,'data_time',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'data_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'field_name'); ?>
		<?php echo $form->textField($model,'field_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'field_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'old_value'); ?>
		<?php echo $form->textField($model,'old_value',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'old_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'new_value'); ?>
		<?php echo $form->textField($model,'new_value',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'new_value'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->