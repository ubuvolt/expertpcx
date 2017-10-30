<?php
/* @var $this MyEbaySellingController */
/* @var $model MyEbaySelling */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'my-ebay-selling-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'buyItNowPrice'); ?>
		<?php echo $form->textField($model,'buyItNowPrice'); ?>
		<?php echo $form->error($model,'buyItNowPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'itemID'); ?>
		<?php echo $form->textField($model,'itemID',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'itemID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'startTime'); ?>
		<?php echo $form->textField($model,'startTime',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'startTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'viewItemURL'); ?>
		<?php echo $form->textField($model,'viewItemURL',array('size'=>60,'maxlength'=>2048)); ?>
		<?php echo $form->error($model,'viewItemURL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'viewItemURLForNaturalSearch'); ?>
		<?php echo $form->textField($model,'viewItemURLForNaturalSearch',array('size'=>60,'maxlength'=>2048)); ?>
		<?php echo $form->error($model,'viewItemURLForNaturalSearch'); ?>
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
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currentPrice'); ?>
		<?php echo $form->textField($model,'currentPrice'); ?>
		<?php echo $form->error($model,'currentPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippingServiceCost'); ?>
		<?php echo $form->textField($model,'shippingServiceCost'); ?>
		<?php echo $form->error($model,'shippingServiceCost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippingType'); ?>
		<?php echo $form->textField($model,'shippingType',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'shippingType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timeLeft'); ?>
		<?php echo $form->textField($model,'timeLeft',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'timeLeft'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'watchCount'); ?>
		<?php echo $form->textField($model,'watchCount'); ?>
		<?php echo $form->error($model,'watchCount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantityAvailable'); ?>
		<?php echo $form->textField($model,'quantityAvailable'); ?>
		<?php echo $form->error($model,'quantityAvailable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'galleryURL'); ?>
		<?php echo $form->textField($model,'galleryURL',array('size'=>60,'maxlength'=>2048)); ?>
		<?php echo $form->error($model,'galleryURL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'classifiedAdPayPerLeadFee'); ?>
		<?php echo $form->textField($model,'classifiedAdPayPerLeadFee'); ?>
		<?php echo $form->error($model,'classifiedAdPayPerLeadFee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippingProfileID'); ?>
		<?php echo $form->textField($model,'shippingProfileID',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'shippingProfileID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shippingProfileName'); ?>
		<?php echo $form->textField($model,'shippingProfileName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'shippingProfileName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'returnProfileID'); ?>
		<?php echo $form->textField($model,'returnProfileID',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'returnProfileID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'returnProfileName'); ?>
		<?php echo $form->textField($model,'returnProfileName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'returnProfileName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paymentProfileID'); ?>
		<?php echo $form->textField($model,'paymentProfileID',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'paymentProfileID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paymentProfileName'); ?>
		<?php echo $form->textField($model,'paymentProfileName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'paymentProfileName'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->