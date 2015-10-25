<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	include("config.php");
    $id=$_GET['$id'];
    $info=$_POST['$info'];
	$sql="UPDATE users SET info='$info' WHERE id='$id'";
	mysql_query($sql);
	?>
	<a href="show.php">回到留言板</a>
</body>
</html>