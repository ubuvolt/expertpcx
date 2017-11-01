<?php
/* @var $this EbayPriceMonitorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ebay Price Monitors',
);

$this->menu=array(
	array('label'=>'Create EbayPriceMonitor', 'url'=>array('create')),
	array('label'=>'Manage EbayPriceMonitor', 'url'=>array('admin')),
);
?>

<h2><b>Ebay Price Monitors</b></h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<div class="row" style="margin-top:30px;" >
    <?php echo CHtml::submitButton('Back', array('submit' => '/index.php?r=ebayApi/main')); ?>
</div> 