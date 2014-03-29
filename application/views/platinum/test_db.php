<?php if($verify != false) : ?>
    
            <span class="green">*** ยืนยันการเป็นสมาชิก *** <?php echo $otp;?></span>
<?php else : ?>
    <span class="red">*** ไม่พบข้อมูลของท่าน กรุณาตรวจสอบหมายเลขโทรศัพท์อีกครั้ง ***</span>
<?php endif; ?>