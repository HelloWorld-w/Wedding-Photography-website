<?php
	$_username=$_POST['user_username'];
	$_password=$_POST['user_password'];
	$_question=$_POST['user_question'];
	$_sex=$_POST['user_sex'];
	$_email=$_POST['user_email'];
	$_qq=$_POST['user_qq'];
	$conn=mysqli_connect("localhost","root","root","test");
		  mysqli_query($conn,'set names utf8');
	$reslut=mysqli_query( $conn,"INSERT INTO tg_userform (tg_username,tg_password,tg_question,tg_sex,tg_email,tg_qq) VALUES (
		'".$_username."','".$_password."','".$_question."','".$_sex."','".$_email."','".$_qq."')
		" );
	if($reslut){
        echo "<script>alert('插入成功!');location='select.php';</script>";
    }else{
        echo "<script>alert('插入失败!');history.go(-1);</script>";
    }
?>