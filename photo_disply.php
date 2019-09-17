<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="css/basic.css"/>
<link rel="stylesheet" href="css/index.css"/>
<link rel="stylesheet" href="css/footer.css"/>
<link rel="stylesheet" href="css/photo.css"/>
<title>客照展示</title>
</head>
<body>
    <?php 
    session_start();
    if(isset($_SESSION['username'])){?>
    <?php
        require dirname(__FILE__).'\function\header.inc.php';
        $conn=mysqli_connect("localhost","root","root","test");
        mysqli_query($conn,"set names utf8");
        $result=mysqli_query($conn,'SELECT * FROM tg_photo'); 
        $arr=mysqli_num_rows($result);
        $page_size=6;
        if($arr%$page_size==0){
            $maxpage=(int)($arr/$page_size);
        }else{
            $maxpage=(int)($arr/$page_size)+1;
        }
        if(isset($_GET['curpage'])){
            $page=$_GET['curpage'];
        }else{
            $page=1;
        }
        $start=$page_size*($page-1);
        $get_sql="select * from tg_photo limit " .$start.",".$page_size;
        $data=mysqli_query($conn,$get_sql);
       ?>
    <hr/>
       	<div id="photo">
        	<dl>
            <dl>
                <?php while ($arr=mysqli_fetch_array($data,MYSQLI_ASSOC)) { ?>
                        <dd><img src="images/<?php echo $arr['url'];?>"></dd>
                <?php }?>
        	</dl>
        	
        </div>
    <div id="page"> 
            <?php echo "共".$maxpage."页&nbsp;&nbsp;&nbsp;";
                      echo "每页".$page_size."项&nbsp;&nbsp;&nbsp;";
            if($page>1){
                $prepage=$page-1;
                echo "<a href='?curpage=$prepage'>上一页</a>&nbsp;&nbsp;";
            }
            if($page<$maxpage){
                 $nextpage=$page+1;
                 echo "<a href='?curpage=$nextpage'>下一页</a>&nbsp;&nbsp;";
            }
            echo "&nbsp;&nbsp;当前第 $page 页</p>";
            ?>
    </div>
<?php
    require dirname(__FILE__).'\function\bottom.inc.php';
?>
<?php }else{
    echo "<script>alert('请先登录或者注册!!!');location='login.php';</script>;</script>";
}?>
</body>