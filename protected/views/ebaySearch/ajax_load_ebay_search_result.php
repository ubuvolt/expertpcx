<table >
    <?php
    foreach ($search_result as $eBayId => $details) {
        ?>
        <tr>
            <td>
                <img src="<?php echo $details['galleryURL']; ?>" height="120" width="120">
            </td>
            <td style="vertical-align: top;">
                <div style="font-size: 10px; font-weight: bold;">
                    Condition: <?php echo $details['conditionDisplayName']; ?> (<?php echo $eBayId; ?>)
                </div>

                <div style="font-size: 12px; margin-top: 5px;">Title: <?php echo $details['title']; ?></div>

                <div title="CCP Converted Current Price" style="font-size: 12px; font-weight: bold; margin-top: 5px;">
                    Current Price: <?php echo $details['currentPrice']; ?> (CCP <?php echo $details['convertedCurrentPrice']; ?>)
                </div>

                <div style="font-size: 10px; margin-top: 5px;">
                    Location: <?php echo $details['postalCode']; ?>, <?php echo $details['location']; ?>, <?php echo $details['country']; ?>
                </div>

                <div style="margin-top: 5px;">
                    <button><a target="_blank" href="<?php echo $details['viewItemURL']; ?>">eBay</a></button>
                </div>
            </td>
            <td>
                <button 
                    style="float: left;"
                    id="my_<?php echo $eBayId; ?>"
                    class="button_my" 
                    eBayId="<?php echo $eBayId; ?>">
                    My 
                </button>
                <button 
                    style="float: left;"
                    id="track_<?php echo $eBayId; ?>"
                    style="margin-top: 10px;" 
                    class="button_track" 
                    eBayId="<?php echo $eBayId; ?>">
                    Track
                </button>
            </td>
        </tr>
        <?php
    }
    ?>
</table>


<script>
    $(function () {

        $('.button_my').click(function () {

            var eBayId = $(this).attr('eBayId');
            update_ebay_price_tracking(eBayId, 'my');

        });
        $('.button_track').click(function () {

            var eBayId = $(this).attr('eBayId');
            update_ebay_price_tracking(eBayId, 'track');
        });
    });


    function update_ebay_price_tracking(eBayId, flow) {

        $.post("/index.php?r=ebaySearch/ajaxUpdateEbayPriceTracking", {
            ebay_id: eBayId,
            flow: flow
        }, function (response) {

            var parsed = JSON.parse(response);
            if (parsed.status === 'success') {

                if (flow === 'track') {
                    $("#" + parsed.flow + "_" + parsed.ebay_id).prop('disabled', true);
                    $("#" + parsed.flow + "_" + parsed.ebay_id).css('border', 'solid 3px #3d3d29');
                }
                // disabled all my buttons when first my 
                // is selected
                if (flow === 'my') {
                    $("#my_" + parsed.ebay_id).css('border', 'solid 3px #00ff00');
                    $(".button_my").prop('disabled', true);
                    $("#track_" + parsed.ebay_id).prop('disabled', true);
                }
            }
        });

    }


</script>