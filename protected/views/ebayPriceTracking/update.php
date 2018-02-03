<?php
/* @var $this EbayPriceTrackingController */
/* @var $model EbayPriceTracking */

$this->breadcrumbs=array(
	'Ebay Price Trackings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EbayPriceTracking', 'url'=>array('index')),
	array('label'=>'Create EbayPriceTracking', 'url'=>array('create')),
	array('label'=>'View EbayPriceTracking', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EbayPriceTracking', 'url'=>array('admin')),
);
?>

<h1>Update EbayPriceTracking <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>