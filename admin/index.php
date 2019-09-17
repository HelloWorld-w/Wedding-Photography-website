<html>
<head>
<meta charset="UTF-8">
<title>后台界面</title>
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
    <body>
    	<?php session_start();
    		  if(isset($_SESSION['username'])){
    	?>
   		<div id="header">蒙娜丽莎后台管理系统</div>
   		<div id="bottom">
	   		<div id="left_nav">
				<ul>
					<li><a href="admin/select.php" target="htmlform">管理员管理</a></li>
					<li><a href="user/select.php" target="htmlform">用户管理</a></li>
					<li><a href="potho/select.php" target="htmlform">客照管理</a></li>
					<li><a href="text/select.php" target="htmlform">摄影百科</a></li>
					<li><a href="exit.php">退出系统</a></li>
				</ul>
	   		</div>
	   		<div id="right_nav">
					<iframe class="iframeCon" name="htmlform"></iframe>
	   		</div>
	   	</div>
	   	<?php
	   		}else{
	   			echo "<script>alert('请先登录或者注册!!!');location='admin.php';</script>;</script>";
	   		}
	   	?>
    </body>
</html>