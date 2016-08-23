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
$username = $_COOKIE["username"];
$title = $_POST["title"];
$chenghu = $_POST["chenghu"];
$wupin = $_POST["wupin"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$address = $_POST["address"];
$thanks = $_POST["thanks"];
$content = $_POST["content"];
$create_time = date("20y年m月d日 h：i：s");

function fileext($filename){
    return substr(strrchr($filename,'.'),1);  //获取扩展名
	}//substr返回字符串包括第n个及其以后的所有字符
   //strrchr查找一个字符串在另一个字符串中最后出现的位置并返回包括这个字符串及其以后的字符

function random($length){  //生成随机文件名函数
  	$hash='FOUND-';
  	$chars='abcdefghijklmnopqrstuvwxyz0123456789abcdefghijklmnopqrstuvwxyz';
  	$max=strlen($chars)-1;
  	mt_srand((double)microtime()*1000000);//mt_srand随机数生成器
  	for($i=0;$i<$length;$i++)
  	{
  		$hash.=$chars[mt_rand(0,$max)];
  	}
  	return $hash;
  }

  if (isset($_FILES['image']['name'])) {
   $uploaddir="upload/images/";
   $type=array("jpg","gif","bmp","jpeg","pan","ico","png");//设置允许上传文件的类型
   if(!in_array(strtolower(fileext($_FILES['image']['name'])),$type))//判断上传文件的类型是否在范围内
   {
   	$text=implode(",",$type);//implode将数组转为字符串，第一个参数为数组元素之间的填充字符
   	echo "您只能添加以下类型文件：",$text,"<br/>";
   }else{
        $filename=explode(".",$_FILES['image']['name']);//获取文件名
        do{
        	$filename[0]=random(10);
        	$name=implode(".",$filename);
        	$uploadfile=$uploaddir.$name;
        }
        while(file_exists($uploadfile));
        if(is_uploaded_file($_FILES['image']['tmp_name']))
        {
        	if(move_uploaded_file($_FILES['image']['tmp_name'],$uploadfile))
        	{
        		$imageUrl = $uploadfile;
        		$sql = "insert into found (username,title,name,wupin,email,tel,address,thanks,content,create_time,imageUrl) values ('$username','$title','$chenghu','$wupin','$email','$tel','$address','$thanks','$content','$create_time','$imageUrl')";
        		if (mysqli_query($con,$sql)) {
				echo <<<div
<div style="text-align: center;">寻物启事发布成功！</div>
div;
				}else{
				echo <<<div
<center>寻物启事发布失败！</center>
div;
				}
        		echo <<<div
<div style="text-align: center;">您的文件已经上传完毕 上传图片预览：</div><br/><center><img width='100' src='$uploadfile'></center
div;
        		echo <<<div
<br/><center><a href='javascript:history.go(-1)'>继续上传</a>|<a href='found.php'>返回寻物启事</a></center>
div;
        	}else
        	{
        		echo <<<div
<div style="text-align: center;">寻物启事发布失败！</div>
div;
        	}
        }
    }
}else{
  $imageUrl = null;
            $sql = "insert into found (username,title,name,wupin,email,tel,address,thanks,content,create_time,imageUrl) values ('$username','$title','$chenghu','$wupin','$email','$tel','$address','$thanks','$content','$create_time','$imageUrl')";
            if (mysqli_query($con,$sql)) {
        echo <<<div
<div style="text-align: center;">寻物启事发布成功！</div>
div;
        }else{
        echo <<<div
<div style="text-align: center;">寻物启事发布失败！</div>
div;
        }
}
}else{
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



