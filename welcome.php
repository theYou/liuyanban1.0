<!DOCTYPE html>
<html>
<head>
	<title>欢迎</title>
	<meta charset="UTF-8"/>
</head>
<body>
<?php
	include("config.php");
	$name= $_POST["name"];
	$password=$_POST["password"];
	$sql="SELECT * FROM users";
	$result=mysql_query($sql);
	while ($row = mysql_fetch_array($result)) 
	{
		if ($name == $row['name'])
		{
			$sql1="SELECT password FROM users WHERE name='$name'";
			$result1=mysql_query($sql1);
			$row1=mysql_fetch_array($result1);
			if ($password==$row1['password']) 
			{
				echo "<a href='show.php'>前往留言</a><br />";
			}
		}
		else
		{
			echo "用户名或密码错误";
		}
	}

	?>
</body>
</html>