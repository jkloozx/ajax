<meta charset="utf-8">
<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2016-08-11 14:51:28
 * @version $Id$
 */
require "mysql-connect.php";
$username = $_POST["username"];
$password = sha1($_POST["password"]);
$sql = "select password from users where username='$username'";
//$result = mysql_query($sql);
//	if ( mysql_num_rows($result) > 0) {
//		if (mysql_result($result,0) == $password) {
//		// echo "用户名密码正确，<a href='index.html'>点击跳转到主页面</a>";
//		setcookie('username',$username,time()+60*60*24*7);
//		setcookie('isLogin','1',time()+60*60*24*7);
//		header("Location:index.php");
//	}else{
//		echo "用户名或密码错误，<a href='login.html'>点击返回</a>";
//	}
//	}else{
//	echo "用户名不存在，<a href='login.html'>点击返回</a>";
//	}

$result = mysqli_query($con,$sql);
if ( mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)){
        if ($row["password"] == $password) {
            // echo "用户名密码正确，<a href='index.html'>点击跳转到主页面</a>";
            setcookie('username',$username,time()+60*60*24*7);
            setcookie('isLogin','1',time()+60*60*24*7);
            header("Location:index.php");
        }else{
            echo "用户名或密码错误，<a href='login.html'>点击返回</a>";
        }
    }

}else{
    echo "用户名不存在，<a href='login.html'>点击返回</a>";
}