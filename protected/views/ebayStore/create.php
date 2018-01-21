<?php
/* @var $this EbayStoreController */
/* @var $model EbayStore */

$this->breadcrumbs=array(
	'Ebay Stores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EbayStore', 'url'=>array('index')),
	array('label'=>'Manage EbayStore', 'url'=>array('admin')),
);
?>

<h1>Create EbayStore</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>