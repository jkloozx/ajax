<!-- * Created by PhpStorm.-->
<!-- * User: lhw-->
<!-- * Date: 16-8-24-->
<!-- * Time: 下午8:57-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>搜索结果</title>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link href='http://fonts.useso.com/css?family=Raleway:400,600,300' rel='stylesheet' type='text/css' />
    <!--<link href="bootstrap/bootstrap2.min.css" rel="stylesheet" />-->
    <link href="css/jquery.fancybox-1.3.4.css" rel="stylesheet" />
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easydropdown.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<?php require "header.php"; ?>
<div class="products-1">
    <div class="container">
        <div class="content_top">
            <div class="heading">
                <h3><?php echo $title; ?></h3>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="section group">
            <?php
            $sql = "select * from $table where title like '%$search%' or content like '%$search%' or wupin like '%$search%'";
            $result = mysqli_query($con,$sql);
            /** @var TYPE_NAME $result */
            $i = 0;
            while($row = mysqli_fetch_assoc($result)){
                $i++;
                ?>
                <div <?php if ($i%4 == 1) echo "style='margin-left:0;'";?> class="col_1_of_4 span_1_of_4 ml">
                    <div class="view effect">
                        <a href="<?php echo $thisPage;?>?detail=<?php echo $row["id"] ?>">	<img src="<?php echo $row["imageUrl"]; ?>" class="img-responsive myImage" alt=""></a>
                    </div>
                    <div class="cart">
                        <p class="title"> <a href="<?php echo $thisPage;?>?detail=<?php echo $row["id"] ?>"><?php echo mb_substr($row["title"],0,14,"utf-8");?></a></p>
                        <div class="price">
                            <span class="actual"><?php echo $row["create_time"]; ?></span>
                        </div>
                        <a href="<?php echo $thisPage;?>?detail=<?php echo $row["id"] ?>">
                            <input type="submit" value="点击查看详情" class="button">
                        </a>
                    </div>
                </div>
                <?php
            }
            ?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
</body>
</html>