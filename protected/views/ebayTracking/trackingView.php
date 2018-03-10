
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<table>
    <?php
    if (!empty($ebay_tracking)) {
        ?>
        <tr>
            <td>Ebay Item Id</td>
            <td>Modified</td>
        </tr>
        <?php
        foreach ($ebay_tracking as $key => $ebay_item) {
            ?>
            <tr>
                <td>
                    <a href="index.php?r=ebayTracking/getEbayTrackingDetails&ebay_item_id=<?php echo $ebay_item['ebay_item_id']; ?>"><?php echo $ebay_item['ebay_item_id']; ?></a>
                </td>
                <td>
                    <?php echo $ebay_item['modified']; ?>
                </td>
            </tr>
            <?php
        }
    }
    ?>
</table>
