<?php
/* @var $this MyEbaySellingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'My Ebay Sellings',
);

$this->menu=array(
	array('label'=>'Create MyEbaySelling', 'url'=>array('create')),
	array('label'=>'Manage MyEbaySelling', 'url'=>array('admin')),
);
?>

<h1>My Ebay Sellings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
