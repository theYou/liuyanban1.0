<?php
	$a = mysqli_connect("localhost","root","123456") or die("数据库连接错误");
	mysqli_select_db($a,'newbook');
	mysqli_query($a,"set names utf8");
	$sql = "INSERT INTO `users`(`name`, `sex`, `password`, `age`) VALUES ('name','1','33232',44)";
	mysqli_query($a,$sql);