<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        mysql_connect('localhost','zp7738' , 'senior');
        mysql_select_db(zp7738_senior);
        $res=mysql_query("select * from place" );
        echo"<table>";
        while ($row = mysql_fetch_array($res)) {
     echo "<tr>";
     echo "<td>" ?> <img src=" <?php echo $row["image"]; ?> " height="100" width="100"> <?php echo "</td>";
}
        ?>
    </body>
</html>
