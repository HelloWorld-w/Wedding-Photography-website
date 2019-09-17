<?php
	$_title=$_POST['text_title'];
	$_text=$_POST['text_text'];
	$_date=$_POST['text_date'];
	$conn=mysqli_connect("localhost","root","root","test");
		  mysqli_query($conn,'set names utf8');
	$reslut=mysqli_query($conn,"INSERT INTO tg_text(tg_title, tg_text, tg_date) VALUES ('".$_title."','".$_text."','".$_date."')");
	print_r($reslut);
	// if(!!$reslut){
 //        echo "<script>alert('插入成功!');location='select.php';</script>";
 //    }else{
 //        echo "<script>alert('插入失败!');history.go(-1);</script>";
 //    }
?>