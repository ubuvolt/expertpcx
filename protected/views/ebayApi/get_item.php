<div class="row">
    <?php echo CHtml::submitButton('Back', array('submit' => '/index.php?r=ebayApi/main')); ?>
</div>
<?php
if (DEVELOPMENT) {
    ?>
    <table border="1">
        <tr>
            <th>User_ID</th>
            <th>Name</th>
            <th>Value</th>
        </tr>

        <?php
        foreach ($admin_central_storage as $details) {
            ?>
            <tr>
                <td><?php echo $details['User_ID']; ?></td>
                <td><?php echo $details['Name']; ?></td>
                <td><?php echo unserialize($details['Value']); ?></td>
            </tr>
            <?php
        }
        ?>

    </table>
    <?php
}
?>
<div class="row">
    <?php echo CHtml::submitButton('Back', array('submit' => '/index.php?r=ebayApi/main')); ?>
</div> 

