<?php
/* @var $this EbayPriceTrackingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ebay Price Trackings',
);

$this->menu=array(
	array('label'=>'Create EbayPriceTracking', 'url'=>array('create')),
	array('label'=>'Manage EbayPriceTracking', 'url'=>array('admin')),
);
?>

<h1>Ebay Price Trackings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
