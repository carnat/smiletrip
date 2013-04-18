<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="ThisIsContent; charset=UTF-8">
        <meta name ="WebpageZ" >
        <title>SmileTrip :3</title>
    
    <style>
        div#container {
            background-color:  red;
            text-align: center;
            width: 800px;
            margin: 0px; 
         padding: 0px;   
        }
        h2 {
            background-color: blue;
            text-align: center;
        }
        div#content {
            background-color: green;
            text-align: center;
            width: 800px;
            margin: 50px auto;
        }
        * {
            margin: 0px;
            padding: 0px;
        }
        body {
            font-family: verdana;
            background-color: #AAA;
            padding : 100px;
        }
        
        h1 {
            text-align: top;
            border-bottom :2px solid #009;
            margin-bottom: 50px;
        }
        
        
        ul#navmenu, ul.Sub1, ul.Sub2 {
            list-style-type: none;
       font-size: 20pt;
        }
        
        ul#navmenu li{
            border: 0px solid red;
            width : 403px ; /*125*/
            text-align: center;
            position: relative; 
            float : left;
            margin-right : 4px;
        }
        
        ul#navmenu a{
            text-decoration: none;
            display: block;
        width: 403px; /*125*/ /*350px*/
        height: 25px; /*25*/
        line-height: 25px; /*25*/
        background-color: #FFF;
        border: 1px solid #CCC;
        border-radius: 5px;
        }
        ul#navmenu .Sub1 li {
        
        }
        ul#navmenu .Sub1 a {
            margin-top : 3px;
            
        }
        ul#navmenu .Sub2 a{
            margin-left:10px;
        }
        ul#navmenu li:hover > a {
            background-color: #CFC;
        }
        
        ul#navmenu li:hover a:hover {
            background-color:   #FF0;
            
        }
        ul#navmenu ul.Sub1 {
            display : none ;
            position: absolute;
            top: 26px;
            left: 0px;
            
        }
         ul#navmenu ul.Sub2 {
            display : none ;
            position: absolute;

        </div>
  
           
            <div>
                <input type="text" name="q" size= "90%"  placeholder='ENTER YOUR SEARCH HERE' value=""/>
                <input type="submit" value="SEARCH BUTTON"/>
                <BR>
                
            </div>
        </form>
           
             
             
  
        <ul id="navmenu">
            <li><a href="http://www.stay.com/">PLACE</a></li>
            <li><a href="http://www.stay.com/">EVENT</a><span class="darrow">&#9660;</span>
                <ul class="Sub1">
                    <li><a href="http://www.stay.com/">hyperlink 2.1</a></li>
                    <li><a href="http://www.stay.com/">hyperlink 2.2</a></li>
                    <li><a href="http://www.stay.com/">hyperlink 2.3</a></li>
                </ul>
            </li>         
            <li><a href="http://www.stay.com/">PROMOTION</a></li>        
            <li><a href="http://www.stay.com/">hyperlink 4</a><span class="darrow">&#9660;</span>
                            <ul class="Sub1">
                    <li><a href="http://www.stay.com/">hyperlink 4.1</a></li>
                    <li><a href="http://www.stay.com/">hyperlink 4.2</a></li>
                    <li><a href="http://www.stay.com/">hyperlink 4.3</a><span class="rarrow">&#9654;</span>
                            <ul class="Sub2">
                            <li><a href="http://www.stay.com/">hyperlink 4.3.1</a></li>
                            <li><a href="http://www.stay.com/">hyperlink 4.3.2</a></li>
                             <li><a href="http://www.stay.com/">hyperlink 4.3.3</a></li>
                </ul></li>        
            
        </ul>
            </li>
    </body>
</html>
