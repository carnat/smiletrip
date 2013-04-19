<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html xmlns="http://www.w3.org/1999/xhtml">
    <style type ="text/css">
        #wrapper {
            color:blue;
            width:1200px; /*700*/
   margin:20px auto; 
        }
        
        .clearfloat{
            clear:both;
        }
        #gridview li{
            width: 340px; /*160*/
            float : left; /*left*/
            padding: 10px; /*10*/ /*ช่งว่างfont ในกรอบ */
            border : 2px dashed grey;
            list-style-type: none;
            margin : 5px; /* ช่องว่างระหว่างขอบ */
            text-align: center;
        }
        
       .image {
		margin:0 auto; 
		width: 300px; /* 95 */
		height: 250px; /* 75 */
	}
        
	#gridview h4{
		color: green;
	}
        
	#gridview li a{
		display:block;
		background: url(images8/read_more.gif) no-repeat;
		text-indent: -3000px;
		margin:0 auto;
		width:60px;
	}
    #gridview li a:hover{
		background: url(images8/read_more_hover.gif) no-repeat;
	}
        
    #gridview p:first-letter {
		font-size:20px;
		font-weight:bold;
	}
	
</style>
        
</head>  
        


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
        

    
    
<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Welcome to '.CHtml::encode(Yii::app()->name),
)); ?>
<!--testing code-->
<?php 

$this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
      /*  array('image'=>'http://placehold.it/770x400&text=First+thumbnail', 'label'=>'Second Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi po.', '<a href="http://www.google.co.th">click Moi</a>' ), */
        array('image'=>'http://www.zp7738.tld.122.155.18.18.no-domain.name/smiletrip/images1/16x7PlaceQ.jpg', 'label'=>'Royal Palace of Thailand Kingdom', 'caption'=>'A complex of buildings at the heart of Bangkok, Thailand. The palace has been the official residence of the Kings of Siam since 1782.'),
        array('image'=>'http://www.zp7738.tld.122.155.18.18.no-domain.name/smiletrip/images1/16x7EventQ.jpg', 'label'=>'The Siam Niramit Show', 'caption'=>'Takes you on a journey to the enchanted Kingdom of Siam showing you spectacular highlights from Siam glorious past and history'),
        array('image'=>'http://www.zp7738.tld.122.155.18.18.no-domain.name/smiletrip/images1/16x7PromotionQ.jpg' , 'label'=>'Phad-Thai', 'caption'=>'Dish of stir-fried Pho noodles, with eggs, fish sauce, tamarind juice, red chili pepper, plus any combination of bean sprouts, shrimp, chicken '),
 
        ),
));?>

<?php

?>
<!--testing code end-->
<!--<p>Congratulations! You have successfully created your Yii application.</p>-->

<?php $this->endWidget(); ?>


<body>
    
    <div id="wrapper">
  <ul id="gridview">
      <li>     
         <h4>PLACE</h4>
         <!--<div class="image"><img src="images8/picx1.gif" /></div> //-->
         <div class="image"><img src='http://www.zp7738.tld.122.155.18.18.no-domain.name/smiletrip/images1/minorplace.jpg' width='300px' height='300px'/></div>
         <p>Finest places that Smiletrip broughjt to you are one of the best traveling place to attend</p>
        <a href="#">HOT PLACES</a>      
      </li>
     
      <li>    
         <h4>EVENT</h4>
        <div class="image"><img src='http://www.zp7738.tld.122.155.18.18.no-domain.name/smiletrip/images1/minorevent.jpg' width='300px' height='200px' /></div>
         <p>Songkarn Day, Loy Krathong Day and more.Waiting for you to discovered the amaze by yourself.</p>
         <a href="#">HOT EVENTS</a>        
      </li>
    

         <li>     
         <h4>PROMOTION</h4>  
        <div class="image"><img src='http://www.zp7738.tld.122.155.18.18.no-domain.name/smiletrip/images1/minorpromotion.jpg' width='300px' height='500px'/></div>
         <p>Offering the best price for ours members.enjoy our speical gift.MEMBERS ONLY!</p>
         <a href="#">HOT PROMOTION</a>
         
         </li>
     
      
   <!--   
     <li>
         <h4>Pellentesque</h4>
         <img src="images8/picx4.gif" />
         <p>Pellentesque rutrum quam at purus consectetur ac molestie dolor scelerisque.</p>
         <a href="#">read more</a>
      </li> //-->
   
  </ul>
   </div>

     
    <div class="clearfloat"></div>
    
</body>
<!--


<p>You may change the content of this page by modifying the following two files:</p>

<ul>
    <li>View file: <code><?php echo __FILE__; ?></code></li>
    <li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
    the <a href="http://www.yiiframework.com/doc/">documentation</a>.
    Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
    should you have any questions.</p>


//-->







</html>