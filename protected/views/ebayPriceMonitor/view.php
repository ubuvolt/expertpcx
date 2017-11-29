<?php
/* @var $this EbayPriceMonitorController */
/* @var $model EbayPriceMonitor */

$this->breadcrumbs=array(
	'Ebay Price Monitors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EbayPriceMonitor', 'url'=>array('index')),
	array('label'=>'Create EbayPriceMonitor', 'url'=>array('create')),
	array('label'=>'Update EbayPriceMonitor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EbayPriceMonitor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EbayPriceMonitor', 'url'=>array('admin')),
);
?>

<h2><b>View EbayPriceMonitor </h2></b>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product',
		'seller',
		'url',
		'price',
	),
)); ?>

<br>
<div class="row">
    <?php echo CHtml::submitButton('Back', array('submit' => '/index.php?r=ebayApi/main')); ?>
</div>
