<?php
$_id=$_POST['admin_id'];
$_password=$_POST['admin_password'];
$_username=$_POST['admin_username'];
$conn=mysqli_connect('localhost','root','root','test');
	  mysqli_query($conn,"set names utf8");
$result=mysqli_query($conn,"UPDATE tg_admin SET username='".$_username."', password=md5('".$_password."') WHERE id='".$_id."' ");
	if(!!$result){
        echo "<script>alert('修改成功!');location='select.php';</script>";
    }else{
        echo "<script>alert('修改失败!');history.go(-1);</script>";
    }
?>