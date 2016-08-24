<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
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

	<script src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
		$(function (){
			$('a[href*=#],area[href*=#]').click(function() {
				if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
					var $target = $(this.hash);
					$target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
					if ($target.length) {
						var targetOffset = $target.offset().top;
						$('html,body').animate({
								scrollTop: targetOffset
							},
							1000);
						return false;
					}
				}
			});
		})
	</script>
</head>
<body>
<?php
require "header.php";
?>
<!-- header -->
<header class="header">
	<div class="section clearfix">
		<!--<span class="logo"><img src="images/logo.png" height="48" width="46" alt="Combo" /></span>-->
		<!--<h1 class="site-name">失物招领</h1>-->
		<div id="push-menu"><span>Push</span></div>
		<nav>
			<a href="#hot-search">热门搜索</a>
			<a href="#card">饭卡</a>
			<a href="#wallet">钱包</a>
			<a href="#cellphone">手机</a>
			<a href="#textbook">课本</a>
			<a href="#u-disk">U盘</a>
			<a href="#girlfriend">女朋友</a>
		</nav>
	</div>
</header>
<div class="products-1">
	<div class="container">
		<div class="content_top">
			<div class="heading">
				<h3>饭卡</h3>
			</div>
			<div class="page-no">
				<p>快速翻页：</p><ul>
					<li><a href="#">1</a></li>
					<li class="active"><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li>[<a href="#"> 更多&gt;&gt;&gt;</a>]</li>
				</ul><p></p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="section group">
			<?php
			require "mysql-connect.php";
			$sql = "select * from lost order by id desc limit 4";
			$result = mysqli_query($con,$sql);
			/** @var TYPE_NAME $result */
			while($row = mysqli_fetch_assoc($result)){
				?>
				<div class="col_1_of_4 span_1_of_4">
					<div class="view effect">
						<a href="lost-detail.php?id=<?php echo $row["id"] ?>">	<img src="<?php echo $row["imageUrl"]; ?>" class="img-responsive myImage" alt=""></a>
					</div>
					<div class="cart">
						<p class="title"> <a href="lost-detail.php?id=<?php echo $row["id"] ?>"><?php echo mb_substr($row["title"],0,14,"utf-8");?></a></p>
						<div class="price">
							<span class="actual"><?php echo $row["create_time"]; ?></span>
						</div>
						<a href="lost-detail.php?id=<?php echo $row["id"] ?>">
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
<a href="#" name="wallet"><hr></a>
<div class="products-1">
	<div class="container">
		<div class="content_top">
			<div class="heading">
				<h3>钱包</h3>
			</div>
			<div class="page-no">
				<p>快速翻页：</p><ul>
					<li><a href="#">1</a></li>
					<li class="active"><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li>[<a href="#"> 更多&gt;&gt;&gt;</a>]</li>
				</ul><p></p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="section group">
			<div class="col_1_of_4 span_1_of_4">
				<div class="view effect">
					<a href="found-detail.php">	<img src="images/4.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="cart">
					<p class="title"> <a href="found-detail.php">楠苑食堂捡到一钱包</a></p>
					<div class="price">
						<span class="actual">$22.00</span>
					</div>
					<form action="found-detail.php">
						<input type="submit" value="Add to Cart" class="button">
					</form>
				</div>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<div class="view effect">
					<a href="found-detail.php"><img src="images/5.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="cart">
					<p class="title"> <a href="found-detail.php">Lorem ipsum dolor</a></p>
					<div class="price">
						<span class="actual">$22.00</span>
					</div>
					<form action="found-detail.php">
						<input type="submit" value="Add to Cart" class="button2">
					</form>
				</div>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<div class="view effect">
					<a href="found-detail.php"><img src="images/6.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="cart">
					<p class="title"> <a href="found-detail.php">Lorem ipsum dolor</a></p>
					<div class="price">
						<span class="actual">$22.00</span>
					</div>
					<form action="found-detail.php">
						<input type="submit" value="Add to Cart" class="button3">
					</form>
				</div>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<div class="view effect">
					<a href="found-detail.php"><img src="images/7.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="cart">
					<p class="title"> <a href="found-detail.php">Lorem ipsum dolor</a></p>
					<div class="price">
						<span class="actual">$22.00</span>
					</div>
					<form action="found-detail.php">
						<input type="submit" value="Add to Cart" class="button4">
					</form>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<a href="#" name="cellphone"><hr></a>
<div class="products-1">
	<div class="container">
		<div class="content_top">
			<div class="heading">
				<h3>手机</h3>
			</div>
			<div class="page-no">
				<p>快速翻页：</p><ul>
					<li><a href="#">1</a></li>
					<li class="active"><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li>[<a href="#"> 更多&gt;&gt;&gt;</a>]</li>
				</ul><p></p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="section group">
			<div class="col_1_of_4 span_1_of_4">
				<div class="view effect">
					<a href="found-detail.php">	<img src="images/4.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="cart">
					<p class="title"> <a href="found-detail.php">楠苑食堂捡到一钱包</a></p>
					<div class="price">
						<span class="actual">$22.00</span>
					</div>
					<form action="found-detail.php">
						<input type="submit" value="Add to Cart" class="button">
					</form>
				</div>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<div class="view effect">
					<a href="found-detail.php"><img src="images/5.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="cart">
					<p class="title"> <a href="found-detail.php">Lorem ipsum dolor</a></p>
					<div class="price">
						<span class="actual">$22.00</span>
					</div>
					<form action="found-detail.php">
						<input type="submit" value="Add to Cart" class="button2">
					</form>
				</div>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<div class="view effect">
					<a href="found-detail.php"><img src="images/6.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="cart">
					<p class="title"> <a href="found-detail.php">Lorem ipsum dolor</a></p>
					<div class="price">
						<span class="actual">$22.00</span>
					</div>
					<form action="found-detail.php">
						<input type="submit" value="Add to Cart" class="button3">
					</form>
				</div>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<div class="view effect">
					<a href="found-detail.php"><img src="images/7.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="cart">
					<p class="title"> <a href="found-detail.php">Lorem ipsum dolor</a></p>
					<div class="price">
						<span class="actual">$22.00</span>
					</div>
					<form action="found-detail.php">
						<input type="submit" value="Add to Cart" class="button4">
					</form>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<a href="#" name="textbook"><hr></a>
<div class="products-1">
	<div class="container">
		<div class="content_top">
			<div class="heading">
				<h3>课本</h3>
			</div>
			<div class="page-no">
				<p>快速翻页：</p><ul>
					<li><a href="#">1</a></li>
					<li class="active"><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li>[<a href="#"> 更多&gt;&gt;&gt;</a>]</li>
				</ul><p></p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="section group">
			<div class="col_1_of_4 span_1_of_4">
				<div class="view effect">
					<a href="found-detail.php">	<img src="images/4.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="cart">
					<p class="title"> <a href="found-detail.php">楠苑食堂捡到一钱包</a></p>
					<div class="price">
						<span class="actual">$22.00</span>
					</div>
					<form action="found-detail.php">
						<input type="submit" value="Add to Cart" class="button">
					</form>
				</div>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<div class="view effect">
					<a href="found-detail.php"><img src="images/5.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="cart">
					<p class="title"> <a href="found-detail.php">Lorem ipsum dolor</a></p>
					<div class="price">
						<span class="actual">$22.00</span>
					</div>
					<form action="found-detail.php">
						<input type="submit" value="Add to Cart" class="button2">
					</form>
				</div>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<div class="view effect">
					<a href="found-detail.php"><img src="images/6.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="cart">
					<p class="title"> <a href="found-detail.php">Lorem ipsum dolor</a></p>
					<div class="price">
						<span class="actual">$22.00</span>
					</div>
					<form action="found-detail.php">
						<input type="submit" value="Add to Cart" class="button3">
					</form>
				</div>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<div class="view effect">
					<a href="found-detail.php"><img src="images/7.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="cart">
					<p class="title"> <a href="found-detail.php">Lorem ipsum dolor</a></p>
					<div class="price">
						<span class="actual">$22.00</span>
					</div>
					<form action="found-detail.php">
						<input type="submit" value="Add to Cart" class="button4">
					</form>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<a href="#" name="u-disk"><hr></a>
<div class="products-1">
	<div class="container">
		<div class="content_top">
			<div class="heading">
				<h3>U盘</h3>
			</div>
			<div class="page-no">
				<p>快速翻页：</p><ul>
					<li><a href="#">1</a></li>
					<li class="active"><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li>[<a href="#"> 更多&gt;&gt;&gt;</a>]</li>
				</ul><p></p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="section group">
			<div class="col_1_of_4 span_1_of_4">
				<div class="view effect">
					<a href="found-detail.php">	<img src="images/4.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="cart">
					<p class="title"> <a href="found-detail.php">楠苑食堂捡到一钱包</a></p>
					<div class="price">
						<span class="actual">$22.00</span>
					</div>
					<form action="found-detail.php">
						<input type="submit" value="Add to Cart" class="button">
					</form>
				</div>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<div class="view effect">
					<a href="found-detail.php"><img src="images/5.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="cart">
					<p class="title"> <a href="found-detail.php">Lorem ipsum dolor</a></p>
					<div class="price">
						<span class="actual">$22.00</span>
					</div>
					<form action="found-detail.php">
						<input type="submit" value="Add to Cart" class="button2">
					</form>
				</div>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<div class="view effect">
					<a href="found-detail.php"><img src="images/6.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="cart">
					<p class="title"> <a href="found-detail.php">Lorem ipsum dolor</a></p>
					<div class="price">
						<span class="actual">$22.00</span>
					</div>
					<form action="found-detail.php">
						<input type="submit" value="Add to Cart" class="button3">
					</form>
				</div>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<div class="view effect">
					<a href="found-detail.php"><img src="images/7.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="cart">
					<p class="title"> <a href="found-detail.php">Lorem ipsum dolor</a></p>
					<div class="price">
						<span class="actual">$22.00</span>
					</div>
					<form action="found-detail.php">
						<input type="submit" value="Add to Cart" class="button4">
					</form>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<a href="#" name="girlfriend"><hr></a>
<div class="products-1">
	<div class="container">
		<div class="content_top">
			<div class="heading">
				<h3>女朋友</h3>
			</div>
			<div class="page-no">
				<p>快速翻页：</p><ul>
					<li><a href="#">1</a></li>
					<li class="active"><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li>[<a href="#"> 更多&gt;&gt;&gt;</a>]</li>
				</ul><p></p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="section group">
			<div class="col_1_of_4 span_1_of_4">
				<div class="view effect">
					<a href="found-detail.php">	<img src="images/4.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="cart">
					<p class="title"> <a href="found-detail.php">楠苑食堂捡到一钱包</a></p>
					<div class="price">
						<span class="actual">$22.00</span>
					</div>
					<form action="found-detail.php">
						<input type="submit" value="Add to Cart" class="button">
					</form>
				</div>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<div class="view effect">
					<a href="found-detail.php"><img src="images/5.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="cart">
					<p class="title"> <a href="found-detail.php">Lorem ipsum dolor</a></p>
					<div class="price">
						<span class="actual">$22.00</span>
					</div>
					<form action="found-detail.php">
						<input type="submit" value="Add to Cart" class="button2">
					</form>
				</div>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<div class="view effect">
					<a href="found-detail.php"><img src="images/6.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="cart">
					<p class="title"> <a href="found-detail.php">Lorem ipsum dolor</a></p>
					<div class="price">
						<span class="actual">$22.00</span>
					</div>
					<form action="found-detail.php">
						<input type="submit" value="Add to Cart" class="button3">
					</form>
				</div>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<div class="view effect">
					<a href="found-detail.php"><img src="images/7.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="cart">
					<p class="title"> <a href="found-detail.php">Lorem ipsum dolor</a></p>
					<div class="price">
						<span class="actual">$22.00</span>
					</div>
					<form action="found-detail.php">
						<input type="submit" value="Add to Cart" class="button4">
					</form>
				</div>
			</div>
			<div class="clearfix"> </div>
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