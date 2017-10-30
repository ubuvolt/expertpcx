<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div id="clickme1" class="row buttons" >
    <?php echo CHtml::submitButton('Ebay Prices', array('submit' => '/index.php?r=ebay/getInfo')); ?>
</div> 
<br>
<div id="clickme1" class="row buttons" >
    <?php echo CHtml::submitButton('Manage Ebay Price', array('submit' => '/index.php?r=ebayPriceMonitor/admin')); ?>
</div> 
<br>
<div id="clickme1" class="row buttons" >
    <?php echo CHtml::submitButton('Test API', array('submit' => '/index.php?r=ebayApi/main')); ?>
</div> 