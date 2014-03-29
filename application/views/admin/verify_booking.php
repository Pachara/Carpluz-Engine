<fieldset>
							<legend>ข้อมูลลูกค้า</legend> 
							<div class="booking_label">หมายเลขติดต่อ</div> : <div class="booking_value"><?php echo $phone_number;?></div><br/>
							<div class="booking_label">ชื่อลูกค้า</div> : <div class="booking_value">คุณโหน่ง</div>
							<div class="booking_label">สถานะ</div> : <div class="booking_value">สมาชิกใหม่</div>
							<div class="booking_label">แต้มสะสม</div> : <div class="booking_value"><?php echo $reward_point;?> แต้ม</div>
							
						</fieldset>
						<fieldset>
							<legend>รายละเอียดการจอง</legend> 
							<div class="booking_label">ประเภทรถ</div> : <div class="booking_value"><?php echo $car_type;?></div><br/>
							<div class="booking_label">รับรถที่จังหวัด</div> : <div class="booking_value"><?php echo $get_province;?></div><br/>
							<div class="booking_label">วันที่ - เวลา</div> : <div class="booking_value"><?php echo $start_date;?> เวลา <?php echo $start_time;?></div><br/>
							<div class="booking_label">สถานที่</div> : <div class="booking_value"><?php echo $get_place;?></div><br/>
							<div class="booking_label">คืนรถที่จังหวัด</div> : <div class="booking_value"><?php echo $return_province;?></div><br/>
							<div class="booking_label">วันที่ - เวลา</div> : <div class="booking_value"><?php echo $end_date;?> เวลา <?php echo $end_time;?></div><br/>
							<div class="booking_label">สถานที่</div> : <div class="booking_value"><?php echo $return_place;?></div><br/>
							
							</fieldset>
						
						<fieldset>
							<legend>ข้อมูลอื่นๆเพิ่มเติม</legend> 
							<?php if(isset($need_gps)){?>
							<div class="booking_label">GPS</div> : <div class="booking_value">ต้องการ GPS</div><br/>
							<?php } ?>
							<?php if(isset($baby_seat)){?>
							<div class="booking_label">BabySeat</div> : <div class="booking_value">ต้องการ Baby Seat</div><br/>
							<?php } ?>
							<div class="booking_label">หมายเหตุ</div> : <div class="booking_value"><?php echo $additional_info?>.</div><br/>
							
														
						</fieldset>
						<fieldset>
							<legend>สรุปราคา</legend> 
							<?php if($late_return){?>
							<div class="booking_label">หมายเหตุ</div> : <div class="booking_value">คืนรถช้ามากกว่า 3 ชม.</div><br/>
							<?php } ?>
							<div class="booking_label">ราคาปรกติ</div> : <div class="booking_value"> <?php echo $days;?> วัน วันละ <?php echo number_format($price["normal_price_per_day"]);?> บาท </div><br/>
							<div class="booking_label">รวมทั้งสิ้น</div> : <div class="booking_value"> <?php echo number_format($price["total_normal_price"]);?> บาท</div><br/>
							
							<?php if($price["have_discount"]){?>
							
							<div class="booking_label">ราคาส่วนลด</div> : <div class="booking_value"> <?php echo $days;?> วัน วันละ <?php echo number_format($price["price_after_discount_per_day"]);?> บาท </div><br/>
							<div class="booking_label">ส่วนลดวันละ</div> : <div class="booking_value"> <?php echo number_format($price["discount_per_day"]);?> บาท</div><br/>
							<div class="booking_label">รวมส่วนลด</div> : <div class="booking_value"> <?php echo number_format($price["total_discount"]);?> บาท</div><br/>
							<div class="booking_label">ยอดที่ต้องชำระ</div> : <div class="booking_value"> <?php echo number_format($price["total_price_after_discount"]);?> บาท</div><br/>
							<?php } ?>
							
						</fieldset>
						




