<!-- header -->
<a href="#" name="home"></a>
<div class="header">
    <a href="#home"><img class="totop" src="images/home.png" alt=""></a>
    <div class="container">
        <a class='mainPage' href="">首页</a>
        <div class="header-right">
            <div class="hea-rig">
                <ul class="icon1 sub-icon1">
                    <?php
                    if(isset($_COOKIE["isLogin"])){
                        echo "<li>欢迎回来！".$_COOKIE["username"]."</li>";
                        echo "<li><a href='logout.php'>注销</a></li>";
                        ?>
                        <li><label>|</label></li>
                        <li><div class="cart1">
                                <a href="#" class="cart-in"> </a>
                            </div>
                            <ul class="sub-icon1 list">
                                <h3>最近发表的启事</h3>
                                <div class="shopping_cart">
                                    <?php
                                    require "mysql-connect.php";
                                    $username = $_COOKIE["username"];
                                    $sql = "select * from found where username = '$username' order by id DESC limit 3";
                                    $sql2 = "select * from found where username = '$username'";
                                    $result = mysqli_query($con,$sql);
                                    $result2 = mysqli_query($con,$sql2);
                                    if ($result2 != null){
                                        $total = mysqli_num_rows($result2);
                                    }else{
                                        $total = 0;
                                    }
                                    /** @var TYPE_NAME $result */
                                    while($row = mysqli_fetch_assoc($result)){
                                        ?>
                                        <div class="cart_box">
                                            <div class="message">
                                                <!--							   	     <div class="alert-close"> </div> -->
                                                <div class="list_img"><img src="<?php echo $row["imageUrl"]?>" class="img-responsive" alt=""></div>
                                                <div class="list_desc">
                                                    <h4>
                                                        <a href="found-detail.php?id=<?php echo $row["id"]?>"><?php echo mb_substr($row["title"],0,14,"utf-8")?></a>
                                                    </h4></div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="total">
                                    <div class="total_left">目前总共发表：</div>
                                    <div class="total_right"><?php echo $total; ?></div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="login_buttons">
                                    <div class="check_button"><a href="lost-publish.php">发布失物招领</a></div>
                                    <div class="check_button"><a href="found-publish.php">发布寻物启事</a></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </ul>
                        </li>
                        <li>:<span>1</span></li>
                        <?php
                    }else{
                        echo "<li><a href='login.html'>登录</a></li>";
                    }
                    ?>

                    <div class="clearfix"> </div>
                </ul>
            </div>
            <div class="head-nav">
                <span class="menu"> </span>
                <ul class="cl-effect-15">
                    <li class="<?php  if (substr(strrchr($_SERVER['PHP_SELF'],'/'),1) == "index.php") echo "active"; ?>"><a href="index.php">失物招领</a></li>
                    <li class="<?php  if (substr(strrchr($_SERVER['PHP_SELF'],'/'),1) == "found.php") echo "active"; ?>"><a href="found.php">寻物启事</a></li>
                    <li><a href="register.php">注册新用户</a></li>
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
                <li style="width:50%;" class="se-rc"><input type="text" value="" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}"></li>
                <li style="width:30%;" class="roo-om"><div class="section_room1">
                        <form>
                            <select id="country" onChange="change_country(this.value)" class="frm-field required">
                                <option value="null">简体中文</option>
                                <option value="null">English</option>
                                <option value="AX">Arab</option>
                            </select>
                        </form>

                    </div></li>
                <li style="width:20%;" class="su-m"> <input type="submit" value="搜 索"></li>
                <div class="clearfix"> </div>
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>