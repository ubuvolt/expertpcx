    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<div style="float: left;" id="input_search_box">
    Search: 
    <input type="text" style="width: 270px; padding: 3.5px;" id="users_search" name="firstname" placeholder="Enter phrase">
</div>
<div id="clear_search_box" style="float: left; border-width:2px;" class="x-trigger-index-1 x-form-trigger x-form-clear-trigger" role="button">

</div>



<script> 
   $(function (){ 
   $('#users_search').keyup(function (e) {
           var value = $(this).val();

               $.post("/index.php?r=ebaySearch/ajaxEbaySearch", {
                   value: value
               }, function () {

               });

   });


   }); 
</script>