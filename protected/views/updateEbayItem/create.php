<?php
/* @var $this UpdateEbayItemController */
/* @var $model UpdateEbayItem */

$this->breadcrumbs=array(
	'Update Ebay Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UpdateEbayItem', 'url'=>array('index')),
	array('label'=>'Manage UpdateEbayItem', 'url'=>array('admin')),
);
?>

<h1>Create UpdateEbayItem</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>