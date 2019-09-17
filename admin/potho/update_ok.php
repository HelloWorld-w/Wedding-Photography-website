<?php
$_id=$_POST['potho_id'];
$_url=$_POST['potho_url'];
$conn=mysqli_connect('localhost','root','root','test');
	  mysqli_query($conn,"set names utf8");
$result=mysqli_query($conn,"UPDATE tg_photo SET url='".$_url."' WHERE id='".$_id."' ");
	if(!!$result){
        echo "<script>alert('修改成功!');location='select.php';</script>";
    }else{
        echo "<script>alert('修改失败!');history.go(-1);</script>";
    }
?>