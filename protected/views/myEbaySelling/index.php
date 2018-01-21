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

<h2><b>My Ebay Sellings</b></h2>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<div class="row" style="margin-top:30px;" >
    <?php echo CHtml::submitButton('Back', array('submit' => '/index.php?r=ebayApi/main')); ?>
</div> 
