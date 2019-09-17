<?php
header('content-Type:text/html;charset=utf-8');
$coon=mysqli_connect('localhost','root','root','test');
mysqli_query($coon,'set names utf8');
    $username=$_POST['username'];
    $password=$_POST['password'];
    $question=$_POST['question'];
    $sex=$_POST['sex'];
    $email=$_POST['email'];
    $qq=$_POST['qq'];
    $result=mysqli_query($coon,
        "INSERT INTO tg_userform(
        tg_username,
        tg_password,
        tg_question,
        tg_sex,
        tg_email,
        tg_qq
        )
        VALUES (
        '".$username."',
        md5('".$password."'),
        '".$question."',
        '".$sex."',
        '".$email."',
        '".$qq."'
        )"
    )or die('mysql错误！');
    if($result){
    echo "<script>alert('注册成功!!!');location='login.php';</script>";
}else{
    echo "<script>alert('注册失败!!!');history.go(-1);</script>";
}
?>