<div style="float: left; clear: both;">Price</div>
<div style="clear: both;"></div>
<?php
if (!empty($ebay_traking_price)) {
    foreach ($ebay_traking_price as $ebay_item_id => $ebay_item) {
        ?>
        <div class="item_id">
            <?php echo $ebay_item_id; ?>
        </div>
        <?php
        $details_qty = 0;
        $running_price = 0;
        foreach ($ebay_item as $details) {
            if ($running_price != $details['price']) {
                ?>
                <div class="item_price" title=" <?php echo $details['ebayItemID']; ?>">
                    <?php
                    echo $details['price'];
                    ?>
                </div>
                <?php
            }
            $running_price = $details['price'];
            $details_qty++;
        }
        ?>
        <div>(<?php echo $details_qty; ?>)</div>
        <div style="clear: left;"> </div>
        <?php
    }
} else {
    ?>
    <span class="ok" style="margin: 20px; padding: 10px; float: left;">
        No information for Tracking View Price
    </span>

    <?php
}
?>
<div style="float: left; clear: both;">Store</div>
<div style="clear: both;"></div>
<?php
if (!empty($ebay_traking_store)) {
    foreach ($ebay_traking_store as $ebay_item_id => $ebay_item) {
        ?>
        <div class="item_id">
            <?php echo $ebay_item_id; ?>
        </div>
        <?php
        $details_qty = 0;
        $running_store = 0;
        foreach ($ebay_item as $details) {
            if ($running_store != $details['store']) {
                ?>
                <div class="item_price" title=" <?php echo $details['ebayItemID']; ?>">
                    <?php
                    echo $details['store'];
                    ?>
                </div>
                <?php
            }
            $running_store = $details['store'];
            $details_qty++;
        }
        ?>
        <div>(<?php echo $details_qty; ?>)</div>
        <div style="clear: left;"> </div>
        <?php
    }
} else {
    ?>
    <span class="ok" style="margin: 20px; padding: 10px; float: left;">
        No information for Tracking View Store
    </span>

    <?php
}
?>


<style>
    .ok{
        color: #207305;
        padding: 3px 3px 3px 3px;
        background-color: #FFFFFF;
        border-style: solid;
        border-color: #CCCCCC;
        border-width: 1px;
        margin: 20px;
        padding: 10px;
        float: left;
    }


    .item_id{
        background-color: #DCDCDC;
        width: 70px;
        font-size: 10px;
        text-align: center;
        margin: 1px;
        padding: 1px;
        float: left;
    }
    .item_price{
        background-color: yellow;
        width: 30px;
        font-size: 10px;
        text-align: center;
        margin: 1px;
        padding: 1px;
        float: left;
    }
</style>