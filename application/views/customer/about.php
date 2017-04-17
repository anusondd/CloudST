<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>About</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
		<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<body>
	<!--manu-->
	<div class="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand text-uppercase" href="http://stocker2.esy.es">Cloud Store <span class="label label-success text-capitalize">Free5GB</span></a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://stocker2.esy.es/user/about">About</a></li>
                <li><a href="<?php echo site_url('onhandprint'); ?>">Example Store</a></li>
                <li>
              <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse2" aria-expanded="false" aria-controls="nav-collapse2">Sign in</a>
                </li>
                <li>
              <a class="btn btn-default btn-outline btn-circle collapsed"   href="<?php echo base_url('user/register') ?>" >Sign Up</a>
                </li>
          </ul>
          <div class="collapse nav navbar-nav nav-collapse slide-down" id="nav-collapse2">
            <form class="navbar-form navbar-right form-inline" role="form" action="<?php echo base_url('user/validlogin') ?>" method="post">
              <div class="form-group">
                <label class="sr-only" for="Username">Username</label>
                <input type="text" placeholder="Username" class="form-control" name="username">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
              <div class="form-group">
                <label class="sr-only" for="Password">Password</label>
                <input type="password" placeholder="Password" class="form-control" name="password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <button type="submit" class="btn btn-success">Sign in</button>
            </form>
            </ul>
            
        </div>
        <ul>
                
                <?=$this->session->flashdata('msgerr')?>
            </ul>
      </div>
      </nav>

	<!--endmanu-->
	<!--map-->

<!DOCTYPE html>
<html lang="th">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>About</title>
	<base href="http://uk.zyro.com/data/s/t/stocker2.esy.es/preview/" />
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.39" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1485855456" rel="stylesheet" type="text/css" />
	<link href="css/3.css?ts=1485855456" rel="stylesheet" type="text/css" />
	
	<!--<script type="text/javascript">var currLang = '';</script>		-->
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
</head>

<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance42" class="wb_element" style=" line-height: normal;"><h2 class="wb-stl-heading2"><span class="wb-stl-highlight">ค้นหาเรา</span></h2>
<p class="wb-stl-normal"> </p>
<p class="wb-stl-normal">คุณสามารถหาข้อมูลล่าสุดเกี่ยวกับเราได้ที่หน้านี้ ทีมงานของเรามุ่งมั่นที่จะพัฒนาและเติบโตอย่างรวดเร็ว ภารกิจของเราคือการให้วิธีการแก้ไขปัญหาท่ีดีที่สุดที่จะสามารถช่วยทุกๆคนได้ หากคุณต้องการติดต่อเรา กรุณากรอกแบบฟอร์มการติดต่อบนเว็บไซต์ของเรา ขอให้มีวันที่ดี...</p></div>
<div id="wb_element_instance43" class="wb_element" style=" line-height: normal;"><h5 class="wb-stl-subtitle">About</h5></div>
<div id="wb_element_instance44" class="wb_element"><form class="wb_form wb_mob_form" method="post">
<input type="hidden" name="wb_form_id" value="8c500833"><textarea name="message" rows="3" cols="20" class="hpc"></textarea><table><tr><th class="wb-stl-normal">ชื่อ&nbsp;&nbsp;</th><td>
<input type="hidden" name="wb_input_0" value="ชื่อ">
<input class="form-control form-field" type="text" value="" name="wb_input_0"></td></tr><tr><th class="wb-stl-normal">อีเมล&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_1" value="อีเมล">
<input class="form-control form-field" type="text" value="" name="wb_input_1"></td></tr><tr class="area-row"><th class="wb-stl-normal">ข้อความ&nbsp;&nbsp;</th><td>
<input type="hidden" name="wb_input_2" value="ข้อความ"><textarea class="form-control form-field form-area-field" rows="3" cols="20" name="wb_input_2"></textarea></td></tr><tr class="form-footer"><td colspan="2"><button type="submit" class="btn btn-default">ส่ง</button></td></tr></table></form><script type="text/javascript"></script></div>
<div id="wb_element_instance45" class="wb_element"><div></div></div>
<div id="wb_element_instance46" class="wb_element">
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyCSWLVHi8ojRT8oJdhJPYNwTsjUZMZQyh4&amp;sensor=false&amp;libraries=places&amp;region=TH&amp;language=th_TH"></script>
<script type="text/javascript">
				function initialize() {
					if (window.google) {
						var div = document.getElementById("wb_element_instance46");
						var ll = new google.maps.LatLng(17.398253, 102.803204);
						var map = new google.maps.Map(div, {
							zoom: 16,
							center: ll,
							mapTypeId: "roadmap"
						});
						
						var marker = new google.maps.Marker({
							position: ll,
							clickable: false,
							map: map
						});
					}
				}
				google.maps.event.addDomListener(window, "load", initialize); 
			</script>
			<div id="wb_element_instance47" class="wb_element" style=" line-height: normal;">
			<p class="wb-stl-normal">นายจีรวุฒิ บัวย้อย</p>
			<p class="wb-stl-normal">571100129</p>
			<p class="wb-stl-normal">ตำแหน่งโปรเจคเมเนเจอร์</p>
			<p class="wb-stl-normal">12000</p>
			<p class="wb-stl-normal">ประเทศไทย</p>
			</div>


			<div> <!-- ไว้ทำแมพ google -->


				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1725.2614248314112!2d100.61620041955354!3d13.894104791900554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeefe9b5160df7293!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LiZ4Lit4Lij4LmM4LiX4LiB4Lij4Li44LiH4LmA4LiX4LieIOC4p-C4tOC4l-C4ouC4suC5gOC4guC4leC4quC4sOC4nuC4suC4meC5g-C4q-C4oeC5iA!5e0!3m2!1sth!2sth!4v1485877019602" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<!--><div id="wb_element_instance47" class="wb_element" style=" line-height: normal;">
			<p class="wb-stl-normal">โทรศัพท์ 0-2575-1034 โทรสาร 0-2575-1038</p>
			<p class="wb-stl-normal">PMM</p>
			<p class="wb-stl-normal">ปทุมธานี</p>
			<p class="wb-stl-normal">12000</p>
			<p class="wb-stl-normal">ประเทศไทย</p>
			</div>
			<br/><div id="wb_element_instance47" class="wb_element" style=" line-height: normal;">
			<p class="wb-stl-normal">โทรศัพท์ 0-2575-1034 โทรสาร 0-2575-1038</p>
			<p class="wb-stl-normal">PMM</p>
			<p class="wb-stl-normal">ปทุมธานี</p>
			<p class="wb-stl-normal">12000</p>
			<p class="wb-stl-normal">ประเทศไทย</p>
			</div></br>
			<br>
			<div id="wb_element_instance47" class="wb_element" style=" line-height: normal;">
			<p class="wb-stl-normal">โทรศัพท์ 0-2575-1034 โทรสาร 0-2575-1038</p>
			<p class="wb-stl-normal">PMM</p>
			<p class="wb-stl-normal">ปทุมธานี</p>
			<p class="wb-stl-normal">12000</p>
			<p class="wb-stl-normal">ประเทศไทย</p>
			</div></br>
			<br>
			<div id="wb_element_instance47" class="wb_element" style=" line-height: normal;">
			<p class="wb-stl-normal">โทรศัพท์ 0-2575-1034 โทรสาร 0-2575-1038</p>
			<p class="wb-stl-normal">PMM</p>
			<p class="wb-stl-normal">ปทุมธานี</p>
			<p class="wb-stl-normal">12000</p>
			<p class="wb-stl-normal">ประเทศไทย</p>
			</div></br>-->
			<div id="wb_element_instance48" class="wb_element" style="width: 100%;">
				<!--	 <script type="text/javascript">
				$(function() {
				$("#wb_element_instance48").hide();
				});
			</script>-->
						</div>
<div class="vbox wb_container" id="wb_footer">
	
<!--<div id="wb_element_instance41" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2017 <a href="http://stocker2.esy.es/user/login">stocker2.esy.es</a></p></div></div><div class="wb_sbg"></div></div></body> -->
</html>

	<!--endmap-->
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>