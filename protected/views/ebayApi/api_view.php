<div class="moduleTile">
    <div style="margin:10px; width:60px; float:left">
        <img width="40"  src='/images/cms.png'>
    </div>
    <div class="moduleTileRight">
        <div id="clickme1" class="row buttons" style="float: left; padding: 5px; width: 100%;">
            <?php echo CHtml::submitButton('Ebay Prices', array('submit' => '/index.php?r=ebay/getInfo')); ?>
        </div> 
        <div id="clickme1" class="row buttons" style="float: left; padding: 5px; width: 100%;">
            <?php echo CHtml::submitButton('Manage Ebay Price', array('submit' => '/index.php?r=ebayPriceMonitor/admin')); ?>
        </div> 
    </div>
</div>
<div class="moduleTile">
    <div style="margin:10px; width:60px; float:left">
        <img width="40"  src='/images/api1.jpg'>
    </div>
    <div class="moduleTileRight">
        <div id="clickme1" class="row buttons" style="float: left; padding: 5px; width: 100%;">
            <?php echo CHtml::submitButton('Time', array('submit' => '/index.php?r=ebayApi/main/&p=OfficialTime')); ?>
        </div> 
        <div id="clickme1" class="row buttons" style="float: left; padding: 5px; width: 100%;">
            <?php echo CHtml::submitButton('eBay Selling', array('submit' => '/index.php?r=ebayApi/main/&p=MyeBaySelling')); ?>
        </div> 
        <div id="clickme1" class="row buttons" style="float: left; padding: 5px; width: 100%;">
            <?php echo CHtml::submitButton('eBay GetItem', array('submit' => '/index.php?r=ebayApi/main/&p=GetItem')); ?>
        </div> 
        <div id="clickme1" class="row buttons" style="float: left; padding: 5px; width: 100%;">
            <?php echo CHtml::submitButton('eBay GetStore', array('submit' => '/index.php?r=ebayApi/main/&p=GetStore')); ?>
        </div> 
    </div>
</div>
<div class="moduleTile">
    <div style="margin:10px;  width:60px ; float:left">
        <img  width="40" src="/images/admin.png">
    </div>
    <div class="moduleTileRight">
        <div id="clickme1" class="row buttons" style="float: left; padding: 5px; width: 100%;">
            <?php echo CHtml::submitButton('eBay Selling', array('submit' => '/index.php?r=myEbaySelling/index')); ?>
        </div> 
        <div id="clickme1" class="row buttons" style="float: left; padding: 5px; width: 100%;">
            <?php echo CHtml::submitButton('eBay Items', array('submit' => '/index.php?r=ebayItem/index')); ?>
        </div> 
        <div id="clickme1" class="row buttons" style="float: left; padding: 5px 5px 15px 5px; width: 100%;">
            <?php echo CHtml::submitButton('eBay Store', array('submit' => '/index.php?r=ebayStore/index')); ?>
        </div> 
        <div id="clickme1" class="row buttons" style="float: left; padding: 15px 5px 5px 5px; width: 96%; border-top:2px solid #f3f3e5">
            <?php echo CHtml::submitButton('Insert data to ShopPage', array('submit' => '/index.php?r=EbayInsetrs/setDataInPresta')); ?>
        </div> 

    </div>
</div>
<div style="width:100%;float:left; display: inline-block">
    <?php
    if ($development)
        d::d($response);
    ?>
</div>
<style>

    .moduleTile {
        width: 300px;
        border: 1px solid #CCCCCC;
        background-color: #f3f3e5;
        line-height: 20px;
        margin: 20px;
        float: left;
    }
    .moduleTileRight {
        width: 60%;
        height: 200px;
        display: inline-block;
        background-color: #e5e4d4;
        vertical-align: top;
        margin: 10px 10px 10px 0;
        overflow: hidden;
        white-space: nowrap;
        float: right;
        padding:10px;
    }

</style>