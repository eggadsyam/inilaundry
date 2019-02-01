<!DOCTYPE html>
<html lang="en">
  <head>
    <title>iniLaundry</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133422508-1');
</script>

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tema/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tema/css/animate.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tema/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tema/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tema/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tema/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tema/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tema/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tema/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tema/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tema/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tema/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tema/css/style.css">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/tema/images/ico.png">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php"><img src="<?php echo base_url(); ?>assets/tema/images/banner.png" height="60px" alt=""></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">X</a></li>
	          <li class="nav-item"><a href="masuk_customer.php" class="nav-link"></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('<?php echo base_url(); ?>assets/tema/images/bg_2_new.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters js-fullheight slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-2"></div>
          <div class="col-xl-6 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> <!--<span class="number" data-number="850000"></span>--> </p>
            <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><br><span></span></h1>
          </div>
          <div class="col-xl-4">
            <div class="col-md-12 mx-auto">
      <div id="first">
        <div class="myform form ">
           <div class="logo mb-3">
             <div class="col-md-12 text-center">
              <h1>Masuk</h1>
             </div>
          </div>
                   <form action="PMasuk" method="post">
                           <div class="form-group">
                              <label for="exampleInputEmail1">Username</label>
                              <input type="text" name="username"  class="form-control" id="username" placeholder="Username">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" class="form-control" placeholder="Password">
                           </div>
                           <div class="form-group">
                              <!--<p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>-->
                           </div>
                           <div class="col-md-12 text-center ">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" name="masuk">Login</button>
                           </div>
                           <!--<div class="col-md-12 ">
                              <div class="login-or">
                                 <hr class="hr-or">
                                 <span class="span-or">atau</span>
                              </div>
                           </div>
                           <div class="col-md-12 mb-3">
                              <p class="text-center">
                                 <a href="javascript:void();" class="google btn mybtn"><i class="fa fa-google-plus">
                                 </i> Signup using Google
                                 </a>
                              </p>
                           </div>-->
                           <div class="form-group">
                              <p class="text-center">Belum punya akun? <a href="Daftar" id="signup">Daftar</a></p>
                           </div>
                        </form>
                 
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

    
  

  <!-- loader -->
  <!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->


  <script src="<?php echo base_url(); ?>assets/tema/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/tema/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/tema/js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/tema/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/tema/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url(); ?>assets/tema/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/tema/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/tema/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/tema/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/tema/js/aos.js"></script>
  <script src="<?php echo base_url(); ?>assets/tema/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/tema/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url(); ?>assets/tema/js/jquery.timepicker.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/tema/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url(); ?>assets/tema/js/google-map.js"></script>
  <script src="<?php echo base_url(); ?>assets/tema/js/main.js"></script>
    
  </body>
</html>