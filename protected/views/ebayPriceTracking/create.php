<?php
/* @var $this EbayPriceTrackingController */
/* @var $model EbayPriceTracking */

$this->breadcrumbs=array(
	'Ebay Price Trackings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EbayPriceTracking', 'url'=>array('index')),
	array('label'=>'Manage EbayPriceTracking', 'url'=>array('admin')),
);
?>

<h1>Create EbayPriceTracking</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>