<?php
        $conn=mysqli_connect("localhost","root","root","test");
        mysqli_query($conn,"set names utf8");
        $result=mysqli_query($conn,'SELECT * FROM tg_text order by tg_id desc'); 
?>
<div id="footer">
<p>konwledge摄影百科</p>
<?php while($arr=mysqli_fetch_array($result)){?>
<div id="footer-con">
    <div id="footer-left">
    	<i><?php echo $arr['tg_title'];?></i>
    </div>
    <div id="footer-right">
        <dl>
        <dt><?php echo $arr['tg_title'];?></dt>
        <dd><span class="footer_df">BY MONALISA Team</span>
            <span class="footer_ds">NEWS</span>
            <span class="footer_dt"><?php echo $arr['tg_date'];?></span></dd>
        <dd class="footer_text"><?php echo $arr['tg_text'];?></dd>
        </dl>
    </div>
</div>
<?php }?>
</div>
