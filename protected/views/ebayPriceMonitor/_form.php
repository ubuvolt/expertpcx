<?php
/* @var $this EbayPriceMonitorController */
/* @var $model EbayPriceMonitor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ebay-price-monitor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

<!--	<div class="row">
		<?php echo $form->labelEx($model,'product'); ?>
		<?php echo $form->textField($model,'product',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'product'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seller'); ?>
		<?php echo $form->textField($model,'seller',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'seller'); ?>
	</div>-->

<div class="row" style="width: 500px;">
		<div style = " padding: 5px;border-bottom:2px solid white; padding: 5px;color:#840b00; background: #e5e4d4"><?php echo 'Enter URL address'; ?> </div>
                <div style=" padding: 10px; background-color: #f3f3e5"><?php echo $form->textField($model,'url',array('size'=>58,'maxlength'=>2048)); ?> </div>
		<?php echo $form->error($model,'url'); ?>
	</div>

<!--	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>-->

	<div class="row buttons">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
            <?php echo CHtml::submitButton('Back', array('submit' => '/index.php?r=ebayApi/main')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<style>
    .buttons{
        margin-right: 5px;
        float: left;
    }
    
    tr:nth-child(1){
        background-color: #81B8D6;
        color: white;
    }
    tr.even
    {
        background: #F8F8F8;
            
    }
    tr.odd
    {
        background: #E5F1F4;
    }
    th {font-weight: normal; border:1px solid white;}
</style>