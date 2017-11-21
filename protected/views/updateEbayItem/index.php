<?php
/* @var $this UpdateEbayItemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Update Ebay Items',
);

$this->menu=array(
	array('label'=>'Create UpdateEbayItem', 'url'=>array('create')),
	array('label'=>'Manage UpdateEbayItem', 'url'=>array('admin')),
);
?>

<h1>Update Ebay Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
