<?php
/**
 * Created by PhpStorm.
 * User: lhw
 * Date: 16-8-26
 * Time: 上午9:44
 */
?>
    <meta charset="utf-8">
<?php
if (isset($_COOKIE["isLogin"])) {
    require "mysql-connect.php";
    $id = $_POST["id"];
    $title = $_POST["title"];
    $chenghu = $_POST["chenghu"];
    $wupin = $_POST["wupin"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $address = $_POST["address"];
    $place = $_POST["place"];
    $content = $_POST["content"];
    $sql = "update lost set title='$title',name='$chenghu',wupin='$wupin',email='$email',tel='$tel',address='$address',place='$place',content='$content' where id='$id'";
    if (mysqli_query($con, $sql)) {
        echo <<<div
<div style="text-align: center;">寻物启事修改成功！<a href='./myLostInformation.php'>返回失物招领</a></div>
div;
    } else {
        echo <<<div
<div style="text-align: center;">寻物启事修改失败！</div>
div;
    }
} else {
    echo <<<div
非法提交！<a href='login.html'>请登录后重试。</a>
div;
}