<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="css/basic.css"/>
<link rel="stylesheet" href="css/content.css">
<link rel="stylesheet" href="css/index.css"/>
<link rel="stylesheet" href="css/footer.css"/>
<title>首页</title>
</head>
<body>
<?php 
	session_start();
	if(isset($_SESSION['username'])){?>
<?php
    require dirname(__FILE__).'\function\header.inc.php';
    require dirname(__FILE__).'\function\roll_img.inc.php';
?> 
   	
<?php
    require dirname(__FILE__).'\function\content.inc.php';
?>

<?php
    require dirname(__FILE__).'\function\footer.inc.php';
    require dirname(__FILE__).'\function\bottom.inc.php';
?>
<?php }else{
	echo "<script>alert('请先登录或者注册!!!');location='login.php';</script>;</script>";
}?>
</body>
	
</html>