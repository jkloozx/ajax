<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="en" class="ie6 ielt7 ielt8 ielt9"><![endif]--><!--[if IE 7 ]><html lang="en" class="ie7 ielt8 ielt9"><![endif]--><!--[if IE 8 ]><html lang="en" class="ie8 ielt9"><![endif]--><!--[if IE 9 ]><html lang="en" class="ie9"> <![endif]--><!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>寻物启事</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--<link href="css/bootstrap-responsive.min.css" rel="stylesheet">-->
    <!--<link href="css/site.css" rel="stylesheet">-->
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
<!--    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>-->
<!--    <link rel="stylesheet" href="assets/css/reset.css">-->
    <link rel="stylesheet" href="assets/css/supersized.css">
<!--    <link rel="stylesheet" href="assets/css/style.css">-->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Javascript -->
    <script src="assets/js/jquery-1.8.2.min.js"></script>
    <script src="assets/js/supersized.3.2.7.min.js"></script>
    <script src="assets/js/supersized-init-op.js"></script>
<!--    <script src="assets/js/scripts.js"></script>-->
</head>
<body background="images/zoro.jpg" >
        <?php
            if(isset($_COOKIE['isLogin'])){
            ?>
    <div class="span9">
    <h1 style="color: wheat">
        请输入您要发表寻物启事
    </h1>
    <form enctype="multipart/form-data" action="found-publish-server.php" method="post" id="edit-profile" class="form-horizontal">
        <fieldset style="color: wheat">
            <legend>你的发表</legend>
            <div class="control-group">
                <label class="control-label" for="input01">标题</label>
                <div class="controls">
                    <input name="title" type="text" class="input-xlarge" id="input01" value="" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input01">您的称呼</label>
                <div class="controls">
                    <input name="chenghu" type="text" class="input-xlarge" id="input01" value="" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input01">物品名称</label>
                <div class="controls">
                    <div class="form-group">
                        <select name="wupin" style="color: black;background:rgba(108, 163, 255, 0.5);" class="form-control">
                            <option value="饭卡">饭卡</option>
                            <option value="钱包">钱包</option>
                            <option value="手机">手机</option>
                            <option value="u盘">u盘</option>
                            <option value="课本">课本</option>
                            <option value="电脑">电脑</option>
                            <option value="女朋友">女朋友</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input01">电子邮箱</label>
                <div class="controls">
                    <input name="email" type="text" class="input-xlarge" id="input01" value="" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input01">电话</label>
                <div class="controls">
                    <input name="tel" type="text" class="input-xlarge" id="input01" value="" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="fileInput">上传图片</label>
                <div class="controls">
                    <input name="image" class="input-file" id="fileInput" type="file" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input01">联系地址</label>
                <div class="controls">
                    <input name="address" type="text" class="input-xlarge" id="input01" value="" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input01">酬谢方式</label>
                <div class="controls">
                    <input name="thanks" type="text" class="input-xlarge" id="input01" value="" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="textarea">留言备注</label>
                <div class="controls">
                    <textarea name="content" class="input-xlarge" id="textarea" rows="4"></textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="optionsCheckbox">保密发表</label>
                <div class="controls">
                    <input type="checkbox" id="optionsCheckbox" value="option1" checked="checked" />
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">发表</button> <button type="reset" class="btn">重置</button>
            </div>
        </fieldset>
    </form>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/site.js"></script>
    <?php
    }else{
    ?>
    <h1 style="text-align:center;">非法提交，请<a href="login.html">登陆</a>后重试！</h1>
    <?php 
    }
    ?>

</body>
</html>
