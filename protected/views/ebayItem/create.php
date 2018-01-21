<?php
/* @var $this EbayItemController */
/* @var $model EbayItem */

$this->breadcrumbs=array(
	'Ebay Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EbayItem', 'url'=>array('index')),
	array('label'=>'Manage EbayItem', 'url'=>array('admin')),
);
?>

<h1>Create EbayItem</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>