<table style="width: 115%">
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
            <td style="width:60px;">
                <button 
                    style="float: left; cursor: pointer;"
                    id="my_<?php echo $eBayId; ?>"
                    class="button_my" 
                    eBayId="<?php echo $eBayId; ?>"
                    eBayPrice="<?php echo $details['currentPrice']; ?>">
                    My 
                </button>
                <button 
                    style="float: left; margin-top: 10px; cursor: pointer;"
                    id="track_<?php echo $eBayId; ?>"
                    class="button_track" 
                    eBayId="<?php echo $eBayId; ?>"
                    eBayPrice="<?php echo $details['currentPrice']; ?>">
                    Track
                </button>
            </td>
        </tr>
        <?php
    }
    ?>
</table>

<div style="background: lightgreen; position: fixed; bottom: 600px; right: 400px;">
    <button style="padding: 5px; padding: 6px; border: solid 1px #09f; display: none; cursor: pointer;" id="submit_button">
        Apply
    </button>
</div>

<script>
    $(function () {

        $.post("/index.php?r=ebaySearch/ajaxClearEbayTracking", {});

        $('.button_my').click(function () {

            var eBayId = $(this).attr('eBayId');
            var eBayPrice = $(this).attr('eBayPrice');
            update_ebay_price_tracking(eBayId, eBayPrice, 'my');

        });
        $('.button_track').click(function () {

            var eBayId = $(this).attr('eBayId');
            var eBayPrice = $(this).attr('eBayPrice');
            update_ebay_price_tracking(eBayId, eBayPrice, 'track');
        });

    });

    var track = false;
    var my = false;
    function update_ebay_price_tracking(eBayId, eBayPrice, flow) {

        $.post("/index.php?r=ebaySearch/ajaxUpdatePriceTracking", {
            ebay_id: eBayId,
            ebay_price: eBayPrice,
            flow: flow
        }, function (response) {

            var parsed = JSON.parse(response);
            if (parsed.status === 'success') {

                if (flow === 'track') {
                    $("#" + parsed.flow + "_" + parsed.ebay_id).prop('disabled', true);
                    $("#" + parsed.flow + "_" + parsed.ebay_id).css('border', 'solid 3px #3d3d29');

                    track = true;
                }
                // disabled all my buttons when first my 
                // is selected
                if (flow === 'my') {
                    $("#my_" + parsed.ebay_id).css('border', 'solid 3px #00ff00');
                    $(".button_my").prop('disabled', true);
                    $("#track_" + parsed.ebay_id).prop('disabled', true);

                    my = true;
                }

                if (track && my) {
                    $('#submit_button').show();
                }

            }
        });

    }

    var stay = (function () {
        var time = 0;
        return function (call_back, ms) {
            clearTimeout(time);
            time = setTimeout(call_back, ms);
        };
    })();
</script>