<?php
/* @var $this EbayPriceMonitorController */
/* @var $model EbayPriceMonitor */

$this->breadcrumbs=array(
	'Ebay Price Monitors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EbayPriceMonitor', 'url'=>array('index')),
	array('label'=>'Manage EbayPriceMonitor', 'url'=>array('admin')),
);
?>

<h1>Create EbayPriceMonitor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>