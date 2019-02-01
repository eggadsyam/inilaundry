<!DOCTYPE html>
<html lang="en">
  <head>
    <title>iniLaundry</title>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133422508-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133422508-1');
</script>

    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item">
              <?php 
                error_reporting(0);
                session_start();
                if (isset($_SESSION['username'])) {
                echo '<a href="Logout" class="nav-link">Logout</a>';
                } else {
                # code...
                 echo '<a href="Masuk" class="nav-link">Masuk</a>';
                } ?>
            </li>
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
          <div class="col-xl-8 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> <!--<span class="number" data-number="850000"></span>--> </p>
            <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><br><span>Cari Info Tempat Cuci kiloan, satuan dan lainnya?</span></h1>
          <!--<br><br><br><br><br><br><br><br><br>-->
            <div class="ftco-search">
              <div class="row">
                <div class="col-md-12 nav-link-wrap">
                  <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Cari dengan nama</a>

                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Cari dengan peta</a>

                  </div>
                </div>
                <div class="col-md-12 tab-wrap">
                  
                  <div class="tab-content p-4" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                      <form action="Cari" class="search-job" method="post">
                        <div class="row">
                          <div class="col-md-10">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-map-marker"></span></div>
                                <input type="text" name="nama_tempat" class="form-control" placeholder="Masukan nama tempat atau lokasi">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <div class="form-field">
                                <input type="submit" value="Cari" name="btn_cari" class="form-control btn btn-primary">
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                      <form action="Cari2" class="search-job" method="post">
                        <div class="row">
                          <div class="col-md-10">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-map-marker"></span></div>
                                <input type="text" name="peta_tempat" class="form-control" placeholder="Masukan nama tempat atau lokasi">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <div class="form-field">
                                <input type="submit" value="Cari" name="btn_cari" class="form-control btn btn-primary">
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<br><br>

        <div class="container">
            <div class="row justify-content-left mb-5 pb-3">
              <div class="col-md-7 heading-section text-left ftco-animate">
                <!--<span class="subheading"></span>-->
                <h2><span>Rekomendasi</span> Tempat </h2>
              </div>
            </div>
            <div class="row d-flex">
<?php
      //mematikan error reporting
      error_reporting(0);
      //include file koneksi ke database
      
      //error_reporting(0);
      $host = "localhost";  //nama host
      $user = "root"; //username phpMyAdmin
      $pass = ""; //password phpMyAdmin
      $name = "2932517_inilaundry"; //nama database

      $koneksi = mysqli_connect($host, $user, $pass, $name);// or die("Koneksi ke database gagal!");

      //mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
    

      $query = mysqli_query($koneksi,"SELECT * FROM laundry ORDER BY id_laundry ASC LIMIT 6");// or die(mysql_error());

      if(mysqli_num_rows($query) == 0){ //ini artinya jika data hasil query di atas kosong
      echo 'Tidak ada data!';
      }else{  //else ini artinya jika data hasil query ada (data diu database tidak kosong)
        //jika data tidak kosong, maka akan melakukan perulangan while
        $no = 1;  //membuat variabel $no untuk membuat nomor urut
        while($data = mysqli_fetch_assoc($query)){  //perulangan while dg membuat variabel $data 
?>
              <div class="col-xs-6 col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                  <a href="<?php echo 'detail_laundry_1.php?id='.$data['id_laundry'].''?>" class="block-20" style="background-image: url('<?php echo "assets/tema/images/".$data['foto'].""?>'); width: 350px; ">
                  </a>
                  <div class="text mt-3">
                    <!--<div class="meta mb-2"><img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" alt="User profile picture">
                      <div><a href="#">December 2, 2018</a></div>
                      <div><a href="#">Admin</a></div>
                      <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                    </div>-->
                    <h3 class="heading"><a href="<?php echo 'Detail.php?id='.$data['id_laundry'].''?>"><?php echo ''.$data['nama_laundry'].''?></a></h3>
                   <p><?php echo ''.$data['alamat'].''?></p>
                  </div>
                </div>
              </div>       
                      <?php
          $no++;  //menambah jumlah nomor urut setiap row       
        }
      }
    ?>
            </div>
      
            <!--<div class="row justify-content-left mb-5 pb-3">
                <div class="col-md-7 heading-section text-left ftco-animate">
                  <span class="subheading"></span>
                  <h2><span><a href="">+ Tampilkan lebih banyak</a></span></h2>
                </div>
              </div>-->
            </div>


    <section class="ftco-section ftco-counter">
        <div class="container">
            <div class="row justify-content-left mb-5 pb-3">
                <div class="col-md-7 heading-section text-left ftco-animate">
                  <!--<span class="subheading"></span>-->
                  <h2><span>Tentang</span> IniLaundry</h2>
                </div>
              </div>
            <div class="row d-flex">
              <div class="col-md-2 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                  <div class="icon"><span class=""></span></div>
                  <div class="media-body">
                    <h3 class="heading mb-3"></h3>
                    <p></p>
                  </div>
                </div>      
              </div>
              <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                  <div class="icon"><span class="oi oi-map"></span></div>
                  <div class="media-body">
                    <h3 class="heading mb-3"></h3>
                    <p>Mencari tempat laundry dengan peta.</p>
                  </div>
                </div>    
              </div>
              <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                  <div class="icon"><span class="oi oi-document"></span></div>
                  <div class="media-body">
                    <h3 class="heading mb-3"></h3>
                    <p>Memberikan informasi tentang jasa laundry</p>
                  </div>
                </div>      
              </div>
              <div class="col-md-2 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                  <div class="icon"><span class=""></span></div>
                  <div class="media-body">
                    <h3 class="heading mb-3"></h3>
                    <p></p>
                  </div>
                </div>      
              </div>
            </div>
          </div>      
    </section>
  
    
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <!--<div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Employers</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Register</a></li>
                <li><a href="#" class="py-2 d-block">Post a Job</a></li>
                <li><a href="#" class="py-2 d-block">Advance Skill Search</a></li>
                <li><a href="#" class="py-2 d-block">Recruiting Service</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Faq</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Workers</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Register</a></li>
                <li><a href="#" class="py-2 d-block">Post Your Skills</a></li>
                <li><a href="#" class="py-2 d-block">Job Search</a></li>
                <li><a href="#" class="py-2 d-block">Emploer Search</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>-->
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

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