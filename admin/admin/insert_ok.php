<?php
	$_username=$_POST['admin_username'];
	$_password=$_POST['admin_password'];
	$conn=mysqli_connect("localhost","root","root","test");
		  mysqli_query($conn,'set names utf8');
	$reslut=mysqli_query($conn,"INSERT INTO `tg_admin`(`username`, `password`) VALUES ('".$_username."',md5('".$_password."'))");
	if(!!$reslut){
        echo "<script>alert('插入成功!');location='select.php';</script>";
    }else{
        echo "<script>alert('插入失败!');history.go(-1);</script>";
    }
?>