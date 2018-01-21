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