<?php
header("Access-Control-Allow-Origin: *"); // 允许任意域名发起的跨域请求  
header('Access-Control-Allow-Headers: X-Requested-With,X_Requested_With');  
define('url_root','../'); //定义路径
define('ty_of','/wp-content/themes/tybj/'); //定义路径  http://res.tybj-food.com/   本地 /wp-content/themes/tybj/
define('ty_img','/wp-content/themes/tybj/'); //定义路径 http://image.tybj-food.com/  本地 /wp-content/themes/tybj/dist/images/
define('version','?20161011'); //定义版本
session_start();


$A_webps='';
if(isset($_SESSION["webps"]))
{
$A_webps='_.webp';
}else{
	$A_webps='';
}
define('Iswebps',$A_webps);
?>

