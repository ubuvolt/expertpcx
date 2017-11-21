<?php
/* @var $this LogEbayItemController */
/* @var $model LogEbayItem */

$this->breadcrumbs=array(
	'Log Ebay Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LogEbayItem', 'url'=>array('index')),
	array('label'=>'Manage LogEbayItem', 'url'=>array('admin')),
);
?>

<h1>Create LogEbayItem</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>