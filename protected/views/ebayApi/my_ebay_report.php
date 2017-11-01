<?php
echo '<h2><b>'.$message.'</h2></b>';
echo 'saved ok -  <b>' . $count_saved.'</b><br>';

echo 'saved error - <b> ' . $count_error.'</b>';
       
?>
<div class="row" style="margin-top:30px;" >
    <?php echo CHtml::submitButton('Back', array('submit' => '/index.php?r=ebayApi/main')); ?>
</div> 
