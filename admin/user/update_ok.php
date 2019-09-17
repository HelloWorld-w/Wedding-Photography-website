<?php
$_id=$_POST['admin_id'];
$_username=$_POST['user_username'];
$_password=$_POST['user_password'];
$_question=$_POST['user_question'];
$_sex=$_POST['user_sex'];
$_email=$_POST['user_email'];
$_qq=$_POST['user_qq'];
$conn=mysqli_connect('localhost','root','root','test');
	  mysqli_query($conn,"set names utf8");
$result=mysqli_query($conn,"UPDATE tg_userform SET  tg_username='".$_username."',tg_password='".$_password."',tg_question='".$_question."',tg_sex='".$_sex."',tg_email='".$_email."',tg_qq='".$_qq."' WHERE tg_id='".$_id."' ");
	if(!!$result){
        echo "<script>alert('修改成功!');location='select.php';</script>";
    }else{
        echo "<script>alert('修改失败!');history.go(-1);</script>";
    }
?>