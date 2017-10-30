<?php
/* @var $this MyEbaySellingController */
/* @var $model MyEbaySelling */

$this->breadcrumbs=array(
	'My Ebay Sellings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MyEbaySelling', 'url'=>array('index')),
	array('label'=>'Manage MyEbaySelling', 'url'=>array('admin')),
);
?>

<h1>Create MyEbaySelling</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>