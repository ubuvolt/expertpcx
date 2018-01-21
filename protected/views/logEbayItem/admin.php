<?php
/* @var $this LogEbayItemController */
/* @var $model LogEbayItem */

$this->breadcrumbs=array(
	'Log Ebay Items'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List LogEbayItem', 'url'=>array('index')),
	array('label'=>'Create LogEbayItem', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#log-ebay-item-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Log Ebay Items</h1>

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
	'id'=>'log-ebay-item-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'data_time',
		'field_name',
		'old_value',
		'new_value',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
