<?php
/* @var $this EbayStoreController */
/* @var $model EbayStore */

$this->breadcrumbs=array(
	'Ebay Stores'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List EbayStore', 'url'=>array('index')),
	array('label'=>'Create EbayStore', 'url'=>array('create')),
	array('label'=>'Update EbayStore', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EbayStore', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EbayStore', 'url'=>array('admin')),
);
?>

<h1>View EbayStore #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'CategoryID',
		'Name',
		'Order',
	),
)); ?>
