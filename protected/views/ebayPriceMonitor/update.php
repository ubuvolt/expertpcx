<?php
/* @var $this EbayPriceMonitorController */
/* @var $model EbayPriceMonitor */

$this->breadcrumbs=array(
	'Ebay Price Monitors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EbayPriceMonitor', 'url'=>array('index')),
	array('label'=>'Create EbayPriceMonitor', 'url'=>array('create')),
	array('label'=>'View EbayPriceMonitor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EbayPriceMonitor', 'url'=>array('admin')),
);
?>

<h1>Update EbayPriceMonitor <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>