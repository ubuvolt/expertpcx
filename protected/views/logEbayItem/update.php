<?php
/* @var $this LogEbayItemController */
/* @var $model LogEbayItem */

$this->breadcrumbs=array(
	'Log Ebay Items'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LogEbayItem', 'url'=>array('index')),
	array('label'=>'Create LogEbayItem', 'url'=>array('create')),
	array('label'=>'View LogEbayItem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LogEbayItem', 'url'=>array('admin')),
);
?>

<h1>Update LogEbayItem <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>