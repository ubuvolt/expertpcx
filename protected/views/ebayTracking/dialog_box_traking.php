<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

    <div class="tracking_image">
        <br>
        <img src=" <?php echo $product_detail['pictureURL'];?>">
    </div>
    <div class="tracking_details">
        <div> <?php echo '<br><br><b>'.$product_detail['title'].'</b><br><br>';?></div>
        <div> <?php echo 'Condition: <b>'.$product_detail['conditionDisplayName'].'</b><br>';?></div>
        <div> <?php // echo 'ItemID: <b>'.$product_detail['itemID'].'</b><br>';?></div>
        <div> <?php echo 'Category: <b>'.$product_detail['categoryName'].'</b><br>';?></div>
        
        <div> <?php echo 'Quantity: <b>'.$product_detail['quantity'].'</b><br>';?></div>
        <div> <?php echo 'Price: <b> £'.$product_detail['buyIstNowPrice'].'</b><br>';?></div>
    </div>
<div class="tracking_description"> <?php echo '<br>Description:<br> '.$product_detail['description'];?></div>


<div id="dialog_close" style="position:absolute; bottom:10px; right: 10px; padding: 3px ; background:goldenrod ">Close</div>
<script>
    
    $(function () {       
        $('#dialog_close').click(function () {
            $("#dialog_open").dialog('close');
        });
    });
</script>

<style>
    .tracking_image, .tracking_details
    {
        float:left;
        display: inline-block;
        /*clear: both;*/
    }
    .tracking_image
    {    width: 30%;
    }
    .tracking_details
    {    width: 70%;
         
    }
    .tracking_image img
    {
        width: 90%;
        margin-right: 10%;
    }
    .tracking_description{
        clear: both;
    }
 
</style>