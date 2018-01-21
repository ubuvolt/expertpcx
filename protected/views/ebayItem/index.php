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

<h2><b>Ebay Items</b></h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<div class="row" style="margin-top:30px;" >
    <?php echo CHtml::submitButton('Back', array('submit' => '/index.php?r=ebayApi/main')); ?>
</div> 
