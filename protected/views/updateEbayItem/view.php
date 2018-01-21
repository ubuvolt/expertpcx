<?php
/* @var $this UpdateEbayItemController */
/* @var $model UpdateEbayItem */

$this->breadcrumbs=array(
	'Update Ebay Items'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UpdateEbayItem', 'url'=>array('index')),
	array('label'=>'Create UpdateEbayItem', 'url'=>array('create')),
	array('label'=>'Update UpdateEbayItem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UpdateEbayItem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UpdateEbayItem', 'url'=>array('admin')),
);
?>

<h1>View UpdateEbayItem #<?php echo $model->id; ?></h1>

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
