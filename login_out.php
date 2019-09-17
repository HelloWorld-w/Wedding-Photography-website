 <?php
 header('content-Type:text/html;charset=utf-8');
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    $coon=mysqli_connect('localhost','root','root','test');
    mysqli_query($coon,'set names utf8');
    $result=mysqli_query($coon,
        "SELECT * FROM tg_userform
        WHERE
       tg_username='".$username."'
        AND
        tg_password=md5('".$password."')
        "
    )or die('mysql错误！');
    $_SESSION['username']=$username;
    if(!!$num=mysqli_num_rows($result)){
        echo "<script>alert('登录成功!!!');location='index.php';</script>";
    }else{
        echo "<script>alert('登录失败!!!');history.go(-1);</script>";
    }
    ?>
