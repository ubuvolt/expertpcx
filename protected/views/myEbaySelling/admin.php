<?php
/* @var $this MyEbaySellingController */
/* @var $model MyEbaySelling */

$this->breadcrumbs=array(
	'My Ebay Sellings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MyEbaySelling', 'url'=>array('index')),
	array('label'=>'Create MyEbaySelling', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#my-ebay-selling-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage My Ebay Sellings</h1>

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
	'id'=>'my-ebay-selling-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'buyItNowPrice',
		'itemID',
		'startTime',
		'viewItemURL',
		'viewItemURLForNaturalSearch',
		/*
		'listingDuration',
		'listingType',
		'quantity',
		'currentPrice',
		'shippingServiceCost',
		'shippingType',
		'timeLeft',
		'title',
		'watchCount',
		'quantityAvailable',
		'galleryURL',
		'classifiedAdPayPerLeadFee',
		'shippingProfileID',
		'shippingProfileName',
		'returnProfileID',
		'returnProfileName',
		'paymentProfileID',
		'paymentProfileName',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
