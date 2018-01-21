
<h2><b>Monitored eBay Prices</b></h2>
<div id="clickme1" style="padding-bottom: 30px" >
    <!--///////////////////////////
    // 1 - monitoring price (refresh button)
    ///////////////////////////-->
    <?php echo CHtml::submitButton('Refresh', array('submit' => '/index.php?r=ebay/getInfo')); ?>

    <!--///////////////////////////
    // 2 - monitoring price (reload button) API CALL
    ///////////////////////////-->
    <?php echo CHtml::submitButton('Reload Price', array('submit' => '/index.php?r=ebay/reloadEbayPrice')); ?>
</div> 
<table>
    <tr>
        <th>ID</th>
        <th>Product</th>
        <th>Seller</th>
        <th>Url</th>
        <th>Price</th>
    </tr>
    <?php
    foreach ($ebay_price_monitor as $item) {
        if ($item->id % 2 == 0 ? $event = 'odd' : $event = 'even')
            
            ?>


        <tr class="<?php echo $event; ?>">
            <th><?php echo $item->id; ?></th>
            <th title="<?php echo $item->product; ?>"><?php echo mb_strimwidth($item->product, 0, 30, "..."); ?></th>
            <th><?php echo $item->seller; ?></th>
            <th title="<?php echo $item->url; ?>"><?php echo mb_strimwidth($item->url, 0, 60, "..."); ?></th>
            <th><?php echo number_format($item->price, 2); ?></th>
        </tr>
        <?php
    }
    ?>
</table>
<div class="row" style="margin-top:30px;" >
<?php echo CHtml::submitButton('Back', array('submit' => '/index.php?r=ebayApi/main')); ?>
</div> 

<style>
    .buttons{
        margin-right: 5px;
        float: left;
    }

    tr:nth-child(1){
        background-color: #81B8D6;
        color: white;
    }
    tr.even
    {
        background: #F8F8F8;

    }
    tr.odd
    {
        background: #E5F1F4;
    }
    th {font-weight: normal; border:1px solid white;}
</style>