<?php
	$_id=$_POST['text_id'];
	$conn=mysqli_connect("localhost","root","root","test");
		  mysqli_query($conn,'set names utf8');
	$res=mysqli_query($conn,"DELETE FROM tg_text WHERE tg_id='".$_id."' ");
	print_r($res);
	if(!!$res){
        echo "<script>alert('删除成功!');location='select.php';</script>";
    }else{
        echo "<script>alert('删除失败!');history.go(-1);</script>";
    }
?>