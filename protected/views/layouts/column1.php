<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="moduleTile">
    <div style="margin:10px; width:30px; float:left">
        <img width="50"  src='/images/cms.png'>
    </div>
    <div class="moduleTileRight">
<div id="content">
	<?php echo $content; ?>
</div><!-- content -->
</div>
</div>
<?php $this->endContent(); ?>

<style>

    .moduleTile {
        width: 300px;
        border: 1px solid #CCCCCC;
        background-color: #f3f3e5;
        line-height: 20px;
        margin: 20px;
        float: left;
    }
    .moduleTileRight {
        width: 60%;
        height: 200px;
        display: inline-block;
        background-color: #e5e4d4;
        vertical-align: top;
        margin: 10px 10px 10px 0;
        overflow: hidden;
        white-space: nowrap;
        float: right;
        padding:10px;
    }

</style>