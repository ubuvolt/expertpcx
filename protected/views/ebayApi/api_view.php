<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<div class="moduleTile">
    <div class="moduleImage">
        <img src='/images/money.png'><div class="title">Price control</div>
    </div>
    <div class="moduleTileRight">
        <div class="row buttons">
            <button><?php echo CHtml::link('Ebay Prices', array('ebay/getInfo')); ?></button>
        </div> 
        <div class="row buttons">
            <button><?php echo CHtml::link('Manage Ebay Price', array('ebayPriceMonitor/admin')); ?></button>
        </div> 
        <div class="row buttons">
            <button><?php echo CHtml::link('Ebay Price Email', array('ebay/ebayPriceEmail')); ?></button>
        </div> 
    </div>
</div>
<div class="moduleTile">
    <div class="moduleImage">
        <img src='/images/API.png'><div class="title">API</div>
    </div>
    <div class="moduleTileRight">
        <div class="row buttons" >
            <button id="official_time">Time</button>
        </div> 
        <div class="row buttons" >
            <button>
                <?php echo CHtml::link('eBay Selling', array('ebayApi/main/&attribute=MyeBaySelling')); ?>
            </button>
            <?php
            d::d(EbayApiController::get_central_setting(1, 'get_my_eBay_selling'));
            ?>
            <button>
                <?php echo CHtml::link('Re-Start', array('ebayApi/ReStartBaySelling')); ?>
            </button>
        </div> 
        <div class="row buttons" >
            <button><?php echo CHtml::link('eBay GetItem', array('ebayApi/main/&attribute=GetItem')); ?></button>
        </div> 
        <div class="row buttons" >
            <button><?php echo CHtml::link('eBay GetStore', array('ebayApi/main/&attribute=GetStore')); ?></button>
        </div> 
    </div>
</div>
<div class="moduleTile">
    <div class="moduleImage">
        <img src="/images/admin.ico"><div class="title">Admin</div>
    </div>
    <div class="moduleTileRight">
        <div  class="row buttons" >
            <button><?php echo CHtml::link('eBay Selling', array('myEbaySelling/index')); ?></button>
        </div> 
        <div  class="row buttons" >
            <button><?php echo CHtml::link('eBay Items', array('ebayItem/index')); ?></button>
        </div> 
        <div  class="row buttons" >
            <button><?php echo CHtml::link('eBay Store', array('ebayStore/index')); ?></button>
        </div> 
    </div>
</div>
<div class="moduleTile">
    <div class="moduleImage">
        <img src="/images/page-icon.png"><div class="title">Shop</div>
    </div>
    <div class="moduleTileRight">
        <div  class="row buttons">
            <button><?php echo CHtml::link('Insert data to ShopPage', array('ebayInsetrs/setDataInPresta')); ?></button>
        </div> 
        <div class="row buttons">
            <button><?php echo CHtml::link('Generate Images', array('ebayInsetrs/generateImages')); ?></button>
        </div> 
        <div class="row buttons">
            <button><?php echo CHtml::link('Set Home Categ', array('ebayInsetrs/setHomeCateg')); ?></button>
        </div> 
        <div class="row buttons">
            <button><?php echo CHtml::link('Set Categ', array('ebayInsetrs/setCateg')); ?></button>
        </div> 

    </div> 
</div>
<div class="moduleTile">
    <div class="moduleImage">
        <img src="/images/mailing_list_icon.png"><div class="title">Mailing</div>
    </div>
    <div class="moduleTileRight">
        <div  class="row buttons">
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
            if (confirm("Are you sure you want to Official Time ?")) {
                $.post("/index.php?r=ebayApi/ajaxOfficialTime", {
//                key: 'allocator_leads_status_set_buttons'
                }, function (response) {

                    var parsed = JSON.parse(response);

                    if (parsed.status === 'success') {

                        $('#ebay_timestamp').html('Timestamp [' + parsed.timestamp + ']');
                        $('#ebay_ack').html('Ack [' + parsed.ack + ']');
                        $('#ebay_version').html('Version [' + parsed.version + ']');
                        $('#ebay_build').html('Build [' + parsed.build + ']');

                        $("#dialog").dialog();
                        $("#dialog").dialog('option', 'title', 'Ebay Official Time');
                    } else {
                        alert('Something went wrong, contact support...')
                    }

                });
            }
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

    .buttons{
        text-decoration: none;
    }

    .buttons a {
        color: #000000;
        text-decoration: none;
    }
</style>