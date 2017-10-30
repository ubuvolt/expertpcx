<div id="clickme1" class="row buttons" >
    <?php echo CHtml::submitButton('Refresh', array('submit' => '/index.php?r=ebay/getInfo')); ?>
</div> 

<div id="clickme1" class="row buttons" >
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
    foreach ($ebm as $item) {
        ?>
        <tr>
            <th><?php echo $item->id; ?></th>
            <th title="<?php echo $item->product; ?>"><?php echo mb_strimwidth($item->product, 0, 30, "..."); ?></th>
            <th><?php echo $item->seller; ?></th>
            <th title="<?php echo $item->url; ?>"><?php echo mb_strimwidth($item->url, 0, 30, "..."); ?></th>
            <th><?php echo number_format($item->price,2); ?></th>
        </tr>
        <?php
    }
    ?>
</table>

<style>
    .buttons{
        margin-right: 5px;
        float: left;
    }
</style>