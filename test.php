<!DOCTYPE html>
<html>
<meta charset="utf-8">
<body>

<!--<h1>My First Web Page</h1>-->
<!---->
<!--<p>My First Paragraph.</p>-->
<?php
$con = mysqli_connect("localhost","root","root","mydb");
if ($con){
    mysqli_query($con,"set names utf8");
    $sql = "select * from users";
    $result = mysqli_query($con,$sql);
    $user = mysqli_num_rows($result);
    while($row = mysqli_fetch_array($result)){
       echo $row["username"];
        echo "<br>";
    }
}else{
    echo "连接数据库失败";
}

?>

<!--<button onclick="myFunction()">点击这里</button>-->
<!---->
<!--<script>-->
<!--//function myFunction()-->
<!--//{-->
<!--//document.write("糟糕！文档消失了。");-->
<!--//}-->
<!--//</script>-->

</body>
</html>