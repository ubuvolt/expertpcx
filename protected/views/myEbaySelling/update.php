<?php
/* @var $this MyEbaySellingController */
/* @var $model MyEbaySelling */

$this->breadcrumbs=array(
	'My Ebay Sellings'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MyEbaySelling', 'url'=>array('index')),
	array('label'=>'Create MyEbaySelling', 'url'=>array('create')),
	array('label'=>'View MyEbaySelling', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MyEbaySelling', 'url'=>array('admin')),
);
?>

<h1>Update MyEbaySelling <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>