<?php
/**
 * Created by PhpStorm.
 * User: lhw
 * Date: 16-8-25
 * Time: 下午5:20
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>我的寻物启事信息</title>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link href='http://fonts.useso.com/css?family=Raleway:400,600,300' rel='stylesheet' type='text/css' />
    <!--<link href="bootstrap/bootstrap2.min.css" rel="stylesheet" />-->
    <link href="css/jquery.fancybox-1.3.4.css" rel="stylesheet" />
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easydropdown.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript">
        //制作函数(ajax去获得分页信息)
        function showpage(url){
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function(){
                if(xhr.readyState==4){
                    document.getElementById('result').innerHTML = xhr.responseText;
                }
            }
            xhr.open('get',url);
            xhr.send(null);
        }
        window.onload = function(){
            showpage("./page/found-data.php");
        }
    </script>
</head>
<body>
<?php require "header.php"; ?>
<!--<table class="table table-striped table-hover table-bordered">-->
<!--    <tr>-->
<!--        <th>序号</th>-->
<!--        <th>标题</th>-->
<!--        <th>物品</th>-->
<!--        <th>拾物地点</th>-->
<!--        <th>联系地址</th>-->
<!--        <th>电子邮箱</th>-->
<!--        <th>电话</th>-->
<!--        <th>留言内容</th>-->
<!--        <th>创建时间</th>-->
<!--    </tr>-->
<!--    --><?php
//    $sql = "select title,wupin,place,address,email,tel,content,create_time  from lost where username='$username' order by id desc limit 5";
//    $result = mysqli_query($con,$sql);
//    /** @var TYPE_NAME $result */
//    $i = 0;
//    while($row = mysqli_fetch_assoc($result)){
//        $i++;
//    ?>
<!--    <tr>-->
<!--        <td>--><?php //echo $i; ?><!--</td>-->
<!--        <td>--><?php //echo $row["title"] ?><!--</td>-->
<!--        <td>--><?php //echo $row["wupin"] ?><!--</td>-->
<!--        <td>--><?php //echo $row["place"] ?><!--</td>-->
<!--        <td>--><?php //echo $row["address"] ?><!--</td>-->
<!--        <td>--><?php //echo $row["email"] ?><!--</td>-->
<!--        <td>--><?php //echo $row["tel"] ?><!--</td>-->
<!--        <td>--><?php //echo $row["content"] ?><!--</td>-->
<!--        <td>--><?php //echo $row["create_time"] ?><!--</td>-->
<!--    </tr>-->
<!--    --><?php //} ?>
<!--</table>-->
<!--<div style="text-align: center">-->
<!--    <ul class="pagination">-->
<!--        <li>-->
<!--            <a href="#" aria-label="Previous">-->
<!--                <span aria-hidden="true">&laquo;</span>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li><a href="#">1</a></li>-->
<!--        <li><a href="#">2</a></li>-->
<!--        <li><a href="#">3</a></li>-->
<!--        <li><a href="#">4</a></li>-->
<!--        <li><a href="#">5</a></li>-->
<!--        <li>-->
<!--            <a href="#" aria-label="Next">-->
<!--                <span aria-hidden="true">&raquo;</span>-->
<!--            </a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</div>-->
<h2 style="text-align: center">寻物启事信息管理</h2>
<div id="result"></div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
</body>
</html>