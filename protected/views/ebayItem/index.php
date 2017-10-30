<?php
/* @var $this EbayItemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ebay Items',
);

$this->menu=array(
	array('label'=>'Create EbayItem', 'url'=>array('create')),
	array('label'=>'Manage EbayItem', 'url'=>array('admin')),
);
?>

<h1>Ebay Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
