<h3>คิดเป็นระยะเวลาเช่าทั้งหมด <?php echo $days; ?> วัน <span class = "small_font font_weight_normal"></span></h3> 
<span style='color:#aaa!important;'><?php echo  "รับรถ ".$start_date."<br/>คืนรถ ".$end_date;?></span><br/>




<?php
	if($overtime_warn){
		
		echo "<span style='color:#aaa!important;'>*** เช่าจำนวน ".$diff->days." วัน ".$diff->h." ชั่วโมง ".$diff->i." นาที<br/> *** คืนรถเกินกำหนดมากกว่า 3 ชั่วโมงคิดเป็น 1 วัน </span>";
	}
?>
