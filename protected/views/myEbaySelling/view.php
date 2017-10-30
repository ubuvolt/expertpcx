<?php
/* @var $this MyEbaySellingController */
/* @var $model MyEbaySelling */

$this->breadcrumbs=array(
	'My Ebay Sellings'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List MyEbaySelling', 'url'=>array('index')),
	array('label'=>'Create MyEbaySelling', 'url'=>array('create')),
	array('label'=>'Update MyEbaySelling', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MyEbaySelling', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MyEbaySelling', 'url'=>array('admin')),
);
?>

<h1>View MyEbaySelling #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'buyItNowPrice',
		'itemID',
		'startTime',
		'viewItemURL',
		'viewItemURLForNaturalSearch',
		'listingDuration',
		'listingType',
		'quantity',
		'currentPrice',
		'shippingServiceCost',
		'shippingType',
		'timeLeft',
		'title',
		'watchCount',
		'quantityAvailable',
		'galleryURL',
		'classifiedAdPayPerLeadFee',
		'shippingProfileID',
		'shippingProfileName',
		'returnProfileID',
		'returnProfileName',
		'paymentProfileID',
		'paymentProfileName',
	),
)); ?>
