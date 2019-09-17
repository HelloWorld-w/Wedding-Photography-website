<?php
	$_id=$_POST['admin_id'];
	$conn=mysqli_connect("localhost","root","root","test");
		  mysqli_query($conn,'set names utf8');
	$res=mysqli_query($conn,"DELETE FROM tg_photo WHERE id='".$_id."' ");
	if(!!$res){
        echo "<script>alert('删除成功!');location='select.php';</script>";
    }else{
        echo "<script>alert('删除失败!');history.go(-1);</script>";
    }
?>