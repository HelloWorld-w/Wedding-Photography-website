 <?php
 header('content-Type:text/html;charset=utf-8');
    $username=$_POST['username'];
    $password=$_POST['password'];
    $coon=mysqli_connect('localhost','root','root','test');
    mysqli_query($coon,'set names utf8');
    $result=mysqli_query($coon,
        "INSERT INTO tg_admin(
        username,
        password
        )
        VALUES (
        '".$username."',
        md5('".$password."')
        )"
    )or die('mysql错误！');
    if(!!$result){
        echo "<script>alert('注册成功!');location='admin.php';</script>";
    }else{
        echo "<script>alert('注册失败!');history.go(-1);</script>";
    }
    ?>

