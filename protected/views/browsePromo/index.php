<?php
/* @var $this BrowsePromoController */

$this->breadcrumbs=array(
	'Browse Promo',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<!--<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>-->
<div>
      <?php
//new dBug($place);
    foreach ($promotion as $eachpromotion) {
        ?> 
     <div class="clearfix">
        <h2>
            
            <img src="<?=$eachpromotion['promotion_picture']?>" width="150" height ="100" align ="left"/> <a href="<?= $this->createUrl('browse/place', array('id' => $eachplace['PlaceID'])); ?>" >   <?= $eachplace['Name'] ?>  </a>
        </h2>
    <h4><?= $eachpromotion['promotion_description'] ?></h4>
       
     </div>
        <br />
        <?
    }
    ?>
</div>
