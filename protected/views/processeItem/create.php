<?php
/* @var $this ProcesseItemController */
/* @var $model ProcesseItem */

$this->breadcrumbs=array(
	'Processe Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProcesseItem', 'url'=>array('index')),
	array('label'=>'Manage ProcesseItem', 'url'=>array('admin')),
);
?>

<h1>Create ProcesseItem</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>