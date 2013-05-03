<?php
/* @var $this BrowseController */
$this->pageTitle = Yii::app()->name . ' - Browse';
$this->breadcrumbs = array(
    'Browse',
);
?>
<h1>Browse</h1>

<!--<p>
    You may change the content of this page by modifying
    the file <tt><?php echo __FILE__; ?></tt>.
</p>-->
<div>
    <?php
//new dBug($place);
    foreach ($place as $eachplace) {
        ?> 
        <div class="clearfix">
            <h2>
                <img src="<?= $eachplace['image'] ?>" width="150" height ="100" align ="left"/> <a href="<?= $this->createUrl('browse/place', array('id' => $eachplace['PlaceID'])); ?>" >   <?= $eachplace['Name'] ?>  </a>
            </h2>
            <h4><?= $eachplace['description'] ?></h4>
            <h5>  <?= $eachplace['Address'] ?>  </h5>

            <br />
        </div>
    
    <div style="clear:both"></div>
        <?
    }
    ?>
</div>