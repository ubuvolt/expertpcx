<?php
/* @var $this ProcesseItemController */
/* @var $model ProcesseItem */

$this->breadcrumbs=array(
	'Processe Items'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProcesseItem', 'url'=>array('index')),
	array('label'=>'Create ProcesseItem', 'url'=>array('create')),
	array('label'=>'View ProcesseItem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProcesseItem', 'url'=>array('admin')),
);
?>

<h1>Update ProcesseItem <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>