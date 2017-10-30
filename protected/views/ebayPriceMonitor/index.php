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

<h1>Ebay Price Monitors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
