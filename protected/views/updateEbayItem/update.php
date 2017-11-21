<?php
/* @var $this UpdateEbayItemController */
/* @var $model UpdateEbayItem */

$this->breadcrumbs=array(
	'Update Ebay Items'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UpdateEbayItem', 'url'=>array('index')),
	array('label'=>'Create UpdateEbayItem', 'url'=>array('create')),
	array('label'=>'View UpdateEbayItem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UpdateEbayItem', 'url'=>array('admin')),
);
?>

<h1>Update UpdateEbayItem <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>