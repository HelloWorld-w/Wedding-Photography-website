<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>添加用户</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
	<form method="post" action="insert_ok.php">
		<table id="tab2">
			<caption>添加用户信息</caption>
			<tr>
				<td>用户账户:</td>
				<td><input type="text" name="user_username" value=""></td>
			</tr>
			<tr>
				<td>用户密码:</td>
				<td><input type="text" name="user_password" value=""></td>
			</tr>
			<tr>
				<td>密码提示:</td>
				<td><input type="text" name="user_question" value=""></td>
			</tr>
			<tr>
				<td>用户性别:</td>
				<td><input type="text" name="user_sex" value=""></td>
			</tr>
			<tr>
				<td>用户邮箱:</td>
				<td><input type="text" name="user_email" value=""></td>
			</tr>
			<tr>
				<td>用户QQ:</td>
				<td><input type="text" name="user_qq" value=""></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="sub" value="插入"><input type="reset" name="res"></td>
			</tr>
		</table>
	</form>
	<p><a href="select.php">返回上一页</a></p>
</body>
</html>