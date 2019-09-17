<?php
$conn=mysqli_connect("localhost","root","root","test");
	  mysqli_query($conn,"set names utf8");
$reslut=mysqli_query($conn,"SELECT id,username FROM tg_admin");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>查询管理员信息</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
	<table id="tab1">
		<tr>
			<td id="tab1_td"><a>浏览数据</a></td>
			<td><a href="insert.php">添加管理员</a></td>
			<td><a href="###">修改管理员</a></td>
			<td><a href="###" target="htmlform">删除管理员</a></td>
		</tr>
	</table>
	<br/>
	<form action="" method="post">
		<table id="tab2">
			<tr>
				<td>id号</td>
				<td>管理员账号</td>
				<td>操作</td>
			</tr>
			<?php while($str=mysqli_fetch_array($reslut,MYSQLI_ASSOC)){?>
				<tr>
					<td><?php echo $str['id'];?></td>
					<td><?php echo $str['username'];?></td>
					<td><a href="update.php?id=<?php echo $str['id'];?>">修改</a>&nbsp;/&nbsp;<a href="delete.php?id=<?php echo $str['id'];?>">删除</a></td>
				</tr>
			<?php }?>
		</table>
	</form>
</body>
</html>