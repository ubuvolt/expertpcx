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

<h2><b>Ebay Stores</b></h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<div class="row" style="margin-top:30px;" >
    <?php echo CHtml::submitButton('Back', array('submit' => '/index.php?r=ebayApi/main')); ?>
</div> 
