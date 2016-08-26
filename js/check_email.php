<?php
/**
 * Created by PhpStorm.
 * User: pc-lhw
 * Date: 2016/8/15
 * Time: 11:23
 */
require "../mysql-connect.php";
if (isset($_GET["email"])){
    $email = $_GET["email"];
    $sql = "select email from users where email = '$email'";
    $result = mysqli_query($con,$sql);
    if (mysqli_num_rows($result) > 0){
        echo "邮箱已经注册过了!";
    }else{
        echo "恭喜,您的邮箱可用!";
    }
}else{
    echo "非法提交！";
}