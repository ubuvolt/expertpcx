<?php
/* @var $this ProcesseItemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Processe Items',
);

$this->menu=array(
	array('label'=>'Create ProcesseItem', 'url'=>array('create')),
	array('label'=>'Manage ProcesseItem', 'url'=>array('admin')),
);
?>

<h1>Processe Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
