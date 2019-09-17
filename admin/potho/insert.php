<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>添加数据</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
	<form method="post" action="insert_ok.php">
		<table id="tab2">
			<caption>添加照片</caption>
			<tr>
				<td>照片地址：</td>
				<td><input type="text" name="potho_url" value=""></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="sub" value="插入"><input type="reset" name="res"></td>
			</tr>
		</table>
	</form>
	<p><a href="select.php">返回上一页</a></p>
</body>
</html>