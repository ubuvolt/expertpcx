
<?php
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
//                    'id' => '1'
//                    'ebayItemID' => '182987807629'
//                    'price' => '21.99'
//                    'modified' => '2018-01-28 00:00:00'
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
?>


<style>
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