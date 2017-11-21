<?php
/* @var $this LogEbayItemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Log Ebay Items',
);

$this->menu=array(
	array('label'=>'Create LogEbayItem', 'url'=>array('create')),
	array('label'=>'Manage LogEbayItem', 'url'=>array('admin')),
);
?>

<h1>Log Ebay Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
