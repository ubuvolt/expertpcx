<?php
/* @var $this EbayStoreController */
/* @var $model EbayStore */

$this->breadcrumbs=array(
	'Ebay Stores'=>array('index'),
	$model->Name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EbayStore', 'url'=>array('index')),
	array('label'=>'Create EbayStore', 'url'=>array('create')),
	array('label'=>'View EbayStore', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EbayStore', 'url'=>array('admin')),
);
?>

<h1>Update EbayStore <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>