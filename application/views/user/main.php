

<html>

<head>
        <meta charset="UTF-8">
        <title>Cloud Store</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- Bootstrap 3.3.4 -->
        <?php echo link_tag('bootstrap/css/bootstrap.min.css'); ?>
        <!-- Font Awesome Icons -->
        <?php echo link_tag('bootstrap/css/font-awesome.min.css'); ?>
        <!-- Theme style -->
        <?php echo link_tag('dist/css/AdminLTE.min.css'); ?>
        <!-- iCheck -->
        <?php echo link_tag('plugins/iCheck/square/blue.css'); ?>

        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="https://lh5.googleusercontent.com/aJEug-WmlNueB7ec3tN1JJfY7rcAn7IfuUvonjSrYnrqls8Pcml65OZrqIm07mQ77dRsTK7P_OonpwZdFekSLxUMKz3W58xnQJy2Mrgr49sF5ehcABwx2oyZBwAvCY2adfnsMN9o" /> <!--ใช้ทำไอคอนเว็บ --> 

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
     
  


    <style type="text/css">
        body { background: url(assets/bglight.png); }
        .hero-unit { background-color: #fff; }
        .center { display: block; margin: 0 auto; }
        /** cssmanu **/
        /*
-----------------------------------
    Code snippet by @maridlcrmn
    Credits images: www.unsplash.com
-----------------------------------
*/

#thumbnail-preview-indicators {
  position: relative;
  overflow: hidden;
}
#thumbnail-preview-indicators .slides .slide-1, 
#thumbnail-preview-indicators .slides .slide-2,
#thumbnail-preview-indicators .slides .slide-3 {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
    #thumbnail-preview-indicators,
    #thumbnail-preview-indicators .slides,
    #thumbnail-preview-indicators .slides .slide-1, 
    #thumbnail-preview-indicators .slides .slide-2,
    #thumbnail-preview-indicators .slides .slide-3 {
      height: 480px;
    }
#thumbnail-preview-indicators .slides .slide-1 {
  background-image: url(<?php echo base_url(); ?>pictures/1.jpg); 
}
#thumbnail-preview-indicators .slides .slide-2 {
  background-image: url(<?php echo base_url(); ?>pictures/2.jpg);
}
#thumbnail-preview-indicators .slides .slide-3 {
  background-image: url(<?php echo base_url(); ?>pictures/3.jpg);
}
#thumbnail-preview-indicators .carousel-inner .item .carousel-caption {
  top: 20%;
  bottom: inherit;
}
#thumbnail-preview-indicators .carousel-indicators li,
#thumbnail-preview-indicators .carousel-indicators li.active {
  position: relative;
  width: 100px;
  height: 8px;  
}
#thumbnail-preview-indicators .carousel-indicators li > .thumbnail {
  position: absolute;
  top: 0;
  width: 100px;
  display: none;
  opacity: 0;
  left: 50%;
  margin-top: -80px;
  margin-left: -50px;
}
#thumbnail-preview-indicators .carousel-indicators li:hover > .thumbnail,
#thumbnail-preview-indicators .carousel-indicators li.active > .thumbnail {
  display: block;
  opacity: .8;
}
#thumbnail-preview-indicators .carousel-indicators li.active > .thumbnail:hover{
  opacity: 1;
}
@media screen and (max-width : 480px) {    
    #thumbnail-preview-indicators .carousel-indicators li,
    #thumbnail-preview-indicators .carousel-indicators li.active {
      width: 50px;
      height: 8px;
      position: relative;
    }
    #thumbnail-preview-indicators .carousel-indicators li > .thumbnail {
       width: 50px;
       left: 50%;
       margin-top: -50px;
       margin-left: -25px;
    }
}
            /** cssbody **/
            body{padding-top:20px}

.pricing-table .plan {
  margin-left:0px;
  border-radius: 5px;
  text-align: center;
  background-color: #f3f3f3;
  -moz-box-shadow: 0 0 6px 2px #b0b2ab;
  -webkit-box-shadow: 0 0 6px 2px #b0b2ab;
  box-shadow: 0 0 6px 2px #b0b2ab;
}
 
 .plan:hover {
  background-color: #fff;
  -moz-box-shadow: 0 0 12px 3px #b0b2ab;
  -webkit-box-shadow: 0 0 12px 3px #b0b2ab;
  box-shadow: 0 0 12px 3px #b0b2ab;
}
 
 .plan {
  padding: 20px;
  margin-left:0px;
  color: #ff;
  background-color: #5e5f59;
  -moz-border-radius: 5px 5px 0 0;
  -webkit-border-radius: 5px 5px 0 0;
  border-radius: 5px 5px 0 0;
}
  
.plan-name-bronze {
  padding: 20px;
  color: #fff;
  background-color: #000000;
  -moz-border-radius: 5px 5px 0 0;
  -webkit-border-radius: 5px 5px 0 0;
  border-radius: 5px 5px 0 0;
 }
  
.plan-name-silver {
  padding: 20px;
  color: #fff;
  background-color: #000000;
  -moz-border-radius: 5px 5px 0 0;
  -webkit-border-radius: 5px 5px 0 0;
  border-radius: 5px 5px 0 0;
 }
  
.plan-name-gold {
  padding: 20px;
  color: #fff;
  background-color: #000000;
  -moz-border-radius: 5px 5px 0 0;
  -webkit-border-radius: 5px 5px 0 0;
  border-radius: 5px 5px 0 0;
  } 
  
.pricing-table-bronze  {
  padding: 20px;
  color: #fff;
  background-color: #f89406;
  -moz-border-radius: 5px 5px 0 0;
  -webkit-border-radius: 5px 5px 0 0;
  border-radius: 5px 5px 0 0;
}
  
.pricing-table .plan .plan-name span {
  font-size: 20px;
}
 
.pricing-table .plan ul {
  list-style: none;
  margin: 0;
  -moz-border-radius: 0 0 5px 5px;
  -webkit-border-radius: 0 0 5px 5px;
  border-radius: 0 0 5px 5px;
}
 
.pricing-table .plan ul li.plan-feature {
  padding: 15px 10px;
  border-top: 1px solid #c5c8c0;
  margin-right: 35px;
}
 
.pricing-three-column {
  margin: 0 auto;
  width: 80%;
}
 
.pricing-variable-height .plan {
  float: none;
  margin-left: 2%;
  vertical-align: bottom;
  display: inline-block;
  zoom:1;
  *display:inline;
}
 
.plan-mouseover .plan-name {
  background-color: #4e9a06 !important;
}
 
.btn-plan-select {
  padding: 8px 25px;
  font-size: 18px;
}


    </style>
</head>
<body>
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
          <a class="navbar-brand text-uppercase" href="http://stocker2.esy.es">Cloud Store <span class="label label-success text-capitalize">Free1GB</span></a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://stocker2.esy.es/user/about">About</a></li>
                <li><a href="<?php echo site_url('onhandprint'); ?>">Example Store</a></li>
                <li>
                <!--
              <a class="btn btn-success btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse2" aria-expanded="false" aria-controls="nav-collapse2">Sign in</a>
              -->
                </li>
                <li>
              <a class="btn btn-default btn-outline btn-circle collapsed"   href="<?php echo base_url('user/register') ?>" >Sign Up</a>
                </li>
          </ul>
          <!--
          <div class="collapse nav navbar-nav nav-collapse slide-down" id="nav-collapse2">
          -->
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
            <!--  
        </div>
        -->
              <ul>
                
                <?=$this->session->flashdata('msgerr')?>
            </ul>
      </div>
    </nav>
     <!-- nevberend --> 
     <!-- menu-->
     <div id="thumbnail-preview-indicators" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#thumbnail-preview-indicators" data-slide-to="0" class="active">
              <div class="thumbnail">
                <img class="img-responsive" src="https://s3.amazonaws.com/ooomf-com-files/wdXqHcTwSTmLuKOGz92L_Landscape.jpg">
              </div>
            </li>
            <li data-target="#thumbnail-preview-indicators" data-slide-to="1">
            <div class="thumbnail">
                <img class="img-responsive" src="https://s3.amazonaws.com/ooomf-com-files/tU3ptNgGSP6U2fE67Gvy_SYDNEY-162.jpg">
              </div>
            </li>
            <li data-target="#thumbnail-preview-indicators" data-slide-to="2">
            <div class="thumbnail">
                <img class="img-responsive" src="https://s3.amazonaws.com/ooomf-com-files/mtNrf7oxS4uSxTzMBWfQ_DSC_0043.jpg">
              </div>
            </li>
          </ol>
          <div class="carousel-inner">
            <div class="item slides active">
              <div class="slide-1"></div>
              <div class="container">
                <div class="carousel-caption">
                  <h1>New Cloud Store</h1>
                  <p>คุณสามารถสร้างคลังสินค้าไว้บนเมฆได้ ไม่ว่าคุณจะอยู่ที่ไหนในโลก</p>
                  <p><a class="btn btn-lg btn-primary" href="<?php echo base_url('user/register') ?>" role="button">Sign up today</a></p>
                </div>
              </div>
            </div>
            <div class="item slides">
              <div class="slide-2"></div>
              <div class="container">
                <div class="carousel-caption">
                  <h1>The new merchandising system</h1>
                  <p>การขายสินค้าจะง่ายและสะดวกสบายมากขึ้นด้วยระบบการขายสินค้าและโฆษณาแบบใหม่</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
              </div>
            </div>
            <div class="item slides">
              <div class="slide-3"></div>
              <div class="container">
                <div class="carousel-caption">
                  <h1>Presents Cloud Store</h1>
                  <p>คุณสามารถเข้าเยี่ยมชมคลังสินค้าที่ไร้ขีดจำกัดได้ Now</p>
                  <p><a class="btn btn-lg btn-primary" href="<?php echo site_url('onhandprint'); ?>" role="button">Example Store</a></p>
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#thumbnail-preview-indicators" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          <a class="right carousel-control" href="#thumbnail-preview-indicators" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div> 


     <!-- endmenu -->
     <!--body-->   
     <p> <hr><br><br>
     <b><h1 align=center>Cloud Store Package</h1></b>
     <!doctype html>
<html><head></head><body><div class="container">
    <div class="pricing-table pricing-three-column row">
        <div class="plan col-sm-4 col-lg-4">
          <div class="plan-name-bronze">
            <h2>Free</h2>
            <span>1 GB</span>
          </div>
          <ul>
            <li class="plan-feature">1GB Disk Space</li>
            <li class="plan-feature">ฟรีอีเมล์ไม่จำกัด</li>
            <li class="plan-feature">สำรองข้อมูลฟรี</li>
            <li class="plan-feature"><a href="#" class="btn btn-primary btn-plan-select"><i class="icon-white icon-ok"></i> Select</a></li>
          </ul>
        </div>
        <div style="z-index:55;" class="plan col-sm-4 col-lg-4">
          <div class="plan-name-silver">
            <h2>Premium <span class="badge badge-warning">Popular</span></h2>
            <span><strike>฿300</strike>   <font color="red">฿150 - <span class="label label-warning">Sale</span></font></span>
          </div>
          <ul>
            <li class="plan-feature">5TB Disk Space</li>
            <li class="plan-feature">ฟรีอีเมล์ไม่จำกัด</li>
            <li class="plan-feature">ฟรี Datamining</li>
            <li class="plan-feature"><a href="#" class="btn btn-primary btn-plan-select"><i class="icon-white icon-ok"></i> Select</a></li>
          </ul>
        </div>
        <div class="plan col-sm-4 col-lg-4">
          <div class="plan-name-gold">
            <h2>VIP</h2>
            <span>฿1000 / Month</span>
          </div>
          <ul>
            <li class="plan-feature">ไม่จำกัด พื้นที่</li>
            <li class="plan-feature">10TB Disk Space</li>
            <li class="plan-feature">ฟรี Datamining</li>
            
            <li class="plan-feature"><a href="#" class="btn btn-primary btn-plan-select"><i class="icon-white icon-ok"></i> Select</a></li>
          </ul>
        </div>
    </div>
</div></body></html>
     <!--endbody-->
     <p> <hr><br><br>
    <footer class="footer text-center">
        <div class="container">
            <small>© Copyright 2017. by <a href="https://www.facebook.com/mrjo.chaiyaporn">@Chaiyaporn</a></small>
        </div>
    </footer>
</div>
</body>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>



</html>


    </body></html>
