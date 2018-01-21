<?php
/* @var $this EbayItemController */
/* @var $model EbayItem */

$this->breadcrumbs=array(
	'Ebay Items'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EbayItem', 'url'=>array('index')),
	array('label'=>'Create EbayItem', 'url'=>array('create')),
	array('label'=>'View EbayItem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EbayItem', 'url'=>array('admin')),
);
?>

<h1>Update EbayItem <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>