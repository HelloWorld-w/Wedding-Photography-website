<?php
/**
 * _code()是验证码函数
 * @access public
 * @param $_width表示验证码的宽度
 * @param $_height表示验证码的长度
 * @param $_rnd_color表示验证码的位数
 * @param $_flag表示验证码的边框石否存在
 * return void 这个函数执行后产生一个验证码
 * */
function _code($_width=75,$_height=25,$_rnd_color=4,$_flag=false){
    //创建随机码
    $_nmsg="";
    for($i=0;$i<$_rnd_color;$i++){
        $_nmsg=$_nmsg.dechex(mt_rand(0,15));
    }
    //保存session
    $_SESSION['code']=$_nmsg;
    //创造一张图片
    $_img=imagecreatetruecolor($_width, $_height);
    //白色
    $white=imagecolorallocate($_img, 255, 255, 255);
    //填充颜色
    imagefill($_img,0,0,$white);
    //黑色边框
    if($_flag){
        //黑色
        $black=imagecolorallocate($_img,0, 0, 0);
        //画矩形
        imagerectangle($_img, 0, 0,74,24, $black);}
        //随机线条
        for($i=0;$i<6;$i++){
            $_line=imagecolorallocate($_img,mt_rand(200,255), mt_rand(200,255), mt_rand(200,255));
            imageline($_img,mt_rand(0,75), mt_rand(0,25), mt_rand(0,75), mt_rand(0,25), $_line);
        }
        //雪花
        for($i=0;$i<100;$i++){
            $_line=imagecolorallocate($_img,mt_rand(200,255), mt_rand(200,255), mt_rand(200,255));
            imagestring($_img,1,mt_rand(0,$_width),mt_rand(0,$_height),'*', $_line);
        }
        for($i=0;$i<strlen($_SESSION['code']);$i++){
            imagestring($_img,mt_rand(3,5),$i*$_width/$_rnd_color+mt_rand(1,10),
                mt_rand(1,$_height/2),$_SESSION['code'][$i],
                imagecolorallocate($_img,mt_rand(0,100), mt_rand(0,150), mt_rand(0,200)) );
        }
        
        //输出图片
        header('Content-Type:image/png');
        imagepng($_img);
        //销毁图片
        imagedestroy($_img);
}