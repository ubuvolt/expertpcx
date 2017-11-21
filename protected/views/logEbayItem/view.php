<?php
/* @var $this LogEbayItemController */
/* @var $model LogEbayItem */

$this->breadcrumbs=array(
	'Log Ebay Items'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LogEbayItem', 'url'=>array('index')),
	array('label'=>'Create LogEbayItem', 'url'=>array('create')),
	array('label'=>'Update LogEbayItem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LogEbayItem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LogEbayItem', 'url'=>array('admin')),
);
?>

<h1>View LogEbayItem #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'data_time',
		'field_name',
		'old_value',
		'new_value',
	),
)); ?>
