<html lang="<?php echo $lang;?>">
<head>
    <title>Administrator - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"><!-- Le styles -->
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo site_url();?>assets/js/html5.js"></script>
    <![endif]-->
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>assets/css/admin.css">
    <link rel="stylesheet" href="<?php echo site_url();?>assets/css/pure.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>assets/purecss/css/button.css"><!--[if lte IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>assets/purecss/css/layouts/side-menu-old-ie.css" />
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>assets/purecss/css/layouts/side-menu.css"><!--<![endif]-->
    <!-- Javascript -->
    <script type="text/javascript" src="<?php echo site_url();?>assets/js/jquery-1.7.1.min.js"></script>
    
    <!- Time Picker -!>
	
	<script type="text/javascript" src="<?php echo site_url();?>assets/js/timepicker/jquery.timepicker.js"></script>
	<script type="text/javascript" src="<?php echo site_url();?>assets/js/timepicker/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="<?php echo site_url();?>assets/js/timepicker/site.js"></script>
	<script type="text/javascript" src="<?php echo site_url();?>assets/js/timepicker/jquery.datepair.js"></script>
	<link rel="stylesheet" href="<?php echo site_url();?>assets/css/timepicker/jquery.timepicker.css" />
	<link rel="stylesheet" href="<?php echo site_url();?>assets/css/timepicker/bootstrap-datepicker.css" />
    
    
    <!-- Start Ajax Javascript -->
	
        <script type="text/javascript">
          
            var controller = 'admin';
            var base_url = '<?php echo site_url(); //you have to load the "url_helper" to use this function ?>';
            
            
            
            
            
            function place_charge1(a){
            	if(a == "ในเมือง"){
	            	$("#get_placex").removeAttr('disabled');
            	}else{
	            	$("#get_placex").attr('disabled','disabled');
            	}            
            }
            
            function place_charge2(a){
            	if(a == "ในเมือง"){
	            	$("#return_placex").removeAttr('disabled');
            	}else{
	            	$("#return_placex").attr('disabled','disabled');
            	}            
            }
           
            
            function booking_form_submit(){
            
            	a = $("#booking_form").serializeObject();
            	
            	a.phone_number = document.getElementById('phone_number').value;
            	            	
            	
            	$.ajax({
                    'url' : base_url  + controller + '/verify_booking',
                    'type' : 'POST', //the way you want to send data to your URL
                    'data' : a,
                    'success' : function(data){ //probably this request will return anything, it'll be put in var "data"             
  
                        var container = $('#booking_detail');
                        container.html(data);
                                                 
                                 
                    }
                });
            	
            	
            	
            	
            	
	            
	            event.preventDefault();
	            
            }
            
            
            
            $.fn.serializeObject = function()
			{
			    var o = {};
			    var a = this.serializeArray();
			    $.each(a, function() {
			        if (o[this.name] !== undefined) {
			            if (!o[this.name].push) {
			                o[this.name] = [o[this.name]];
			            }
			            o[this.name].push(this.value || '');
			        } else {
			            o[this.name] = this.value || '';
			        }
			    });
			    return o;
			};
            
            function reset_member(){
	            $("#reset_button").addClass("hidden");
	            $("#check_button").removeClass("hidden");
	            $("#member_id").val('');
	            $("#reward_point").val('');
	            $("#nickname").val('');
	            $("#phone_number").removeAttr('readonly','readonly');     
	            $("#reward_point").attr("placeholder", "กรุณาตรวจสอบสมาชิก");       
	            $("#nickname").attr("placeholder", "กรุณาตรวจสอบสมาชิก");
	            $("#nickname").attr('readonly','readonly');
                $("#use_reward").attr('disabled','disabled');
                $("#use_reward").removeAttr("checked");         
            }
            
            function verify_customer_get_user_info(phone_number){   	
            	if(phone_number == ""){
	            	return false;
            	}else{
	            	$("#phone_number").attr('readonly','readonly');    	
	            	$("#check_button").addClass("hidden");
	            	$("#reset_button").removeClass("hidden"); 	
            	}

                $.ajax({
                    'url' : base_url  + controller + '/verify_customer_get_user_info/' + phone_number,
                    'type' : 'POST', //the way you want to send data to your URL
                    'data' : {'phone_number' : phone_number},
                    'dataType' : 'json',
                    'success' : function(data){ //probably this request will return anything, it'll be put in var "data"             
                        if(data.verify == 1){   	
                        	$("#nickname").attr('readonly','readonly');
                        	$("#use_reward").removeAttr('disabled');
	                        document.getElementById('nickname').value = data.nickname;
	                        document.getElementById('reward_point').value = 300; 
	                        return false;
                        }else{
	                        $("#reward_point").attr("placeholder", "ยังไม่เป็นสมาชิก");       
	                        $("#nickname").attr("placeholder", "กรุณาระบุชื่อลูกค้า");
	                        $("#nickname").removeAttr('readonly');
	                        return false;       
                        }           
                    }
                });
            }
        </script>
	<!-- End Ajax Javascript -->
    
    
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo site_url();?>assets/images/favicon.ico">
</head>

<body>
    <div id="layout">
        <!-- Menu toggle -->
        <a href="#menu" id="menuLink" class="menu-link"><!-- Hamburger icon --></a>

        <div id="menu">
            <div class="pure-menu pure-menu-open">
                <a class="pure-menu-heading" href="#">Carpluz.com</a>

                <ul>
                    <li><a href="#">Dashboard</a></li>

                    <li><a href="#">Price Check</a></li>

                    <li><a href="#">Customer List</a></li>

                    <li><a href="#">Car List</a></li>

                    <li class="menu-item-divided pure-menu-selected"><a href="#">+ New Booking</a></li>

                    <li><a href="#">+ Confirm Booking</a></li>

                    <li><a href="#">Setting</a></li>

                    <li><a href="#">Log Out</a></li>
                </ul>
            </div>
        </div>

        <div id="main">
            <div class="header">
                <h1>CARPLUZ</h1>

                <h2>Rent a car</h2>
            </div>

            <div class="content">
                <h2 class="content-subhead">+ New Booking</h2>

                <p>กรอกข้อมูลลูกค้าให้ครบถ้วน เพื่อตรวจสอบราคา และส่ง SMS ยืนยัน</p>

                <div class="pure-g">
                    <div class="pure-u-2-3">
                        <!--
            By default, grid units don't have any margin/padding.
            If you want to add these, put them in a child container.
            -->
            			
            			
            			
            			
                        <form class="pure-form pure-form-aligned" onsubmit="return false;">
                            <fieldset>
                                <legend>ข้อมูลลูกค้า</legend>

                                <div class="pure-control-group margin_bottom_1">
                                    <label for="phone_number">หมายเลขโทรศัพท์มือถือ</label> <input id="phone_number" class="font_size_80" name="phone_number" type="text" placeholder="หมายเลขโทรศัพท์" required> 
                                    
                                    <button id="check_button" class="button-success pure-button button-small" onclick="verify_customer_get_user_info(document.getElementById('phone_number').value)"> ตรวจสอบ </button>
                                    
                                    <button id="reset_button" class="button-warning pure-button button-small hidden" onclick="reset_member();"> Reset </button>
                                    
                                </div>
                                </form>
                                
                                <form id="booking_form" method="post" class="pure-form pure-form-aligned" onsubmit="booking_form_submit();">
                                
                                
                                <div class="pure-control-group margin_bottom_1">
                                    <label for="nickname">ชื่อเล่น</label> <input id="nickname" class="font_size_80" name="nickname" type="text" placeholder="กรุณาตรวจสอบสมาชิก" readonly>
                                </div>
                                                               <div class="pure-control-group margin_bottom_1">
                                    <label for="reward_point">แต้มสะสม</label> <input id="reward_point" class="font_size_80" name="reward_point" type="text" placeholder="กรุณาตรวจสอบสมาชิก" readonly>
                                </div>

                                <div class="pure-control-group margin_bottom_1">
                                    <label for="use_reward">ต้องการใช้แต้มสะสม</label> <input id="use_reward" class="font_size_80" name="use_reward" value="1" type="checkbox" disabled>
                                </div>
                                
                                <legend>ประเภทรถ</legend>
                                
                                <div class="pure-control-group margin_bottom_1">
                                    <label for="car_type">ระบุประเภทรถ</label> 
                                    <select id="car_type" class="font_size_80" name="car_type">
                                        <option value="city">
                                            City Car
                                        </option>

                                        <option value="eco">
                                            Eco Car
                                        </option>
                                        
                                        <option value="family">
                                            Family Car
                                        </option>
                                        
                                        <option value="suv">
                                            SUV Car
                                        </option>

                                        
                                    </select>
                                </div>
                                
                                
                                <legend>ข้อมูลการรับรถ</legend>

                                <div class="pure-control-group margin_bottom_1">
                                    <label for="get_province">รับรถที่จังหวัด</label> 
                                    <select id="get_province" class="font_size_80" name="get_province" onchange = "document.getElementById('return_province').value = this.value;">
                                        <option value="นครศรีธรรมราช">
                                            นครศรีธรรมราช
                                        </option>

                                        <option value="หาดใหญ่">
                                            หาดใหญ่
                                        </option>

                                        <option value="เชียงใหม่">
                                            เชียงใหม่
                                        </option>
                                    </select>
                                </div>
                                
                                <div id="datepairExample">
                                
                                <div class="pure-control-group margin_bottom_1">
                                    <label for="start_date">วันที่รับรถ</label> <input id="start_date" name="start_date" class="date start font_size_80" type="text" placeholder="วันที่รับรถ" required />
                                </div>

                                <div class="pure-control-group margin_bottom_1">
                                    <label for="start_time">เวลารับรถ</label> <input id="start_time"  name="start_time" class="time start font_size_80" type="text" placeholder="เวลารับรถ" required>
                                </div>

                                <div class="pure-control-group margin_bottom_1">
                                    <label for="get_place">สถานที่รับรถ</label> <select id="get_place" class="font_size_80" name="get_place" onchange="place_charge1(this.value);">
                                        <option value="สนามบิน">
                                            สนามบิน
                                        </option>

                                        <option value="ในเมือง">
                                            ในเมือง
                                        </option>
                                    </select>
                                </div>

                                <div class="pure-control-group margin_bottom_1">
                                    <label for="get_placex">รับรถนอกสถานที่ ระบุ</label> <input id="get_placex" class="font_size_80" name="get_placex" type="text" placeholder="สถานที่รับรถ" disabled>
                                </div><legend>ข้อมูลการคืนรถ</legend>

                                <div class="pure-control-group margin_bottom_1">
                                    <label for="return_province">คืนรถที่จังหวัด</label> <select id="return_province" class="font_size_80" name="return_province" >
                                        <option value="นครศรีธรรมราช">
                                            นครศรีธรรมราช
                                        </option>

                                        <option value="หาดใหญ่">
                                            หาดใหญ่
                                        </option>

                                        <option value="เชียงใหม่">
                                            เชียงใหม่
                                        </option>
                                    </select>
                                </div>

                                <div class="pure-control-group margin_bottom_1">
                                    <label for="end_date">วันที่คืนรถ</label> <input id="end_date" name="end_date" class="date end font_size_80" type="text" placeholder="วันที่คืนรถ" required>
                                </div>

                                <div class="pure-control-group margin_bottom_1">
                                    <label for="end_time">เวลาคืนรถ</label> <input id="end_time" name="end_time" class="time end font_size_80" type="text" placeholder="เวลาคืนรถ" required>
                                </div>
                                
                                </div> <!- End DatePair -!>	
                                
                                <div class="pure-control-group margin_bottom_1">
                                    <label for="return_place">สถานที่คืนรถ</label> <select id="return_place" class="font_size_80" name="return_place" onchange="place_charge2(this.value);">
                                        <option value="สนามบิน">
                                            สนามบิน
                                        </option>

                                        <option value="ในเมือง">
                                            ในเมือง
                                        </option>
                                    </select>
                                </div>

                                <div class="pure-control-group margin_bottom_1">
                                    <label for="return_placex">คืนรถนอกสถานที่ ระบุ</label> <input id="return_placex" class="font_size_80" name="return_placex" type="text" placeholder="สถานที่รับรถ" disabled>
                                </div>
                                
                                <legend>ข้อมูลอื่นๆ เพิ่มเติม</legend>

                                <div class="pure-control-group margin_bottom_1">
                                    <label for="additional_info">หมายเหตุ</label> 
                                    <textarea id="additional_info" name="additional_info" class="pure-input-1-2 font_size_80"></textarea>
                                </div>

                                <div class="pure-control-group margin_bottom_1">
                                    <label for="need_gps">ต้องการ GPS</label> <input id="need_gps" class="font_size_80" name="need_gps" value="1" type="checkbox">
                                </div>

                                <div class="pure-control-group margin_bottom_1">
                                    <label for="baby_seat">ต้องการ Baby Seat</label> <input id="baby_seat" class="font_size_80" name="baby_seat" value="1" type="checkbox">                                 </div>

                                <div class="pure-controls">
                                    <button type="submit" class="pure-button pure-button-primary" onclick="return validate_form();">คำนวนราคา</button>
                                </div>
                                
                                </form>
                            </fieldset>
                        
                    </div>

                    <div class="pure-u-1-3">
                        
                        <div id="booking_detail">
                        
                        
                        </div>
                                            </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Time Picker Runing Script -->
		<script type="text/javascript" src="<?php echo site_url();?>assets/js/timepicker/timepicker_main.js"></script>
</body>
</html>
