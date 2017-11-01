<?php
/* @var $this EbayPriceMonitorController */
/* @var $model EbayPriceMonitor */

$this->breadcrumbs=array(
	'Ebay Price Monitors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EbayPriceMonitor', 'url'=>array('index')),
	array('label'=>'Create EbayPriceMonitor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ebay-price-monitor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2><b>Manage Ebay Price Monitors</b></h2>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ebay-price-monitor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'product',
		'seller',
		'url',
		'price',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<div class="row">
    <?php echo CHtml::submitButton('Back', array('submit' => '/index.php?r=ebayApi/main')); ?>
</div> 