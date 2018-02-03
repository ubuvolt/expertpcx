<?php
/* @var $this EbayPriceTrackingController */
/* @var $model EbayPriceTracking */

$this->breadcrumbs=array(
	'Ebay Price Trackings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EbayPriceTracking', 'url'=>array('index')),
	array('label'=>'Create EbayPriceTracking', 'url'=>array('create')),
	array('label'=>'Update EbayPriceTracking', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EbayPriceTracking', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EbayPriceTracking', 'url'=>array('admin')),
);
?>

<h1>View EbayPriceTracking #<?php echo $model->id; ?></h1>

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
