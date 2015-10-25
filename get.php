<!DOCTYPE html>
<html>
<head>
	<title>注册界面</title>
	<meta charset="UTF-8"/>
</head>
<body>
	<form name="frm" method="post" action="check.php">
		<p>你的昵称:<input name="name" type="text" size="20"></p>
		<p>请创建你的密码:<input name="password" type="password" size="20"></p>
		<p>你的真实姓名:<input name="text2" type="text" size="20"></p>
		<p>你的性别:<input name="sex" type="radio" value="1" checked="checked"/>男
		<input name="sex" type="radio" value="0"/>女</p>
		<p>你的年龄:<input name="age" type="text" size="20"></p>	
		<p><input name="submit" type="submit" value="注册"></p>
	</form>
</body>
</html>