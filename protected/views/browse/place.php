


<h1> <?=$place['Name'] ?></h1>

<img src="<?=$place['picture']?>" />
<h4> <?=$place['description'] ?></h4>
<h5><?=$place['Address'] ?></h5>
<div class="clearfix">
<?php
$this->widget('CStarRating',array('name'=>'rating'));
?>
</div>
<?php
Yii::import('application.extensions.EGMap.*');

$gMap = new EGMap();
$gMap->setJsName('test_map');
$gMap->width = 400;
$gMap->height = 300;
$gMap->zoom = 16;
$gMap->setCenter($place['latitude'], $place['longtitude']);
 
$marker = new EGMapMarker($place['latitude'], $place['longtitude']);

$gMap->addMarker($marker);
 
$gMap->renderMap();
?>
