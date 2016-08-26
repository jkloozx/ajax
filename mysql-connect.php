<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2016-08-10 13:28:47
 * @version $Id$
 */
$con = mysqli_connect("localhost","root","root","mydb");
if ($con) {
}else{
	echo "数据库连接失败！";
}
mysqli_query($con,"set names utf8");