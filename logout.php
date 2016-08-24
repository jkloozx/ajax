<meta charset="utf-8">
<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2016-08-11 16:32:01
 * @version $Id$
 */
setCookie('username','',time()-3600);
setCookie('isLogin','',time()-3600);
header("Location:index.php");