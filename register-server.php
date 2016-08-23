<meta charset="utf-8">
<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2016-08-11 11:50:51
 * @version $Id$
 */
require "mysql-connect.php";
$username = $_POST["user"];
$password = sha1($_POST["password"]);
$email = $_POST["ema"];
$create_time = date("20y年m月d日 h:i:sa");
$sql = "insert into users (username,password,email,create_time) values('$username','$password','$email','$create_time')";
if (mysqli_query($con,$sql)) {
	echo <<<a
用户创建成功！<a href='login.html'>点击登录</a>
a;
}else{
	echo <<<a
用户注册失败！<a href='register.php'>点击返回</a>
a;
}

