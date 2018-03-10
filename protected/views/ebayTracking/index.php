<?php
/* @var $this EbayTrackingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ebay Trackings',
);

$this->menu=array(
	array('label'=>'Create EbayTracking', 'url'=>array('create')),
	array('label'=>'Manage EbayTracking', 'url'=>array('admin')),
);
?>

<h1>Ebay Ebay Tracking</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
