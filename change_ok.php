<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>修改成功!</title>
</head>
<body>
<?php
  include("config.php");
    $id = $_GET['id'];
   $name = $_POST['name'];
   $sex = $_POST['sex'];
   $info = $_POST['info'];
   $sql = "UPDATE users SET name = '$name',sex = '$sex',info = '$info' WHERE id ='$id' "; 
   $result = mysql_query($sql,$conn);
   mysql_close($conn); 
 ?>
 <p><a href="show.php">[返回]</a></p> 
 </body>
 </html>