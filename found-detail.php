<!DOCTYPE HTML>
<html>
<head>
    <title>寻物启事-详细信息</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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

</head>
<body>
<!-- header -->
<div class="header">
    <div class="container">
        <div class="header-right">
            <div class="hea-rig">
                <ul class="icon1 sub-icon1">
                    <?php
                if(isset($_COOKIE["isLogin"])){
                echo "<li>欢迎回来！".$_COOKIE["username"]."</li>";
                echo "<li><a href='logout.php'>注销</a></li>";
                }else{
                    echo "<li><a href='login.html'>登录</a></li>";
                }
                ?>
                    <li><label>|</label></li>
                    <li><div class="cart1">
                        <a href="#" class="cart-in"> </a>
                    </div>
                        <ul class="sub-icon1 list">
                            <h3>最近发表的启事</h3>
                            <div class="shopping_cart">
                                <div class="cart_box">
                                    <div class="message">
                                        <div class="alert-close"> </div>
                                        <div class="list_img"><img src="images/4.jpg" class="img-responsive" alt=""></div>
                                        <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
		                             $12.00</span></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="cart_box1">
                                    <div class="message1">
                                        <div class="alert-close1"> </div>
                                        <div class="list_img"><img src="images/11.jpg" class="img-responsive" alt=""></div>
                                        <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span class="actual">
		                             $12.00</span></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="total">
                                <div class="total_left">CartSubtotal : </div>
                                <div class="total_right">$250.00</div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="login_buttons">
                                <div class="check_button"><a href="checkout.html">Check out</a></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </ul>
                    </li>
                    <li>:<span>1</span></li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
            <div class="head-nav">
                <span class="menu"> </span>
                <ul class="cl-effect-15">
                    <li><a href="index.php">失物招领</a></li>
                    <li class="active"><a href="found.php">寻物启事</a></li>
                    <li><a href="register.html">注册新用户</a></li>
                    <div class="clearfix"> </div>
                </ul>
                <!-- script-for-nav -->
                <script>
                    $( "span.menu" ).click(function() {
                        $( ".head-nav ul" ).slideToggle(300, function() {
                            // Animation complete.
                        });
                    });
                </script>
                <!-- script-for-nav -->
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
<div class="header-bottom">
    <div class="container">
        <div class="logo">
            <a href="index.php"><img src="images/lost&found.jpg" width="119px" height="22px" class="img-responsive" alt=""></a>
        </div>
        <div class="search2">
            <form>
                <li style="width:50%;"  class="se-rc"><input type="text" value="" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}"></li>
                <li style="width:30%;"  class="roo-om"><div class="section_room1">
                    <select id="country" onChange="change_country(this.value)" class="frm-field required">
                        <option value="null">简体中文</option>
                        <option value="null">English</option>
                        <option value="AX">Arab</option>
                    </select>
                </div></li>
                <li style="width:20%;"  class="su-m"> <input type="submit" value="搜 索"></li>
                <div class="clearfix"> </div>
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- header -->
<div class="main">
    <div class="main-top">
        <div class="container">
            <div class="section group">
                <div class="content span_1_of_2">
                    <div class="grid images_3_of_2">
                        <?php
                        require "mysql-connect.php";
                        if (isset($_GET["id"])){
                            $id = $_GET["id"];
                        }else{
                            $id = 0;
                        }
                        $sql = "select * from found  where id= '$id';";
                        $result = mysqli_query($con,$sql);
                        /** @var TYPE_NAME $result */
                        $row = mysqli_fetch_assoc($result);
                        ?>
                        <img src="<?php echo $row["imageUrl"]; ?>" class="img-responsive" alt="您要找的图片飞走了"/>
                    </div>
                    <div class="desc span_3_of_2">
                        <h4>标题：<?php echo $row["title"]; ?></h4>
                        <div class="desc">
                            <div class="padd-stock"> <div class="extra-wrap"> <span class="prod-stock-2">物品名称：<?php echo $row["wupin"] ?></span>
                                    </div></div>
                            <span class="code">用户留言：<?php echo $row["content"]; ?></span><br>
                            <span class="brand">联系地址：<?php echo $row["address"]; ?></span><br>
                            <div class="price">
                                <span class="text">联系方式：</span>
                                <span class="price-new"><?php echo $row["tel"]; ?></span><span class="price-old"></span>
                                <!--<span class="price-tax">Ex Tax: $90.00</span><br>-->
                                <!--<span class="points"><small>Price in reward points: 400</small></span><br>-->
                            </div>
                            <div class="single-cart">
                                <div class="prod-row">
                                    <div class="cart-top">
                                        <div class="cart-top-padd">
                                            <label>酬谢方式：黄金狗粮一份<?php echo $row["thanks"] ?></label>
                                            <!--<input type="text" name="quantity" size="2" value="1">-->
                                            <!--<input type="hidden" name="product_id" size="2" value="47">-->
                                        </div>
                                        <!--<input type="submit" value="Add to Cart" class="button6">-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<p class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,.</p>-->
                    <div class="links">
                        <ul>
                            <li><a href="#"><img src="images/blog-icon1.png" title="date"><span><?php echo $row["create_time"] ?></span></a></li>
                            <li><a href="#"><img src="images/blog-icon2.png" title="Admin"><span>普通会员</span></a></li>
                            <li><a href="#"><img src="images/blog-icon3.png" title="Comments"><span>留言数</span></a></li>
                            <li><a href="#"><img src="images/blog-icon4.png" title="Lables"><span>点击量</span></a></li>
                            <li><a href="#"><img src="images/blog-icon5.png" title="permalink"><span>帮助人数</span></a></li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                    <!--<div class="leave-comment"><a href="#" name="comment">Leave a Comment</a></div>-->
                    <div class="leave-reply"><a class="#">免注册发表回复</a></div>
                    <div class="comments-area">
                        <form>
                            <p>
                                <label>姓名</label>
                                <span>*</span>
                                <input type="text" value="">
                            </p>
                            <p>
                                <label>电子邮箱</label>
                                <span>*</span>
                                <input type="text" value="">
                            </p>
                            <p>
                                <label>手机</label>
                                <input type="text" value="">
                            </p>
                            <p>
                                <label>证明信息</label>
                                <span>*</span>
                                <textarea></textarea>
                            </p>
                            <p>
                                <input type="submit" value="发表回复">
                            </p>
                        </form>
                    </div>
                </div>
                <div class="rightsidebar span_3_of_1 height">
<!--                    <div class="blog-bottom">-->
<!--                        <h4>版主信息</h4>-->
<!--                        <ul class="categories">-->
<!--                            <li class="firstItem"> <a href="#">-->
<!--                                于2015/06/01 发表：</a>-->
<!--                            </li>-->
<!--                            <li> <a href="#">-->
<!--                                于2015/06/01 发表：</a>-->
<!--                            </li>-->
<!--                            <li> <a href="#">-->
<!--                                于2015/06/01 发表：</a>-->
<!--                            </li>-->
<!--                            <li> <a href="#">-->
<!--                                于2015/06/01 发表：</a>-->
<!--                            </li>-->
<!--                            <li> <a href="#">-->
<!--                                于2015/06/01 发表：</a>-->
<!--                            </li>-->
<!--                            <li class="lastItem"> <a href="#">-->
<!--                                于2015/06/01 发表：</a>-->
<!--                            </li>-->
<!--                            <li class="lastItem"> <a href="#">-->
<!--                                于2015/06/01 发表：</a>-->
<!--                            </li>-->
<!--                            <li class="lastItem"> <a href="#">-->
<!--                                于2015/06/01 发表：</a>-->
<!--                            </li>-->
<!--                            <div class="clearfix"> </div>-->
<!--                        </ul>-->
<!--                    </div>-->
                    <div class="clearfix">
                    <div class="blog-bottom">
                        <h4>最近发表</h4>
                        <?php
                        require "mysql-connect.php";
                        $username = $row["username"];
                        $sql = "select * from found where username='$username' order by id desc limit 5";
                        $result = mysqli_query($con,$sql);
                        /** @var TYPE_NAME $result */
                        while($row = mysqli_fetch_array($result)){
                            ?>
                        <div class="post-list">
                            <div class="po-li">
                                <a href="#" title="Donec tempor libero"><img src="<?php echo $row["imageUrl"] ?>" class="img-responsive" alt="tempor"></a>
                            </div>
                            <div class="post-text">
                                <span class="time"><?php echo mb_substr($row["create_time"],0,11,"utf-8") ?></span>
                                <h5 class="head"><?php echo mb_substr($row["title"],0,16,"utf-8") ?></h5>
<!--                                <p class="text">Lorem ipsum dolorh</p>-->
                                <a href="found-detail.php?id=<?php echo $row["id"] ?>"><span class="italic">点击查看更多</span></a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                            <?php
                        }
                            ?>
                        <div class="poo-ool">
                            <!--<div class="post-list">-->
                                <!--<div class="po-li">-->
                                    <!--<a href="#" title="Donec tempor libero"><img src="images/11.jpg" class="img-responsive" alt="tempor"></a>-->
                                <!--</div>-->
                                <!--<div class="post-text">-->
                                    <!--<span class="time">March 15,2013</span>-->
                                    <!--<h5 class="head">Lorem ipsum</h5>-->
                                    <!--<p class="text">Lorem ipsum dolorh</p>-->
                                    <!--<a href="#"><span class="italic">Read More</span></a>-->
                                <!--</div>-->
                                <!--<div class="clearfix"> </div>-->
                            <!--</div>-->
                            <!--<div class="post-list">-->
                                <!--<div class="po-li">-->
                                    <!--<a href="#" title="Donec tempor libero"><img src="images/8.jpg" class="img-responsive" alt="tempor"></a>-->
                                <!--</div>-->
                                <!--<div class="post-text">-->
                                    <!--<span class="time">March 15,2013</span>-->
                                    <!--<h5 class="head">Lorem ipsum</h5>-->
                                    <!--<p class="text">Lorem ipsum dolorh</p>-->
                                    <!--<a href="#"><span class="italic">Read More</span></a>-->
                                <!--</div>-->
                                <!--<div class="clearfix"> </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="col-md-2 tak">
            <h4>Site</h4>
            <ul>
                <li><a href="#"><span> </span>Take the tour</a></li>
                <li><a href="#"><span> </span>FAQ</a></li>
                <li><a href="#"><span> </span>Plans and prices </a></li>
                <li><a href="#"><span> </span>Selling images</a></li>
                <li><a href="#"><span> </span>Sitemap</a></li>
            </ul>
        </div>
        <div class="col-md-3 sel">
            <h4>Select your language</h4>
            <div class="section_room">
                <select id="country" onChange="change_country(this.value)" class="frm-field required">
                    <option value="null">English</option>
                    <option value="null">French</option>
                    <option value="AX">Arab</option>
                </select>
            </div>
            <h4>Safebrowse</h4>
            <div class="sel-fo">
                <form action="">
                    <li><input type="radio" name="sex" value="on">On</li>
                    <li><input type="radio" name="sex" value="off">Off</li>
                </form>
            </div>

        </div>
        <div class="col-md-2 leg">
            <h4>Agreements</h4>
            <ul>
                <li><a href="#"><span> </span>Legal agreement</a></li>
                <li><a href="#"><span> </span>Model release (adult)</a></li>
                <li><a href="#"><span> </span>Model release (Minor)</a></li>
                <li><a href="#"><span> </span>Property Release</a></li>
            </ul>
        </div>
        <div class="col-md-5 con">
            <h4>Contact Us </h4>
            <div class="cont-1">
                <form>
                    <input type="text" class="textbox" value="Name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name';}">
                    <input type="text" class="textbox" value="Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}">
                    <textarea value="Message:" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
                    <div class="smt">
                        <input type="submit" value="send">
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<!-- footer -->
<!-- footer-bottom -->
<div class="footer-bottom">
    <div class="container">
        <p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://www.cssmoban.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a> - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a></p>
        <div class="social">
            <ul>
                <li><a href="#"><i class="fb"></i></a></li>
                <li><a href="#"><i class="twt"></i></a></li>
                <li><a href="#"><i class="in"></i></a></li>
                <div class="clearfix"> </div>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- footer-bottom -->
</body>
</html>