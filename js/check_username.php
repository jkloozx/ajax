<?php
/**
 * Created by PhpStorm.
 * User: pc-lhw
 * Date: 2016/8/15
 * Time: 13:17
 */
if (isset($_GET["username"])){
    $username = $_GET["username"];
    require "../mysql-connect.php";
    $sql = "select username from users where username = '$username'";
    $result = mysqli_query($con,$sql);
    if (mysqli_num_rows($result) > 0){
        echo "该用户名已经注册过了!";
    }else{
        echo "恭喜,该用户名可以使用!";
    }
}