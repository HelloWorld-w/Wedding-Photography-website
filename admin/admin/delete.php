<?php
$_id=$_GET['id'];
$conn=mysqli_connect("localhost","root","root","test");
	  mysqli_query($conn,"set names utf8");
$reslut=mysqli_query($conn,"SELECT username,password FROM tg_admin WHERE id=".$_id);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>修改数据</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
	<form method="post" action="delete_ok.php">
		<table id="tab2">
			<caption>修改管理员信息</caption>
			<?php while($str=mysqli_fetch_array($reslut,MYSQLI_ASSOC)){?>
			<tr>
				<td>管理员账户:<input type="hidden" name="admin_id" value="<?php echo $_id;?>"></td>
				<td><input type="text" name="admin_username" value="<?php echo $str['username'];?>"></td>
			</tr>
			<tr>
				<td>管理员密码:</td>
				<td><input type="text" name="admin_password" value="<?php echo $str['password'];?>" width=60></td>
			</tr>
			<?php }?>
			<tr>
				<td colspan="2"><input type="submit" name="sub" value="删除"><input type="reset" name="res"></td>
			</tr>
		</table>
	</form>
	<p><a href="select.php">返回上一页</a></p>
</body>
</html>