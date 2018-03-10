<?php
/* @var $this EbayTrackingController */
/* @var $model EbayTracking */

$this->breadcrumbs=array(
	'Ebay Price Trackings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EbayTracking', 'url'=>array('index')),
	array('label'=>'Create EbayTracking', 'url'=>array('create')),
	array('label'=>'Update EbayTracking', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EbayTracking', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EbayTracking', 'url'=>array('admin')),
);
?>

<h1>View EbayTracking #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ebay_item_id',
		'modified',
		'flow',
		'referral_ebay_item_id',
		'price',
		'log',
	),
)); ?>
