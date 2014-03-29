<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
<head>
	
	<title>Carpluz - รถเช่า<?php echo $target;?> <?php echo $phone_number;?> รถเช่า <?php echo $target;?> สนามบิน</title>
	
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="google-site-verification" content="<?php echo $google_verify;?>" />
	<meta name="description" content="โทร. <?php echo $phone_number;?> บริการ รถเช่า <?php echo $target;?> รับและคืนรถได้ที่สนามบิน คาร์พลัส <?php echo $target;?> เราให้บริการ รถเช่า <?php echo $target;?> สนามบิน รถใหม่ สะอาด ทุกคัน "/>
	<meta name="keywords" content="รถเช่า <?php echo $target;?>, รถเช่า สนามบิน<?php echo $target;?>, รถเช่านครศรี, รถเช่า<?php echo $target;?>, รถเช่าสนามบิน<?php echo $target;?>, เช่ารถ <?php echo $target;?>, เช่ารถ สนามบิน<?php echo $target;?>, เช่ารถ<?php echo $target;?>"/>

	
	<!-- Le styles -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?php echo site_url();?>assets/css/base.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo site_url();?>assets/css/media.queries.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo site_url();?>assets/css/tipsy.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo site_url();?>assets/js/fancybox/jquery.fancybox-1.3.4.css" />
	<link rel="stylesheet" href="<?php echo site_url();?>assets/css/GoogleLikeForms.css" />
	
	
	
	<!-- <?php echo site_url();?>js -->
	<script type="text/javascript" src="<?php echo site_url();?>assets/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="<?php echo site_url();?>assets/js/html5shiv.js"></script>
	<script type="text/javascript" src="<?php echo site_url();?>assets/js/jquery.tipsy.js"></script>
	<script type="text/javascript" src="<?php echo site_url();?>assets/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="<?php echo site_url();?>assets/js/fancybox/jquery.easing-1.3.pack.js"></script>
	<script type="text/javascript" src="<?php echo site_url();?>assets/js/jquery.touchSwipe.js"></script>
	<script type="text/javascript" src="<?php echo site_url();?>assets/js/jquery.mobilemenu.js"></script>
	<script type="text/javascript" src="<?php echo site_url();?>assets/js/jquery.infieldlabel.js"></script>
	<script type="text/javascript" src="<?php echo site_url();?>assets/js/jquery.echoslider.js"></script>
	<script type="text/javascript" src="<?php echo site_url();?>assets/js/fluidapp.js"></script>
	
	<!- Time Picker -!>
	
	<script type="text/javascript" src="<?php echo site_url();?>assets/js/timepicker/jquery.timepicker.js"></script>
	<script type="text/javascript" src="<?php echo site_url();?>assets/js/timepicker/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="<?php echo site_url();?>assets/js/timepicker/site.js"></script>
	<script type="text/javascript" src="<?php echo site_url();?>assets/js/timepicker/jquery.datepair.js"></script>
	<link rel="stylesheet" href="<?php echo site_url();?>assets/css/timepicker/jquery.timepicker.css" />
	<link rel="stylesheet" href="<?php echo site_url();?>assets/css/timepicker/bootstrap-datepicker.css" />
	
	<!- Zopim -!>
	<!--Start of Zopim Live Chat Script-->
	<script type="text/javascript">
	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
	$.src='//v2.zopim.com/?1wq9WbJhJKbeHa5g5YXEOrIAItCBSYls';z.t=+new Date;$.
	type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');

		
		
		</script>

	</script>
	<!--End of Zopim Live Chat Script-->
	

     
     <!- Ajax Function -!>
      <script type="text/javascript">
            
            var controller = 'landing_page';
            var base_url = '<?php echo site_url(); //you have to load the "url_helper" to use this function ?>';
            
     function check_price(province, start_date, start_time, end_date, end_time){
               
            //
            
            $('.car_box_indicator').show();
            $('#explain_box_content').hide();
            
            
            
            
            start_time = start_time.replace(":","%3a");
            end_time = end_time.replace(":","%3a");
             
            
            	$.ajax({
            	
            		
                    'url' : base_url  + controller + '/check_price/' + province + '/' + start_date + '/' + start_time + '/' + end_date + '/' + end_time,
                    'type' : 'POST', //the way you want to send data to your URL
                    'data' : {'province' : province, 'start_date' : start_date, 'start_time' : start_time, 'end_date' : end_date, 'end_time' : end_time },
                    'success' : function(data){ //probably this request will return anything, it'll be put in var "data"
	                    
	                    var container2 = $('#car_box_contents'); //jquery selector (get element by id)
	                    
	                    var delay=1000//1 seconds
	                    setTimeout(function(){
		                    
					    	$('.car_box_indicator').hide();
					    	container2.html(data);
					    },delay);
	                    
	                    
	                   
	                    
	                    
                                
                    }
                });
                
                
                $.ajax({
                    'url' : base_url  + controller + '/get_prefix/' + start_date + '/' + start_time + '/' + end_date + '/' + end_time,
                    'type' : 'POST', //the way you want to send data to your URL
                    'success' : function(data){ //probably this request will return anything, it'll be put in var "data"
	                    
	                    var container3 = $('#explain_box_content'); //jquery selector (get element by id)
	                    
	                   
		                    
					    	container3.html(data).show();
					   
	                    
	                    
                                
                    }
                });
                
                
                
                //
	            
            }
     </script>


	
	
	
	
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo site_url();?>assets/images/favicon.ico" />

    
	
</head>
<body>


	<!-- Start Wrapper -->
	<div id="page_wrapper">
		
	<!-- Start Header -->
	<header>
		<div class="container">
			<!-- Start Social Icons -->
			<aside>
								
				<ul class="social">
					
					<li class="facebook"><a href="<?php echo $fb_url;?>">Facebook</a></li>
					<li class="email"><a href='mailto:<?php echo $email;?>' title="<?php echo $email;?>" >Email</a></li>
					

					<!-- More Social Icons:
					<li class="dribbble"><a href="">Dribbble</a></li>
					<li class="google"><a href="">Google</a></li>
					<li class="flickr"><a href="">Flickr</a></li>
					-->
				</ul>
			</aside>
			<!-- End Social Icons -->

			<!-- Start Navigation -->
			<nav>
				<ul>
					
					
					
					<li><a href="#home" >รถเช่า<?php echo $target;?></a>
						<?php echo $province_menu;?>
					</li>
					
					<li><a href="#howtorent"> วิธีการเช่า</a></li>
					
					
					<li><a href="#aboutcarpluz"> รู้จักคาร์พลัส</a>
						<ul>
							
							<li><a href="#question"> คำถามที่พบบ่อย</a></li>
							<li><a href="#contactus"> ติดต่อคาร์พลัส</a></li>
						</ul>
						
					</li>
					<li><a href="<?php echo site_url();?>platinum/login">เข้าสู่ระบบ / แจ้งชำระเงิน</a></li>
					
					

					
					
					
					
				</ul>
				<span class="arrow"></span>
			</nav>
			<!-- End Navigation -->
		</div>
	</header>
	<!-- End Header -->
	
	<section itemscope itemtype="http://schema.org/LocalBusiness" class="container">
		
		<!-- Start App Info -->
		<div id="app_info">
			<!-- Start Logo -->
			<a href="<?php echo $site_url;?>" class="logo">
				<img itemprop="image" src="<?php echo site_url();?>assets/images/logo1.png" alt="Carpluz Logo"/>
			</a>
			<!-- End Logo -->
			<h1><span class="tagline"><span itemprop="name">คาร์พลัส - บริการ รถเช่า ในจังหวัด <span class="orange bold bigger"><?php echo $target;?></span></span><br/>รับและคืนรถได้ที่สนามบิน<br/></span></h1>
			
			
			<div id="booking_zone" >
			
				
				


				
				
				<form action="#" method="post" class="GoogleLikeForms GLF-blue" > 
                       
                       <div id="datepairExample">
                       
                      <table >
                      	<tr>
	                      	<td>
		                      	<span class="padding_left_3 booking_label">วันที่รับรถ :</span><br/>
		                      	<input id="start_date" class="date start" type="text" readonly='true' value="<?php echo date("d-m-Y");?>" style="width:130px;"/>
		                    </td>
	                      	<td> 
		                      	<span class="padding_left_3 booking_label">เวลารับรถ :</span><br/>
		                      	<input id="start_time" class="time start" type="text"  readonly='true' value="<?php echo date("H:i");?>" style="width:80px;;"/>
	                      	</td>
	                      	<td rowspan=2 style="padding-top:13px;">
	                      	
	                      		<a href="#" class="large_button check_button" id="windows" onclick="check_price('<?php echo $target;?>',document.getElementById('start_date').value,document.getElementById('start_time').value,document.getElementById('end_date').value,document.getElementById('end_time').value);">	
				                 เช็คราคา
				                 
				                </a>
			                      	
			                      	
		                      	
		                      		
	                      	</td>
                      	</tr>
                      	<tr>
	                      	<td>
	                      	<span class="padding_left_3 booking_label">วันที่คืนรถ :</span><br/>
	                      	<?php                     	
								$tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));         	
	                      	?>
	                      	<input id="end_date" class="date end" readonly='true' type="text" value="<?php echo date("d-m-Y",$tomorrow);?>" style="width:130px;"/></td>
	                      	<td> 
	                      	<span class="padding_left_3 booking_label">เวลาคืนรถ :</span><br/>
	                      	<input id="end_time" class="time end" readonly='true' type="text" value="<?php echo date("H:i");?>" style="width:80px;;"/></td>
	                      	
                      	</tr>
                      	
                      </table>      
                      </div>
                      
                      <div style="clear:both;"></div>
                     
                      		
                      	
                </form>
                
                
                
			</div>
			
				
				<div id="explain_box">
				<div id="explain_box_content">
				<h4><span class="font_style_italic font_color_gray font_weight_normal">*** กรุณาเลือกระยะเวลาเช่า เพื่อเช็คราคาและส่วนลด ***</span></h4>
				</div>
				</div>
				
			
			
			
			
			
				
				<a href="tel:<?php echo $phone_number_for_call;?>" class="margin_top_30 large_button align_right font_22 modify_button float_none" id="android">	
					<em class="font_10">เลือกรถ แล้วโทรเลย </em>โทร. <span itemprop="telephone"><?php echo $phone_number;?></span>
				</a>
			
				<?php if($target != "หาดใหญ่") {?>
			<a href="<?php echo $fb_url;?>" class="large_button align_right modify_button" id="apple">
						Facebook <?php echo number_format(json_decode(file_get_contents($fb_graph_url))->{'likes'});?> Likes
				</a>
			<?php } ?>
			
				<div class="price centered"> <!-- Alignments options: right_align, left_align, centered -->
				<p>Carpluz - Easy car rental service !</p>
			</div>
				
					
			
			
		</div>
		<!-- End App Info -->		
		
		<!-- Start Pages -->
		<div id="pages">
			<div class="top_shadow"></div>
			
						
			
			
			
			<!-- Start Home -->
			<div id="home" class="page">
			
			

				<!- Start CarBox Contents -!>
				<div id="car_box_contents">
				
					<?php echo $car_box_contents;?>
				
				<!- End CarBox Contents -!>
				</div>
			  			
			</div>
			<!-- End Home -->
			
			
			
			<!-- Start province -->
			
				<div id="province" class="page">
						

					
						
						<div class="background slideshow1" >
							<img src="<?php echo site_url();?>assets/images/logowhite.png" alt="Carpluz Logo White" />
						</div>
						
					
					
									
										
				

				</div>
				
			<!-- End province-->

			
			
			<!-- Start Team -->
			<div id="aboutcarpluz" class="page">

				<h2>คาร์พลัส รถเช่า <?php echo $target;?></h2>
			
				<div class="about_us content_box">
				
				
								
				
					<div class="one_half">
						<h3>มารู้จัก คาร์พลัส รถเช่า</h3>
						<p class="text_justify">คาร์พลัส รถเช่า เราให้บริการให้เช่ารถเก๋งสภาพใหม่ ในจังหวัด<?php echo $target;?> ด้วยบริการมาตรฐานระดับสากล บอกลาบรรยากาศ รถเช่า<?php echo $target;?>ที่ไม่ได้มาตรฐาน ขาดการดูแลบำรุงรักษา รถเสียระหว่างทางไปได้เลยเพราะรถเช่า<?php echo $target;?> สนามบิน ของเราใหม่ และมีการบำรุงรักษาอย่างถูกต้อง ทำให้คุณเชื่อมั่นได้ว่า รถเช่า<?php echo $target;?> ของเรานั้นมีคุณภาพพร้อมเป็นเพื่อนคู่ใจ ของคุณตลอดการเดินทาง เช่ารถ<?php echo $target;?> เราบริการด้วยความประทับใจและเป็นมืออาชีพ</p>
					</div>

					<div class="one_half column_last">
						
						
						<h3>คาร์พลัส <?php echo $target;?> รถใหม่ สะอาด</h3>
						<p class="text_justify">รถเช่า<?php echo $target;?> บริการด้วยความประทับใจ รถเช่า รถใหม่ รถเช่า<?php echo $target;?>สนามบิน เช่ารถ<?php echo $target;?> รถใหม่ได้มาตรฐาน เช่ารถ<?php echo $target;?>การันตี รถใหม่ ดูแลสะอาดทุกคัน ไม่มีปัญหากวนใจแน่นอน</p>
						<br/>
						<img src="<?php echo site_url();?>assets/images/logomini2.png" alt="Carpluz Logo Mini" />
						
						
						
					</div>
					
					
					
					
					<div class="team_members">
					<div class="person one_half">
						<img src="<?php echo site_url();?>assets/images/airport.png" alt="Airport" />
						<h4>รับและคืนรถที่สนามบิน</h4>
						<span>บริการขับรถไปรอรับคุณถึงสนามบิน<?php echo $target;?> คุณสามารถคืนรถที่สนามบินได้เลย ประหยัดเวลาเดินทาง ให้คุณมีเวลาท่องเที่ยวหรือทำธุระได้มากขึ้น</span>
											</div>
					<div class="person one_half column_last">
						<img src="<?php echo site_url();?>assets/images/ins.png" alt="Insuarance" />
						<h4>ฟรี ประกันภัยชั้น 1</h4>
						<span>หมดห่วงเรื่องการเกิดอุบัติเหตุ ทุกกรณี รถเช่า<?php echo $target;?> ของเรา มีประกันภัยชั้น 1 ให้ท่านแบบฟรีๆ ทุกคัน ประกันไม่รับผิดชอบในกรณีน้ำท่วม</span>
						
					</div>
					<div class="person one_half">
						<img src="<?php echo site_url();?>assets/images/gps2.png" alt="GPS" />
						<h4>ฟรี GPS นำทาง</h4>
						<span>คาร์พลัส รถเช่า <?php echo $target;?> ให้บริการฟรี GPS Gamin นำทางไปทุกที่ในจังหวัด<?php echo $target;?></span>
						
					</div>
					<div class="person one_half column_last">
						<img src="<?php echo site_url();?>assets/images/balloon.png" alt="Balloon" />
						<h4>รถใหม่ สะอาด</h4>
						<span>เราให้บริการ รถใหม่ สะอาด ทุกครั้งที่รับส่งรถ ท่านจึงมั่นใจได้ว่า จะได้รับรถที่สะอาด พร้อมใช้งานในทุกโอกาส</span>
						
					</div>
				</div>

					
					
					
					
					
					
					
					<div class="one_half">
						<h3>คาร์พลัส <?php echo $target;?> รถเช่า<?php echo $target;?></h3>
						<p class="text_justify">บริการรถให้เช่าในเขต<?php echo $target;?> ทุกสาขารับประกันรถสภาพใหม่ คุณเชื่อมั่นได้ว่ารถของเรานั้นมีคุณภาพพร้อมเป็นเพื่อนคู่ใจของคุณตลอดการเดินทาง ทางเราบริการด้วยความประทับใจ และเป็นมืออาชีพ</p>
					</div>
					
					<div class="one_half column_last">
						<h3>ทำไมต้องเช่ารถกับ คาร์พลัส <?php echo $target;?></h3>
						<p class="text_justify">เราเน้นบริการด้วย รถใหม่ เป็นหลัก และยังมีอุปกรณ์นำทาง GPS แถมให้ท่านใช้งานฟรีๆ เพื่อความสะดวกสะบายในการเดินทางของท่านยิ่งขึ้น เช่ารถ<?php echo $target;?> เช่ารถ <?php echo $target;?> สนามบิน กับเรา</p>
					</div>
					
				</div>
				
				
				
			</div>
			<!-- End Team -->
				
			<!-- Start Features -->
			<div id="howtorent" class="page">
				
				<h2>ขั้นตอนและวิธีการ เช่ารถ <?php echo $target;?></h2>
				
				<div class="feature_list content_box">
					<div class="one_half">
						<h3>1. จองรถล่วงหน้า</h3>
						<p class="text_justify">ท่านสามารถโทรจองรถเช่า <?php echo $target;?> ได้ทันทีที่ต้องการใช้บริการ รถเช่า ในจังหวัด<?php echo $target;?> หรือ โทรจองรถล่วงหน้า ได้ที่ เบอร์ <?php echo $phone_number;?> ตั้งแต่ 6.00น. - 22.00น. ของทุกวัน คาร์พลัส <?php echo $target;?> ยินดีให้บริการท่านทุกครั้งที่ท่านมาเยือนจังหวัด<?php echo $target;?></p>
					</div>

					<div class="one_half column_last">
						<h3>2. รอรับ SMS ยืนยัน</h3>
						<p class="text_justify">ท่านจะได้รับ SMS ยืนยันการจองรถเช่า คาร์พลัส<?php echo $target;?>พร้อมรายละเอียดต่างๆในการเช่ารถ เช่น ประเภทรถที่เช่า จำนวนวัน สถานที่รับรถ ราคา หมายเลขบัญชีธนาคาร และเบอร์พนักงานรับส่งรถ ภายใน 10 นาที เมื่อท่านยืนยันการจองกับ Call Center </p>
					</div>

					<div class="one_half">
						<h3>3. ชำระค่าบริการ</h3>
						<p class="text_justify">ให้ท่านชำระค่าบริการล่วงหน้ามายังหมายเลขบัญชีที่แจ้งผ่าน SMS เพื่อยืนยันการจองรถเช่า<?php echo $target;?> จากนั้นให้แจ้งการชำระเงินมาที่เบอร์ <?php echo $phone_number;?></p>
					</div>

					<div class="one_half column_last">
						<h3>4. รับรถที่สนามบิน</h3>
						<p class="text_justify">พนักงานจะนำรถมาส่งท่านตามวัน เวลา และสถานที่ตามรายละเอียดการจองรถ พร้อมน้ำมันเต็มถัง ท่านควรตรวจเช็คความเรียบร้อยภายในและภายนอกรถ ก่อนเซ็นต์เอกสารสัญญาเช่ากับพนักงาน หากพนักงานไม่สุภาพ กรุณาแจ้ง Call Center <?php echo $phone_number;?></p>
					</div>

					<div class="one_half">
						<h3>5. ชำระค่ามัดจำรถ</h3>
						<p class="text_justify">หลังจากตรวจเช็คสภาพรถ และเซ็นต์เอกสารเช่ารถเป็นที่เรียบร้อยแล้ว ท่านจะได้รับใบเสร็จรับเงิน และเอกสารการมัดจำ จำนวน <?php echo $deposit;?> บาท ให้ท่านชำระค่ามัดจำรถ <?php echo $deposit;?> กับพนักงานรับรถได้ทันที</p>
					</div>

					<div class="one_half column_last">
						<h3>6. คืนรถและรับค่ามัดจำคืน</h3>
						<p class="text_justify">เมื่อถึงกำหนดคืนรถเช่า <?php echo $target;?> ให้ท่านนำรถมาคืน ตามวัน เวลา และสถานที่ ที่ได้นัดหมายไว้ พร้อมน้ำมันเต็มถึง จะมีพนักงานมารอรับรถ และคืนเงินมัดจำให้ท่านเป็นจำนวน <?php echo $deposit;?> บาท</p>
					</div>
				</div>
				
			</div>
			<!-- End Features -->		
			

						
			<!-- Start Updates -->
			<div id="question" class="page">
				
				<h2>คำถามที่พบบ่อยในการ เช่ารถ <?php echo $target;?></h2>
				
				<div class="releases">
					<article class="release">
						<h3>1. ต้องใช้เอกสารอะไรบ้างในการเช่ารถที่<?php echo $target;?> ?</h3>
						
						<ul>
							<li class="new"><span><b>ถาม</b></span><b>เอกสารต้องใช้อะไรบ้าง ยุ่งยากมั้ยครับ?</b></li>
							<li class="fix"><span><b>ตอบ</b></span>ใช้แค่สำเนาบัตรประชาชนกับสำเนาใบขับขี่ แค่  2 อย่างคะ</li>
							<li class="new"><span><b>ถาม</b></span><b>แล้วต้องส่งเอกสารไปให้ยังไงครับ?</b></li>
							<li class="fix"><span><b>ตอบ</b></span>ถ่ายรูปหรือสแกนบัตรประชาชนและใบขับขี่ส่งมาทาง Email ได้ที่ <a href='mailto:<?php echo $email;?>' title="<?php echo $email;?>" ><?php echo $email;?></a> หรือจะเตรียมสำเนามาให้ในวันรับรถก็ได้คะ</li>
						</ul>
					</article>
					
					<article class="release">
						<h3>2. ต้องจ่ายค่ามัดจำรถเท่าไหร่ ยังไงครับ?</h3>
						
						<ul>
							<li class="new"><span><b>ถาม</b></span><b>นอกจากใช้สำเนาบัตรประชาชนและใบขับขี่แล้ว ต้องใช้อะไรอีกบ้างครับ?</b></li>
							<li class="fix"><span><b>ตอบ</b></span>มีค่ามัดจำรถอีก <?php echo $deposit;?> บาท คะ</li>
							<li class="new"><span><b>ถาม</b></span><b>แล้วต้องชำระยังไงครับ ? ต้องโอนไปก่อนรึป่าว?</b></li>
							<li class="fix"><span><b>ตอบ</b></span>โอนมาเฉพาะค่าเช่ารถอย่างเดียวคะ ส่วนค่ามัดจำรถ <?php echo $deposit;?> บาท มาจ่ายเงินสดในวันรับรถได้เลย </li>
							<li class="new"><span><b>ถาม</b></span><b>แล้วมีอะไรให้ไว้เป็นหลักฐานมั้ยครับ?</b></li>
							<li class="fix"><span><b>ตอบ</b></span>เราจะออกใบกำกับภาษีให้เป็นหลักฐาน จากนั้นเมื่อลูกค้านำรถมาคืนเราจะคืนเงินมัดจำให้ <?php echo $deposit;?> บาทคะ</li>
							
							
						</ul>
					</article>
					
					<article class="release">
						<h3>3. แล้วเรื่องประกันภัยละครับ มีให้ด้วยรึป่าว ?</h3>
						
						<ul>
							<li class="new"><span><b>ถาม</b></span><b>ราคาหน้าเว็บไซต์ นี่รวมประกันด้วยมั้ยครับ?</b></li>
							<li class="fix"><span><b>ตอบ</b></span>ราคาที่แจ้งหน้าเว็บไซต์เป็นราคาสุทธิแล้วคะ รวมประกันชั้น 1 เรียบร้อยแล้ว</li>
							<li class="new"><span><b>ถาม</b></span><b>แล้วถ้าเกิดอุบัติเหตุต้องทำอย่างไรครับ?</b></li>
							<li class="fix"><span><b>ตอบ</b></span>กรณีที่เกิดอุบัติเหตุให้รีบโทรแจ้ง Call Center ได้เลยที่ 086-369-2772 คะ</li>
							<li class="new"><span><b>ถาม</b></span><b>แล้วประกันคุ้มครองอะไรบ้างครับ?</b></li>
							<li class="fix"><span><b>ตอบ</b></span>กรณีที่เกิดอุบัติเหตุบริษัทประกันที่คาร์พลัสทำประกันภัยไว้จะผิดชอบทุกกรณีตามเงื่อนไขของประกันชั้น 1 เลยคะ</li>
						</ul>
					</article>
				</div>
				
			</div>
			<!-- End Updates -->
					
						
			<!-- Start Start Contact -->
			<div id="contactus" class="page">
				
				<h2>ติดต่อ คาร์พลัส รถเช่า <?php echo $target;?></h2>
				
				<h3>บริษัท เอสเค พชร จำกัด </h3>
				
				<div class="one_half">
				<h4>สาขากรุงเทพมหานคร</h4>	
					<p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">471/400 อาคารพญาไทเพลส ถนนศรีอยุธยา แขวงทุ่งพญาไท เขตราชเทวี </span> <span itemprop="addressLocality">กรุงเทพ</span> <span itemprop="postalCode">10400</span></p>
					<ul class="inside">
						<li>โทร. 085-369-2772</li>
						<li>แฟ็กซ์ 02-658-3833</li>
						<li>อีเมล์ <span itemprop="email"><a href='mailto:<?php echo $email;?>' title="<?php echo $email;?>" ><?php echo $email;?></a></span></li>
						<li>เวลาทำการ <?php echo $operate_time;?></li>
					</ul>
				</div>
				
				<div class="one_half column_last">
				<h4>สาขานครศรีธรรมราข</h4>	
					<p>519 ถนนราชดำเนิน ตำบลในเมือง อำเภอเมือง จังหวัดนครศรีธรรมราช 80000</p>
					<ul class="inside">
						<li>โทร. 085-369-2772</li>
						<li>แฟ็กซ์ 075-356-581</li>
						<li>อีเมล์ <a href='mailto:<?php echo $email;?>' title="<?php echo $email;?>" ><?php echo $email;?></a></li>
						<li>เฟสบุ๊ค <a href="http://www.facebook.com/carpluz">facebook.com/carpluz</a></li>
						<li>เวลาทำการ <?php echo $operate_time;?></li>
						
					</ul>
				</div>
				
				<div class="one_half">
				<h4>สาขาเชียงใหม่</h4>	
					<p>15/1 หมู่ 5 ตำบลสันทราย อำเภอสันทราย จังหวัดเชียงใหม่ 50210</p>
					<ul class="inside">
						<li>โทร. 085-369-2772</li>
						<li>อีเมล์ <a href='mailto:<?php echo $email;?>' title="<?php echo $email;?>" ><?php echo $email;?></a></li>
						<li>เฟสบุ๊ค <a href="http://www.facebook.com/carpluz.chiangmai">facebook.com/carpluz.chiangmai</a></li>
						<li>เวลาทำการ <?php echo $operate_time;?></li>
					</ul>
				</div>
				
				<div class="one_half column_last">
				<br/><br/>
				<img src="<?php echo site_url();?>assets/images/logomini2.png" alt="Carpluz Logo Mini" />
				</div>
				
				
								
			</div>
			<!-- End Start Contact -->
			
			
			
			
			
			
			
			<div class="bottom_shadow"></div>
		</div>
		<!-- End Pages -->
		
		<div class="clear"></div>
	</section>
	
	<!-- Start Footer -->
	<footer class="container">
		<p>PacharaStudio &copy; 2013. All Rights Reserved.</p>
		
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', '<?php echo $google;?>
		']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();


		  				
		</script>
		
		<!-- Time Picker Runing Script -->
		<script type="text/javascript" src="<?php echo site_url();?>assets/js/timepicker/timepicker_main.js"></script>
		

		
		
	</footer>
	<!-- End Footer -->
	
	</div>
	<!-- End Wrapper -->

</body>
</html>