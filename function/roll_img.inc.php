<?php
$conn=mysqli_connect("localhost","root","root","test");
		mysqli_query($conn,"set names utf8");
$reslut=mysqli_query($conn,"SELECT * FROM tg_rollimg");
?>
<?php if($nums=mysqli_num_rows($reslut)){?>
        <div id="roll_img">
				<?php $num=rand(1,$nums);?>
        		<img src="images/<?php echo $num;?>.jpg"/>
		</div>
<?php }?>