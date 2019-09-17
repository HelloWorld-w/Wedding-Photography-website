<?php
$conn=mysqli_connect("localhost","root","root","test");
	  mysqli_query($conn,"set names utf8");
$reslut=mysqli_query($conn,"SELECT tg_id,tg_username,tg_question,tg_sex,tg_email,tg_qq FROM tg_userform");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>查询用户信息</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
	<table id="tab1">
		<tr>
			<td id="tab1_td"><a>浏览数据</a></td>
			<td><a href="insert.php">添加用户</a></td>
			<td><a href="###">修改用户信息</a></td>
			<td><a href="###" target="htmlform">删除用户</a></td>
		</tr>
	</table>
	<br/>
	<form action="" method="post">
		<table id="tab3">
			<tr>
				<td>id号</td>
				<td>用户账号</td>
				<td>用户密码提示</td>
				<td>用户性别</td>
				<td>用户邮箱</td>
				<td>用户qq</td>
				<td>操作</td>
			</tr>
			<?php while($str=mysqli_fetch_array($reslut,MYSQLI_ASSOC)){?>
				<tr>
					<td><?php echo $str['tg_id'];?></td>
					<td><?php echo $str['tg_username'];?></td>
					<td><?php echo $str['tg_question'];?></td>
					<td><?php echo $str['tg_sex'];?></td>
					<td><?php echo $str['tg_email'];?></td>
					<td><?php echo $str['tg_qq'];?></td>
					<td><a href="update.php?id=<?php echo $str['tg_id'];?>">修改</a>&nbsp;/&nbsp;<a href="delete.php?id=<?php echo $str['tg_id'];?>">删除</a></td>
				</tr>
			<?php }?>
		</table>
	</form>
</body>
</html>