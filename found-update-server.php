<?php
/**
 * Created by PhpStorm.
 * User: lhw
 * Date: 16-8-26
 * Time: 上午9:15
 */
?>
    <meta charset="utf-8">
<?php
/**
 *
 * @authors Your Name (you@example.org)
 * @date    2016-08-12 15:14:14
 * @version $Id$
 */
if (isset($_COOKIE["isLogin"])) {
    require "mysql-connect.php";
    $id = $_POST["id"];
    $title = $_POST["title"];
    $chenghu = $_POST["chenghu"];
    $wupin = $_POST["wupin"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $address = $_POST["address"];
    $thanks = $_POST["thanks"];
    $content = $_POST["content"];
    $sql = "update found set title='$title',name='$chenghu',wupin='$wupin',email='$email',tel='$tel',address='$address',thanks='$thanks',content='$content' where id='$id'";
    if (mysqli_query($con, $sql)) {
        echo <<<div
<div style="text-align: center;">寻物启事修改成功！<a href='myFoundInformation.php'>点击返回。</a></div>
div;
    } else {
        echo <<<div
<div style="text-align: center;">寻物启事修改失败！<a href='myFoundInformation.php'>点击返回。</a></div>
div;
    }
} else {
    echo <<<div
非法提交！<a href='login.html'>请登录后重试。</a>
div;
}


// if ($_FILES["file"]["error"] > 0)
//   {
//   echo "Error: " . $_FILES["file"]["error"] . "<br />";
//   }
// else
//   {
//   echo "Upload: " . $_FILES["file"]["name"] . "<br />";
//   echo "Type: " . $_FILES["file"]["type"] . "<br />";
//   echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
//   echo "Stored in: " . $_FILES["file"]["tmp_name"];
//   }
//   if ((($_FILES["file"]["type"] == "image/gif")
// || ($_FILES["file"]["type"] == "image/jpeg")
// || ($_FILES["file"]["type"] == "image/pjpeg"))
// && ($_FILES["file"]["size"] < 20000))
//   {
//   if ($_FILES["file"]["error"] > 0)
//     {
//     echo "Error: " . $_FILES["file"]["error"] . "<br />";
//     }
//   else
//     {
//     echo "Upload: " . $_FILES["file"]["name"] . "<br />";
//     echo "Type: " . $_FILES["file"]["type"] . "<br />";
//     echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
//     echo "Stored in: " . $_FILES["file"]["tmp_name"];
//     }
//   }
// else
//   {
//   echo "Invalid file";
//   }




