<?php
$conn=mysqli_connect("localhost","root","root","test");
	  mysqli_query($conn,"set names utf8");
$reslut=mysqli_query($conn,"SELECT * FROM tg_text");
$nums=mysqli_num_rows($reslut);
$page_size=8;
if($nums%$page_size==0){
	$maxpage=(int)($nums/$page_size);
}else{
	$maxpage=(int)($nums/$page_size)+1;
}
if(isset($_GET['curr'])){
	$page=$_GET['curr'];
}else{
	$page=1;
}
$start=$page_size*($page-1);
$date=mysqli_query($conn,"SELECT *  FROM tg_text LIMIT ".$start.",".$page_size." ");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>文本信息</title>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
	<table id="tab1">
		<tr>
			<td id="tab1_td"><a>浏览数据</a></td>
			<td><a href="insert.php">添加文本</a></td>
			<td><a href="###">修改文本</a></td>
			<td><a href="###" target="htmlform">删除文本</a></td>
		</tr>
	</table>
	<br/>
	<form action="" method="post">
		<table id="tab3">
			<tr>
				<td>id号</td>
				<td>标题</td>
				<td class="text">内容</td>
				<td>发布时间</td>
			</tr>
			<?php while($str=mysqli_fetch_array($date)){?>
				<tr>
					<td><?php echo $str['tg_id'];?></td>
					<td width="120px"><span class="text"><?php echo $str['tg_title'];?></span></td>
					<td><span class="text"><?php echo $str['tg_text'];?></span></td>
					<td width="120px"><?php echo $str['tg_date'];?></td>
					<td><a href="update.php?id=<?php echo $str['tg_id'];?>">修改</a>&nbsp;/&nbsp;<a href="delete.php?id=<?php echo $str['tg_id'];?>">删除</a></td>
				</tr>
			<?php }?>
			<tr>
				<td colspan="5">
					<?php 
						echo '一共'.$maxpage.'页&nbsp;&nbsp;&nbsp;';
						echo '每页'.$maxpage.'条数据&nbsp;&nbsp;&nbsp;';
						if($page>1){
							$prepage=$page-1;
							echo "<a href='?curr=$prepage'>上一页</a>&nbsp;&nbsp;"; 
						}
						if($page<$maxpage){
							$nextpage=$page+1;
							echo "<a href='?curr=$nextpage'>下一页</a>&nbsp;&nbsp;";
						}
					echo "&nbsp;&nbsp;第 $page 页</p>";
					?>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>