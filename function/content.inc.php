<?php
$conn=mysqli_connect("localhost","root","root","test");
        mysqli_query($conn,"set names utf8");
$reslut=mysqli_query($conn,"SELECT * FROM tg_conimg");
?>
<div id="content">
    <p>Interior 主题内景and外景</p>
    <div class="top_con_left">
    	<?php $num=rand(1,2);?>
    	<img src="images/<?php echo 'cont'.$num;?>.jpg"/>
    </div>
    <div class="top_con_right">
        <?php if($nums=mysqli_num_rows($reslut)){
    	      for($i=0;$i<4;$i++){
              $num=rand(1,$nums);
         ?>
    <dl>
    	<dt>
    		<img src="images/<?php echo 'con'.$num;?>.jpg"/>
    	</dt>
        <dd><?php 
            if($num<4){
                echo '场馆内景';
            }else{
                echo '场馆外景';
            }
               ?>
        </dd>
    </dl>
   <?php }?>
   <?php }?>
    </div>
    <p>PRINNIS 最新客照</p>
	<div id="bottom_con">
		<?php for($i=0;$i<2;$i++){
                    $num=rand(1,3);
              ?>
    	<img src="images/<?php echo 'bot'.$num;?>.jpg"/>
    	<?php }?>
	</div>
</div>