<meta charset="utf-8">
<?php
/**
 * Created by PhpStorm.
 * User: lhw
 * Date: 16-8-26
 * Time: 上午11:13
 */
require "mysql-connect.php";
if (isset($_GET["delete"]) && isset($_GET["table"])){
    $delete = $_GET["delete"];
    $table = $_GET["table"];
    $sql = "select username from $table where id='$delete'";
    $result = mysqli_query($con,$sql);
    if (mysqli_fetch_assoc($result)["username"] == $_COOKIE["username"]){
        if ($table == "lost"){
            $return = "myLostInformation.php";
        }else{
            $return = "myFoundInformation.php";
        }
        $sql2 = "delete from $table where id='$delete' ";
        $result2 = mysqli_query($con,$sql2);
        if ($result2){
            echo "删除成功，<a href='$return'>点击返回</a>";
        }else{
            echo "删除失败，<a href='$return'>点击返回</a>";
        }
    }else{
        echo "亲您是不是迷路了，<a href='./index.php'>点击返回主页</a>";
    }
}else{
    echo "亲您是不是迷路了，<a href='./index.php'>点击返回主页</a>";
}