<?php
$_id=$_GET['id'];
echo $_id;
$conn=mysqli_connect("localhost","root","root","test");
	  mysqli_query($conn,"set names utf8");
$reslut=mysqli_query($conn,"SELECT `tg_title`, `tg_text`, `tg_date` FROM `tg_text` WHERE tg_id='".$_id."' ");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>删除文本</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
	<form method="post" action="delete_ok.php">
		<table id="tab2">
			<caption>删除文本</caption>
			<?php while($str=mysqli_fetch_array($reslut,MYSQLI_ASSOC)){?>
			<tr>
				<td>文本标题:<input type="hidden" name="text_id" value="<?php echo $_id;?>"></td>
				<td><input type="text" name="text_title" value="<?php echo $str['tg_title'];?>"></td>
			</tr>
			<tr>
				<td>文本内容:</td>
				<td><input type="text" name="text_text" value="<?php echo $str['tg_text'];?>"></td>
			</tr>
			<tr>
				<td>发布时间:</td>
				<td><input type="text" name="text_date" value="<?php echo $str['tg_date'];?>"></td>
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