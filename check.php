<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8"/>
</head>
<body>
<?php
	include("config.php");
	$name=$_POST['name'];
	$password=$_POST['password'];
	$sex=$_POST['sex'];
	$age=$_POST['age'];
	$sql="INSERT INTO `users`(`name`,`password`,`sex`,`age`)VALUES('$name','$password','$sex','$age')";
	mysql_query($sql);
	?>
<a href="index.html">回到初始界面</a>
</body>
</html>

