<?php
	$_url=$_POST['potho_url'];
	$conn=mysqli_connect("localhost","root","root","test");
		  mysqli_query($conn,'set names utf8');
	$reslut=mysqli_query($conn,"INSERT INTO `tg_photo`(`url`) VALUES ('".$_url."')");
	if(!!$reslut){
        echo "<script>alert('插入成功!');location='select.php';</script>";
    }else{
        echo "<script>alert('插入失败!');history.go(-1);</script>";
    }
?>