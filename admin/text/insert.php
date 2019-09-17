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
			<caption>添加文本</caption>
			<tr>
				<td>文本标题:</td>
				<td><input type="text" name="text_title" value=""></td>
			</tr>
			<tr>
				<td>文本内容:</td>
				<td><input type="text" name="text_text" value=""></td>
			</tr>
			<tr>
				<td>发布时间:</td>
				<td><input type="text" name="text_date" value="0000-00-00 00:00:00"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="sub" value="插入"><input type="reset" name="res"></td>
			</tr>
		</table>
	</form>
	<p><a href="select.php">返回上一页</a></p>
</body>
</html>