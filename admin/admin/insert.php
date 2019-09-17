<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>修改数据</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
	<form method="post" action="insert_ok.php">
		<table id="tab2">
			<caption>修改管理员信息</caption>
			<tr>
				<td>管理员账户:</td>
				<td><input type="text" name="admin_username" value=""></td>
			</tr>
			<tr>
				<td>管理员密码:</td>
				<td><input type="text" name="admin_password" value=""></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="sub" value="插入"><input type="reset" name="res"></td>
			</tr>
		</table>
	</form>
	<p><a href="select.php">返回上一页</a></p>
</body>
</html>