<?php
/* @var $this MyEbaySellingController */
/* @var $model MyEbaySelling */
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
		<?php echo $form->label($model,'buyItNowPrice'); ?>
		<?php echo $form->textField($model,'buyItNowPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'itemID'); ?>
		<?php echo $form->textField($model,'itemID',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'startTime'); ?>
		<?php echo $form->textField($model,'startTime',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'viewItemURL'); ?>
		<?php echo $form->textField($model,'viewItemURL',array('size'=>60,'maxlength'=>2048)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'viewItemURLForNaturalSearch'); ?>
		<?php echo $form->textField($model,'viewItemURLForNaturalSearch',array('size'=>60,'maxlength'=>2048)); ?>
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
		<?php echo $form->label($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'currentPrice'); ?>
		<?php echo $form->textField($model,'currentPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippingServiceCost'); ?>
		<?php echo $form->textField($model,'shippingServiceCost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippingType'); ?>
		<?php echo $form->textField($model,'shippingType',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timeLeft'); ?>
		<?php echo $form->textField($model,'timeLeft',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'watchCount'); ?>
		<?php echo $form->textField($model,'watchCount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantityAvailable'); ?>
		<?php echo $form->textField($model,'quantityAvailable'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'galleryURL'); ?>
		<?php echo $form->textField($model,'galleryURL',array('size'=>60,'maxlength'=>2048)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'classifiedAdPayPerLeadFee'); ?>
		<?php echo $form->textField($model,'classifiedAdPayPerLeadFee'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippingProfileID'); ?>
		<?php echo $form->textField($model,'shippingProfileID',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shippingProfileName'); ?>
		<?php echo $form->textField($model,'shippingProfileName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'returnProfileID'); ?>
		<?php echo $form->textField($model,'returnProfileID',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'returnProfileName'); ?>
		<?php echo $form->textField($model,'returnProfileName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paymentProfileID'); ?>
		<?php echo $form->textField($model,'paymentProfileID',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paymentProfileName'); ?>
		<?php echo $form->textField($model,'paymentProfileName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->