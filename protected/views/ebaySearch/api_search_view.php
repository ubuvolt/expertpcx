<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.12.4.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<div style="float: left;" id="input_search_box">
    Search: 
    <input type="text" style="width: 270px; padding: 3.5px;" id="users_search" name="firstname" placeholder="Enter phrase">
</div>
<button id="clear_search_box" style="float: left; height: 26px;">
    x
</button>

<div style="margin-left: 20px; float: left;" >
    <button>
        <a title="ebayApi/main" href="index.php?r=ebayApi/main">Back</a>
    </button>
</div> 

<div style="margin-left: 10px; float: left;" >
    <button>
        <a title="ebayPriceTracking/admin" href="index.php?r=ebayPriceTracking/admin">Trackings Admin</a>
    </button>
</div> 

<div style="margin-left: 10px; float: left;" >
    <button>
        <a title="ebayPriceMonitor/performeItemTracking" href="index.php?r=ebayPriceMonitor/performeItemTracking">Test</a>
    </button>
</div> 

<div style="margin-left: 10px; float: left;" >
    <button>
        <a title="ebayPriceTracking/ebayTrackingView" href="index.php?r=EbayPriceTracking/ebayTrackingView">Tracking View</a>
    </button>
</div> 

<div style="clear: both"></div>
<br>
<br>
<div id="search_result"></div>


<script>
    $(function () {

        $('#users_search').keyup(function (e) {
            var search_value = $(this).val();

            stay(function () {
                load_search_list(search_value);
            }, 800); //1 second in milliseconds
        });

        // clear search box
        //
        $('#clear_search_box').click(function () {
            $('#users_search').val('');
            load_search_list('');
        });

        //
        $(document).on("click", "#submit_button", function () {

            $.post("/index.php?r=ebaySearch/ajaxApplyEbayPriceTracking", {});

            stay(function () {
                window.location.href = 'index.php?r=ebayApi/main';
            }, 500); //1 second in milliseconds

        });

    });

    function load_search_list(search_value) {
        $("#search_result").load("/index.php?r=ebaySearch/ajaxLoadEbaySearchResult", {
            search_value: search_value
        }, function (data) {
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