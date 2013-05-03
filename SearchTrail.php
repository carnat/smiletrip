<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Nothing</title>
    </head>
    <body>
         <form method="get" action="">
<label>Search For: </label><input type="text" name="query" />
<input type="submit" name="submit" value="Start Search" />
<input type="reset" value="Reset"
</form>
 
<?php
//PHP CODE STARTS HERE
 
if(isset($_GET['submit'])){
 
// Change the fields below as per the requirements
$db_host="localhost";
$db_username="zp7738";
$db_password="senior";
$db_name="zp7738_senior";
$db_tb_name="place";
$db_tb_atr_name="Name";
 
//Now we are going to write a script that will do search task
// leave the below fields as it is except while loop, which will display results on screen
 

mysql_connect("$db_host","$db_username","$db_password");
mysql_select_db("$db_name");
 
$query=mysql_real_escape_string($_GET['query']);
 
$query_for_result=mysql_query("SELECT * FROM $db_tb_name  WHERE
 
$db_tb_atr_name like '%".$query."%'");
echo "<h2>Search Results</h2><ol>";
while($data_fetch=mysql_fetch_array($query_for_result))
{
    echo "<li>";
    echo '<a href="$db_tb_name">',substr($data_fetch[$db_tb_atr_name], 0,160);
    echo "</li><hr/>";
}
echo "</ol>";
 
mysql_close();
}
?>
    </body>
</html>
