<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
             <meta name ="WebpagexZ" >
        <title>Newtryweb</title>
 <style type="text/css">
    /* --------------------  Default Settings -------------------*/
    * {
		margin: 0;
		padding: 0;

	}
	ul {
	    list-style-type:none;
	}
	a  {
		text-decoration:none;
	}
	div,p,h1,h2,h3,h4 {
		padding:10px;

	}
   
        
	
	
	/*---------------  Container นอกสุด ---------------------------------*/
	
	body {
	    font-size: 0.9em;
		background:#ececec;
	}
    #wrapper {
		width:100%;
		background:url(images1/header_bg.gif) 0 -100px repeat-x;
		height:400px;
		margin:0 auto;
	}
	/*--------------------Header ---------------------------------------*/
	.topheader {
		color:red;
		padding-top:5px;
		padding-left:80px;
            font-size: 50pt;
	}
	.topheader2 {
		color:white;
		padding-left:100px;
		border-top:3px solid white;
	}
	#headerpic {
		margin:0 auto;
		width:100%;
		margin-top:-20px;
		height:380px;
		background:url(images1/simple_bg2.gif) center bottom no-repeat;
	}
	/*----------- Top menu -----------*/
	#topmenu {
		width:500px;
		float:right;
		padding-right:50px;
		margin-top: -30px;

	}
	#topmenu li{
		float:right;
		list-style-type:none;
		border-left: 1px solid #DBDBDB; 
		padding: 0 30px; 
	}
	#topmenu li a{
		color:#DBDBDB;
		text-decoration:none;
	    text-align:left;
		font-weight:bold;
	}
	#topmenu li a:hover{
		color: #FC0;	
	}

	#topmenu .last{
		border-right: 1px solid #DBDBDB;

	}
	#headimg {
		margin: 0 auto;
		width:900px;
	}
	/*----------------   Content ------------------------------------------*/
	#content {
		width:950px;
		margin:0 auto;
		padding:0 30px;
	}
	.b1 {
		float:left;
		width:270px;
		padding:20px;
	}
    /*------  piclist -----------*/
	.piclist ul{
		list-style-type:none;
		width:900px;
		margin:0 auto;
		height:90px;
		background: #E2E2E2;
		padding:20px 0;
		border: 1px dashed #CACACA;
	}
	.piclist ul li {
		float:left;
		padding-left:18px;
		width:110px;
	}
	.piclist ul li img {
		padding:5px;
		border: 1px solid #CACACA;
        background:white;
	}
	/*----------- left div -------*/
	.leftdiv {
		width:300px;
		float:left;
	}
	.leftdiv ul {            /* menu link */
		margin-left:10px;
	}
	.leftdiv ul li{
		border-bottom:1px dotted #666;
		width:270px;
		line-height:1.8em;  /* กำหนดระยะห่างระหว่างบรรทัด */
	}
	.leftdiv ul li a{       /* กำหนด link */
		color:#666;
	}
	.leftdiv ul li a:hover{
		color: #903;
	}
	/*--------- right div ---------*/
	.rightdiv {
		width:600px;
		float:right;
	}
	
	.rightdiv img {
		border: 1px solid #C4C4C4; /* ตีกรอบภาพ */
		padding: 5px;
		background:white;
	}
	
	.borderimg {
		padding:5px;
		border:1px solid #999;
		background:white;
	}
	.leftimg {
		border: 1px solid  #999;
		padding:5px;
		float:left;
		margin-right:15px;
		background:white;
	}
	/*------------------------ footer ----------------------*/
	#footer {
		width:100%; /*กว้างเต็มพื้นที่ */
		background: #D8D8D8;
		height:80px;
		border-top: 1px solid #C4C4C4;
		text-align:center; /* ข้อความจัดอยู่ตรงกลางหน้า  */ 
		line-height:1.4em; /*กำหนดระยะห่างระหว่างบรรทัด ให้กว้างขึ้น*/
	}
	#footer a{
		color:#333;
		font-size: 0.8em;
		font-weight:bold;
	}
	#footer a:hover{
		color: #F30;
	}
	/*------------------------- อื่นๆ -------------------------*/
	.clear {               /* กำหนดการ clear float เพื่อให้ขึ้นบรรทัดใหม่ได้ตามปกติ*/
		clear:both;
	}
    .readmore {            /* กำหนดให้มีการ set link ของ readmore */
		color:green;
	}
    .readmore:hover {
		color:red;
	}
	.floatleft{
		float:left;       
		margin-right:10px; /* มีระยะหากระหว่างการ float กับสิ่งที่จะตามมา */
	}
	.floatright{
		float:right;
		margin-left:10px;  /* มีระยะหากระหว่างการ float กับสิ่งที่จะตามมา */
	}

</style>
</head>

<body>
   <div id="wrapper">
       <div id="header">
           <h1 class="topheader">SMILE TRIP </h1>
           <h2 class="topheader2">The Best Choice To Travel In Thailand</h2>
           <ul id="topmenu">
              <li class="last"><a href="#">ล๊อคอิน<br />Login</a></li>
              <li><a href="#">เกี่ยวกับเรา<br />About Us</a></li>
              <li><a href="#">สถานที่<br />Place</a></li>
              <li><a href="#">หน้าหลัก<br />Home</a></li>
           </ul>
           <div class="clear"></div>
            <div id="headerpic">
                <img id ="headimg" style="display:block; margin:0 auto;width:900px;" src="images1/header-pic3.gif" />
           </div> 

       </div>
       <div id="content">  
              <div>  
              <h2>นี้คือรูปสไลด์เดอร์สุดเก๋ของKuroz</h2>
              <p>วันนี้วันสงกรานต์ ผมหิวข้าว ล้วปวดท้อง ปวดตด วันนี้ร้อนมาก อยากเล่นน้ำ เปาะๆ แปะๆ แล้วก็เล่นน้พแปะๆ เปาะๆ จนกระทั้งวันเล่นน้ำกลายเป้นวันทุกๆวันๆ เลยครับผม รักทุกคน แต่รักบางคนมากกว่า&nbsp;&nbsp;&nbsp;<a  class="readmore" href="#">More Detail<b>» </b></a></p>
              </div>
              <div class="b1">
                 <h3>ตรากวศของข้าน้อย</h3>
                 <img class="borderimg" src="images1/kws.jpg"alt="Smiley face" height="162" width="280" />
                 <p>นี้คือตรากวศ จงชาบู จงชาบู ชานากาา ชานากาา ชาบูก้าาา  นี้คือตรากวศ จงชาบู จงชาบู ชานากาา ชานากาา ชาบูก้าาา  นี้คือตรากวศ จงชาบู จงชาบู ชานากาา ชานากาา ชาบูก้าาา  นี้คือตรากวศ จงชาบู จงชาบู ชานากาา ชานากาา ชาบูก้าาา.&nbsp;&nbsp;&nbsp;<a  class="readmore" href="#">read more<b>» </b></a></p>
              </div>
              <div class="b1">
                 <h3>คนนี้น่ารักมาก </h3>
                 <img class="borderimg" src="images1/cha.jpg" alt="Smiley face" height="162" width="280" />
                 <p>สาวคนนี้ เป็นไอดอลผมครับ สวยมากครับ ถ้าเจอกันเร็วกว่านี้คงลุยไปแล้ว โถ่ๆๆๆ เสียดาย แต่อย่างน้อยก็ได้เจอกัน อั่ยย่ะ อับบ้า จุบๆ             &nbsp;&nbsp;&nbsp;<a  class="readmore" href="#">read more<b>» </b></a></p>
              </div>
              <div class="b1">

                  <h3>รูป size 162x280 fixed</h3>
                 <img class="borderimg" src="images1/pic3.gif" />
                 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.<br /><a  class="readmore"  href="#">read more<b>» </b></a>
</p>
              </div>
              <div class="clear"></div>
              <div style="margin-top:-30px">
                <h2>Picture in frame test</h2>
                <p>AText under picture under frame test is masterbating is masterbating is masterbating is masterbating is masterbating is masterbating is masterbating is masterbating 
                is masterbating is masterbating is masterbating is masterbating is masterbating pic size 80 x 80 </p>           
              </div>
 
              <div class="piclist">
                  <ul>
                    <li><img src="images1/tyr.jpg" height="80" width="80"/></li>
                    <li><img src="images1/tyr.jpg" height="80" width="80"/></li>
                    <li><img src="images1/tyr.jpg" height="80" width="80"/></li>
                    <li><img src="images1/tyr.jpg" height="80" width="80"/></li>
                    <li><img src="images1/tyr.jpg" height="80" width="80"/></li>
                    <li><img src="images1/tyr.jpg" height="80" width="80"/></li>
                    <li><img src="images1/tyr.jpg" height="80" width="80"/></li>
                   
                  </ul>
              </div>
              <div class="clear"></div>
   
              <div class="leftdiv">
                <h3>Mini Menu. Problemo?XDXD</h3>
                <ul>
                   <li><a href="#"><b>» </b>This is link 1</a></li>
                   <li><a href="#"><b>» </b>This is link 2</a></li>
                   <li><a href="#"><b>» </b>This is link 3</a></li>
                   <li><a href="#"><b>» </b>This is link 4</a></li>
                   <li><a href="#"><b>» </b>This is link 5</a></li>    
                   <li><a href="#"><b>» </b>This is link 6</a></li>
                   <li><a href="#"><b>» </b>This is link 7</a></li>
                </ul>  
              </div>
              <div class="rightdiv">
                <h3>Tyron Bigger Face</h3>
                <div>
                    <img class="leftimg" src="images1/tyr.jpg" />
                    <p> Below comment with link&nbsp;&nbsp;&nbsp;<a  class="readmore" href="#">read more<b>» </b></a></p> 
                </div>
                <div class="clear"></div>
                <h3>Tyron Bigger Face</h3>
                <div>
                    <img class="leftimg" src="images1/tyr.jpg" />
                <p>Below comment with link&nbsp;&nbsp;&nbsp;<a  class="readmore" href="#">read more<b>» </b></a></p> 
                </div> 
                <div class="clear"></div>         
              </div>
       </div> <!-- end content -->

   </div> <!-- end wrapper -->
   
   <div class="clear"></div>
   <br>
   <div id="footer">
    <p>© Copyright www.Tokyotosho.Net All Rights Reserved<br />
      <a href="#">Home</a> | <a href="#">Place</a> | <a href="#">Promotion</a> | <a href="#">Login</a></p>
   </div>
</body>
</html>
