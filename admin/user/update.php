<?php
$_id=$_GET['id'];
$conn=mysqli_connect("localhost","root","root","test");
	  mysqli_query($conn,"set names utf8");
$reslut=mysqli_query($conn,"SELECT tg_username, tg_password, tg_question, tg_sex, tg_email, tg_qq FROM `tg_userform` WHERE tg_id='".$_id."' ");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>修改数据</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
	<form method="post" action="update_ok.php">
		<table id="tab2">
			<caption>修改用户信息</caption>
			<?php while($str=mysqli_fetch_array($reslut,MYSQLI_ASSOC)){?>
			<tr>
				<td>用户账户:<input type="hidden" name="admin_id" value="<?php echo $_id;?>"></td>
				<td><input type="text" name="user_username" value="<?php echo $str['tg_username'];?>"></td>
			</tr>
			<tr>
				<td>用户密码:</td>
				<td><input type="text" name="user_password" value="<?php echo $str['tg_password'];?>" width=60></td>
			</tr>
			<tr>
				<td>密码提示:</td>
				<td><input type="text" name="user_question" value="<?php echo $str['tg_question'];?>" width=60></td>
			</tr>
			<tr>
				<td>性别:</td>
				<td><input type="text" name="user_sex" value="<?php echo $str['tg_sex'];?>" width=60></td>
			</tr>
			<tr>
				<td>邮箱:</td>
				<td><input type="text" name="user_email" value="<?php echo $str['tg_email'];?>" width=60></td>
			</tr>
			<tr>
				<td>QQ:</td>
				<td><input type="text" name="user_qq" value="<?php echo $str['tg_qq'];?>" width=60></td>
			</tr>
			<?php }?>
			<tr>
				<td colspan="2"><input type="submit" name="sub" value="提交修改"><input type="reset" name="res"></td>
			</tr>
		</table>
	</form>
	<p><a href="select.php">返回上一页</a></p>
</body>
</html>