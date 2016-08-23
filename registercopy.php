
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <meta charset="utf-8">
    <title>用户注册</title>

    <link href="css/styleRegister.css.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <!--<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Wowphotos Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Combo - Clean and Flat Design" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link href='http://fonts.useso.com/css?family=Raleway:400,600,300' rel='stylesheet' type='text/css' />
    <!--<link href="bootstrap/bootstrap2.min.css" rel="stylesheet" />-->
    <link href="css/jquery.fancybox-1.3.4.css" rel="stylesheet" />
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easydropdown.js"></script>
    <script>$(document).ready(function(c) {
        $('.alert-close').on('click', function(c){
            $('.message').fadeOut('slow', function(c){
                $('.message').remove();
            });
        });
    });
    </script>
    <script>$(document).ready(function(c) {
        $('.alert-close1').on('click', function(c){
            $('.message1').fadeOut('slow', function(c){
                $('.message1').remove();
            });
        });
    });
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/supersized.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<style type="text/css">
/*.width{*/
    /*width: 100%;*/
/*}*/
/*span{*/
    /*text-align: left;*/
/*}*/
/*.ab1{*/
    /*position: absolute;*/
    /*right: 26%;*/
    /*top: 11%;*/
/*}*/
/*.ab2{*/
    /*position: absolute;*/
    /*right: 31%;*/
    /*top: 31%;*/
/*}*/
/*.ab3{*/
    /*position: absolute;*/
    /*right: 31%;*/
    /*top: 51%;*/
/*}*/
/*.ab4{*/
    /*position: absolute;*/
    /*right: 31%;*/
    /*top: 71%;*/
/*}*/
/*.re{*/
    /*position: relative;*/
/*}*/
 .hold{
     font:20px bold italic;
     color:silver;
 }
.error{
        font:20px bold italic;
        color:red;
}
.right{
    font:20px bold italic;
    color:black;
}
</style>
</head>

<body>

<!-- header -->


<!-- header -->

<div class="main">
    <!-----start-main---->
<h1 style="margin-top: 50px;color: silver">注册新用户</h1>
    <form method="post" action="register-server.php" class="re width" onsubmit="return r_submit()">
        <div class="lable">
            <input style="float: left;" id="username" name="username" type="text" class="text"
                   placeholder="用户名" onblur="check_username()">
            </div><span class="ab1" id="check_username"></span>
            <div class="clear"> </div>
            <div>
            <input onblur="isEmail()" id="email" name="email" placeholder="请输入您的电子邮箱" type="text" class="text"><span class="ab2" id="check_email"></span>
        </div>
        <div class="clear"> </div>
        <div class="lable-2">
            <input onblur="check_password()" id="password" name="password" type="password" class="text" placeholder="请输入您的密码"><span class="ab3" id="check_password"></span>
            </div>
            <div class="clear"> </div>
        <div class="lable-2">
            <input onblur="check_repassword()" id="repassword" name="repassword" type="password" class="text" placeholder="请再次输入您的密码"><span class="ab4" id="check_repassword"></span>
        </div>
        <div class="clear"> </div>
        <div class="submit">
            <!-- <input type="submit" onclick="myFunction()" value="创建新用户" > -->
<!--            <button type="submit" onsubmit="r_submit()">注册新用户</button>-->
            <button type="submit">注册新用户</button>
        </div>
        <div class="clear"> </div>
    </form>
    <!-----//end-main---->
</div>
<!-----start-copyright---->
<div class="copy-right">
</div>
<!-----//end-copyright---->

<!-- Javascript -->
<script src="js/register.js"></script>
<script src="assets/js/jquery-1.8.2.min.js"></script>
<script src="assets/js/supersized.3.2.7.min.js"></script>
<script src="assets/js/supersized-init.js"></script>
<script src="assets/js/scripts.js"></script>

</body>

</html>

