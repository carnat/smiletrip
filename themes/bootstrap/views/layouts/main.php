<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
    <style type="text/css">
     #footer{
		 font-size:90%;
		 background:  #dfdede url(images/footer.gif) repeat-x;
		 height:80px;
		 padding: 10px;
		 text-align:center;
	 }
	 #footer a {
		 text-decoration: none;
		 color: #333;
		 font-weight:bold; 
	 }
	 #footer a:hover {
		 color: green; 
	 }
	 .clear {
		 clear: both;
	 }
</style>
    </style>
<body>

<!old code>
<?php  /*$this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'Place', 'url'=>array('/browse/index')),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); */ ?>>
<!old code end>

<!teststart>
 <?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'inverse', // null or 'inverse'
    'brand'=>'SmileTrip',
    'brandUrl'=>'#',
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'Browse', 'url'=>array('/browse/index')),
                array('label'=>'AboutUs','url'=>array('/site/page', 'view'=>'about')),
                /*dropdown menu*//*
                array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else here', 'url'=>'#'),
                    '---',
                    array('label'=>'NAV HEADER'),
                    array('label'=>'Separated link', 'url'=>'#'),
                    array('label'=>'One more separated link', 'url'=>'#'),
                )),
                *//*end drop downmennu*/
            ),
        ),
        
        '<form class="navbar-search pull-left" ,form method="get" action="http://google.co.th/search"><input type="text" class="search-query span2" placeholder="Search" value=""></form>',
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array( 
                
                array('label'=>'Login','url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
                    
                  ),
            ),
          
)); ?>
<!Tester End> 


<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	

</div><!-- page -->
 <div class="clear"></div>
   <div id="footer">
      <p class="left">	
          <p class="right"><a href="#">Home</a> | 
          <a href="http://www.zp7738.tld.122.155.18.18.no-domain.name/smiletrip/index.php/browse/index">Browses</a> | 
          <a href="http://www.zp7738.tld.122.155.18.18.no-domain.name/smiletrip/index.php/site/page?view=about">Contact Us</a> |
          <a href="http://www.zp7738.tld.122.155.18.18.no-domain.name/smiletrip/index.php/site/login">Log In</a> | 
          </p>
          Copyright &copy; <?php echo date('Y'); ?> by SmileTrip.<br/>
          
		All Rights Reserved.       <?php echo Yii::powered(); ?><br/></p>

      
   </div>
</body>
</html>
