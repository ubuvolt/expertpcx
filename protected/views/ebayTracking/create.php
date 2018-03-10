<?php
/* @var $this EbayTrackingController */
/* @var $model EbayTracking */

$this->breadcrumbs=array(
	'Ebay Trackings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EbayTracking', 'url'=>array('index')),
	array('label'=>'Manage EbayTracking', 'url'=>array('admin')),
);
?>

<h1>Create EbayTracking</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>