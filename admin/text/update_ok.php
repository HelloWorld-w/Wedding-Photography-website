<?php
$_id=$_POST['text_id'];
$_title=$_POST['text_title'];
$_text=$_POST['text_text'];
$_date=$_POST['text_date'];
$conn=mysqli_connect('localhost','root','root','test');
	  mysqli_query($conn,"set names utf8");
$result=mysqli_query($conn,"UPDATE tg_text SET tg_title='".$_title."',tg_text='".$_text."',tg_date='".$_date."' WHERE tg_id='".$_id."'");
if(!!$result){
    echo "<script>alert('修改成功!');location='select.php';</script>";
}else{
    echo "<script>alert('修改失败!');history.go(-1);</script>";
}
?>