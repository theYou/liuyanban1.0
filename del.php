<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>删除成功!</title>
</head>
<body>
<?php
  include("config.php");
   $id = $_GET['id'];
   $sql = "DELETE FROM users WHERE $id = '$id' "; 
   $result = mysql_query($sql);
   mysql_close($conn); 
 ?>
 <p><a href="show.php">[返回]</a></p>
 </body>

 </html>