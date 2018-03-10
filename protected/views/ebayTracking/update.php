<?php
/* @var $this EbayTrackingController */
/* @var $model EbayTracking */

$this->breadcrumbs=array(
	'Ebay Trackings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EbayTracking', 'url'=>array('index')),
	array('label'=>'Create EbayTracking', 'url'=>array('create')),
	array('label'=>'View EbayTracking', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EbayTracking', 'url'=>array('admin')),
);
?>

<h1>Update EbayTracking <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>