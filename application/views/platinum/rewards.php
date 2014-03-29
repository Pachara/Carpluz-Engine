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
					
					
					<li><a href="#home" >เข้าสู่ระบบ</a></li>
					<li><a href="#register">สมัครสมาชิก</a></li>
					<li><a href="#aboutcarpluz"> รู้จักคาร์พลัส แพลตตินั่ม</a></li>
										

					
					
					
					
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
			<h3>
				<span class=""> 
					<span itemprop="name">
						ยินดีต้อนรับ <span class="orange bold bigger">คุณพชร จุติแสวง</span><br/>
					</span>
						
						<br/>บัตรประชาชนเลขที่ : <span class="greenn bold">1809900089007</span>
						<br/>ใบขับขี่เลขที่ : <span class="greenn bold"> 48001594</span>
						<br/>หมายเลขโทรศัพท์ : <span class="greenn bold">0866902772&nbsp;</span>
					</span>
			</h3>
			<br/><br/>
			
			
			<div class="toggle_list platinum_menu">
					<ul>
					<li class="onlinebook"> <!-- Use class "opened" to expand a toggle on page load -->
							<div class="title">
								<h4 class="padding_left_25">จองรถออนไลน์</h4>
								<a href="<?php echo site_url();?>platinum/online_booking" class="toggle_link toggle_link_left" data-open_text="+" data-close_text="+"></a>
							</div>
							
						</li>
						<li> <!-- Use class "opened" to expand a toggle on page load -->
							<div class="title">
								<h4 class="padding_left_25">ประวัติการจองของฉัน</h4>
								<a href="<?php echo site_url();?>platinum/booking_history" class="toggle_link toggle_link_left" data-open_text="+" data-close_text="+"></a>
							</div>
							
						</li>
						<li> <!-- Use class "opened" to expand a toggle on page load -->
							<div class="title">
								<h4 class="padding_left_25">บัญชีรีวอร์ดของฉัน</h4>
								<a href="<?php echo site_url();?>platinum/rewards" class="toggle_link toggle_link_left" data-open_text="+" data-close_text="+"></a>
							</div>
							
							
						</li>
						<li> <!-- Use class "opened" to expand a toggle on page load -->
							<div class="title">
								<h4 class="padding_left_25">ข้อมูลส่วนตัวของฉัน</h4>
								<a href="<?php echo site_url();?>platinum/profile" class="toggle_link toggle_link_left" data-open_text="+" data-close_text="+"></a>
							</div>
							
							
						</li>
						<li> <!-- Use class "opened" to expand a toggle on page load -->
							<div class="title">
								<h4 class="padding_left_25">ออกจากระบบ</h4>
								<a href="javascript:;" class="toggle_link toggle_link_left" data-open_text="+" data-close_text="+"></a>
							</div>
							
							
						</li>
					</ul>
				</div>

			
							
				
			
			
				
								
				
					
			
				</div>
		<!-- End App Info -->		
		
		<!-- Start Pages -->
		<div id="pages">
			<div class="top_shadow"></div>
				
			
			
			<!-- Start Start Contact -->
			<div id="home" class="page">
				
				<h2 class="margin_bottom_30">เข้าสู่ระบบ คาร์พลัส แพลตตินั่ม</h2>
				
				
				<div id="login_panel" class="login_page">
				
				
				
				<form action="#" method="post" class="GoogleLikeForms GLF-green" > 
					<div class="GLF_search">
							<h3>หมายเลขโทรศัพท์</h3>
							<h4>กรุณาระบุหมายเลขโทรศัพท์ 10 หลัก เพื่อขอรหัสผ่านแบบใช้ครั้งเดียว</h4>
                            <input type="Text" class="searchINPUT" value="" />
                            <input type="Submit" value="Get Password" class="searchBTN" />
                        </div>
                        <div class="GLF_search">
                        	<h3>รหัสผ่าน</h3>
							<h4>กรุณาใส่รหัสผ่านที่ได้รับทาง SMS เพื่อเข้าสู่ระบบ <br>รหัสผ่านของคุณมีอายุการใช้งาน 15 นาที</h4>
                            <input type="Text" class="searchINPUT" value="" />
                            <input type="Submit" value="Login" class="searchBTN" />
                        </div>
                </form>
				
				
				
				</div>
				
				
				<br/><br/><br/>
				
				
				<h3 class="margin_bottom_20 padding_left_0">คาร์พลัส - อันดับ 1 ของผู้ให้บริการรถเช่าแบบขับเอง</h3>
				
				<div class="one_half">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</div>

				<div class="one_half column_last">
					<blockquote>
					  <p>This is a blockquote style example. It's cool.</p>
					  <cite>Some Dude, Some Website</cite>
					</blockquote>
				</div>
				
				

				
				
				<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
					
			</div>
			<!-- End Start Contact -->
			
			<!-- Start Register -->
			<div id="register" class="page">
				
				<h2 class="margin_bottom_30">สมัครสมาชิก - คาร์พลัส แพลตตินั่ม</h2>
				
				
				<h3 class="margin_bottom_15 padding_left_0">สำหรับลูกค้าที่เคยใช้บริการกับเรา</h3>
				
				<div class="full ">
				<p>สำหรับลูกค้าที่เคยใช้บริการรถเช่าส่วนบุคคลกับเรา สามารถเข้าสู่ระบบคาร์พลัส แพลตติได้โดยไปที่หน้า <a href="#home">เข้าสู่ระบบ</a> โดยให้ท่านกรอกข้อมูลหมายเลขโทรศัพท์มือถือจำนวน 10 หลัก และรอรับรหัสผ่านทาง SMS จากนั้นให้กรอกรหัสผ่านที่ได้รับลงในช่องรหัสผ่านและกดปุ่ม <a href="#home">Login</a> ระบบจะนำท่านเข้าสู้ คาร์พลัส แพรตตินั่ม เพื่อทำการตรวจสอบข้อมูลการเช่ารถ, แต้มสะสม และสิทธิประโยชน์อื่นๆอีกมากมาย</p>		
				</div>		
				
				<h3 class="margin_bottom_15 padding_left_0">สำหรับลูกค้าใหม่</h3>
				
				<div class="full ">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>		
				</div>		
				
								
				
				<h3 class="margin_bottom_20 padding_left_0">คาร์พลัส - อันดับ 1 ของผู้ให้บริการรถเช่าแบบขับเอง</h3>
				
				<div class="one_half">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</div>

				<div class="one_half column_last">
					<blockquote>
					  <p>This is a blockquote style example. It's cool.</p>
					  <cite>Some Dude, Some Website</cite>
					</blockquote>
				</div>
				
				

				
				
				<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
					
			</div>
			<!-- End Register -->			
			
			
			
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
	</footer>
	<!-- End Footer -->
	
	</div>
	<!-- End Wrapper -->

</body>
</html>