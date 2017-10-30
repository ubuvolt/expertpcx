<?php
/* @var $this EbayStoreController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ebay Stores',
);

$this->menu=array(
	array('label'=>'Create EbayStore', 'url'=>array('create')),
	array('label'=>'Manage EbayStore', 'url'=>array('admin')),
);
?>

<h1>Ebay Stores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
