<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>


<div style="width:100%;float:left; display: inline-block">
    <?php
    if ($development)
        d::d($response);
    ?>
</div>
<div class="moduleTile">
    <div class="moduleImage">
        <img src='/images/money.png'><div class="title">Price control</div>
    </div>
    <div class="moduleTileRight">
        <div id="clickme1" class="row buttons">
            <?php echo CHtml::submitButton('Ebay Prices', array('submit' => '/index.php?r=ebay/getInfo')); ?>
        </div> 
        <div id="clickme1" class="row buttons">
            <?php echo CHtml::submitButton('Manage Ebay Price', array('submit' => '/index.php?r=ebayPriceMonitor/admin')); ?>
        </div> 
        <div id="clickme1" class="row buttons">
            <?php echo CHtml::submitButton('Ebay Price Email', array('submit' => '/index.php?r=ebay/ebayPriceEmail')); ?>
        </div> 
    </div>
</div>
<div class="moduleTile">
    <div class="moduleImage">
        <img src='/images/API.png'><div class="title">API</div>
    </div>
    <div class="moduleTileRight">
        <div id="clickme1" class="row buttons" >
            <?php // echo CHtml::Button('Time', array('submit' => '/index.php?r=ebayApi/main/&p=OfficialTime')); ?>
            <button id="official_time">Time</button>
        </div> 
        <div id="clickme1" class="row buttons" >
            <?php echo CHtml::submitButton('eBay Selling', array('submit' => '/index.php?r=ebayApi/main/&p=MyeBaySelling')); ?>
        </div> 
        <div id="clickme1" class="row buttons" >
            <?php echo CHtml::submitButton('eBay GetItem', array('submit' => '/index.php?r=ebayApi/main/&p=GetItem')); ?>
        </div> 
        <div id="clickme1" class="row buttons" >
            <?php echo CHtml::submitButton('eBay GetStore', array('submit' => '/index.php?r=ebayApi/main/&p=GetStore')); ?>
        </div> 
    </div>
</div>
<div class="moduleTile">
    <div class="moduleImage">
        <img src="/images/admin.ico"><div class="title">Admin</div>
    </div>
    <div class="moduleTileRight">
        <div id="clickme1" class="row buttons" >
            <?php echo CHtml::submitButton('eBay Selling', array('submit' => '/index.php?r=myEbaySelling/index')); ?>
        </div> 
        <div id="clickme1" class="row buttons" >
            <?php echo CHtml::submitButton('eBay Items', array('submit' => '/index.php?r=ebayItem/index')); ?>
        </div> 
        <div id="clickme1" class="row buttons" >
            <?php echo CHtml::submitButton('eBay Store', array('submit' => '/index.php?r=ebayStore/index')); ?>
        </div> 
    </div>
</div>
<div class="moduleTile">
    <div class="moduleImage">
        <img src="/images/page-icon.png"><div class="title">Shop</div>
    </div>
    <div class="moduleTileRight">
        <div id="clickme1" class="row buttons">
            <?php echo CHtml::submitButton('Insert data to ShopPage', array('submit' => '/index.php?r=EbayInsetrs/setDataInPresta')); ?>
        </div> 
        <div id="clickme1" class="row buttons">
            <?php echo CHtml::submitButton('Generate Images', array('submit' => '/index.php?r=EbayInsetrs/generateImages')); ?>
        </div> 

    </div> 
</div>
<div class="moduleTile">
    <div class="moduleImage">
        <img src="/images/mailing_list_icon.png"><div class="title">Mailing</div>
    </div>
    <div class="moduleTileRight">
        <div id="clickme1" class="row buttons">
            <a href="http://www.engine.dev/email.html"> <?php echo CHtml::submitButton('Email Templates'); ?></a>
        </div> 
    </div>
</div>

<div id="dialog" title="">
    <div id="ebay_timestamp" class="ebay_timestamp"></div>
    <div id="ebay_ack" class="ebay_timestamp"></div>
    <div id="ebay_version" class="ebay_timestamp"></div>
    <div id="ebay_build" class="ebay_timestamp"></div>
</div>



<script>
    $(function () {
        $("#official_time").click(function () {

            $.post("/index.php?r=ebayApi/ajaxOfficialTime", {
//                key: 'allocator_leads_status_set_buttons'
            }, function (response) {

                var parsed = JSON.parse(response);

                if (parsed.status === 'success') {

                    $('#ebay_timestamp').html('Timestamp [' + parsed.timestamp+']');
                    $('#ebay_ack').html('Ack [' + parsed.ack+']');
                    $('#ebay_version').html('Version [' + parsed.version+']');
                    $('#ebay_build').html('Build [' + parsed.build+']');

                    $("#dialog").dialog();
                    $("#dialog").dialog('option', 'title', 'Ebay Official Time');
                } else {
                    alert('Something went wrong, contact support...')
                }

            });
        });
    });
</script>

<style>

    .ebay_timestamp{
        float: left;
        margin: 5px;
        font-size: 14px;
        clear: both;
    }

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