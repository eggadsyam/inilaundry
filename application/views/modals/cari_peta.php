<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IniLaundry</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133422508-1');
</script>
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/tema/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/tema/css/prettyPhoto.css" rel="stylesheet"> 
    <link href="<?php echo base_url(); ?>assets/tema/css/font-awesome.min.css" rel="stylesheet"> 
    <link href="<?php echo base_url(); ?>assets/tema/css/animate.css" rel="stylesheet"> 
    <link href="<?php echo base_url(); ?>assets/tema/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/tema/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tema/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/tema/css/animate.css">
    
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
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-asuol" id="ftco-navbar">
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
    <hr>
<?php
  if(isset($_POST['btn_cari'])){
    error_reporting(0);
      $host = "localhost";  //nama host
      $user = "root"; //username phpMyAdmin
      $pass = ""; //password phpMyAdmin
      $name = "2932517_inilaundry"; //nama database
      $koneksi = mysqli_connect($host, $user, $pass, $name);// or die("Koneksi ke database gagal!");
    $peta_tempat= mysqli_real_escape_string($koneksi, $_POST['peta_tempat']);  
?>
    
<div class="container">
            <div class="row justify-content-left mb-5 pb-3">
              <div class="col-md-12 heading-section text-left ftco-animate">
                <!--<span class="subheading"></span>-->
                <form action="cari_peta.php" method="post">
                <h2><span>Ditemukan hasil</span> <?php echo "$peta_tempat"?></h2>
                <div class="row">
                  <div class="col-3">
                  Fasilitas <br>
                    <label class="checkbox-inline"><input type="checkbox" name="fasilitas" value=""> Antar Jemput</label><br>
                    <label class="checkbox-inline"><input type="checkbox" name="fasilitas" value=""> Cuci Karpet</label>
                  </div>
                  <div class="col-3">Kategori <br>
                          <select class="form-control form-control-sm" name="id_harga">
                            <option value="1">Pilih Kategori</option>
                            <option value="2">Regular</option>
                            <option value="3">Cepat</option>
                            <option value="4">Expres</option>
                          </select> 
                  </div>
                  <div class="col-4">
                  Rentang Harga
                    <div class="row">
                          <div class="col-5">
                            <input type="text" name="harga1" class="form-control form-control-sm" id="exampleInputName2" placeholder="Rp 0">
                          </div><b>-</b>
                          <div class="col-5">
                            <input type="text" name="harga2" class="form-control form-control-sm" id="exampleInputEmail2" placeholder="Rp 100.000">
                          </div><input type="submit" value="Cari" name="btn_cari" class="btn btn-primary">
                    </div>
                  </div>                
                </div>
                </form>
              </div>
            </div>
</div>
<hr>
<?php

    $id_harga = mysqli_real_escape_string($koneksi, $_POST['id_harga']);
    $harga1   = $_POST['harga1'];
    $harga2   = $_POST['harga2'];
    //$lat1   = $_POST['lat'];
    //$lng1   = $_POST['lng'];

?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpALWzkNO7VH_pCSX30bt43_7h3sIeqQI" async defer></script>

<script type="text/javascript">
          //   function updateMarkerPosition(latLng) {
          //   document.getElementById('lat').value = [latLng.lat()];
          //   document.getElementById('lng').value = [latLng.lng()];
          // }
    
        var marker;
          function initialize() {
            // Variabel untuk menyimpan informasi (desc)
            var infoWindow = new google.maps.InfoWindow;
            //  Variabel untuk menyimpan peta Roadmap
            var mapOptions = {
              mapTypeId: google.maps.MapTypeId.ROADMAP
            } 
            // Pembuatan petanya
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);
            // Variabel untuk menyimpan batas kordinat
            var bounds = new google.maps.LatLngBounds();

            // //custom marker
            // var marker1 = new google.maps.Marker({
            //  position : new google.maps.LatLng(-7.330702374253343,112.50660234375005),
            // // position : new google.maps.LatLng(18.5204,73.8567),
             
            //  title : 'lokasi',
            //  map : map,
            //  draggable : true
            //  });
             
            //  //updateMarkerPosition(latLng);

            //  google.maps.event.addListener(marker1, 'drag', function() {
            //   updateMarkerPosition(marker1.getPosition());
            //  });





            // Pengambilan data dari database
            <?php


               if (isset($_POST['fasilitas'])) {

              if ($id_harga==2) {

                 $query = mysqli_query($koneksi,"SELECT * FROM laundry where concat(nama_laundry,   alamat) like '%$peta_tempat%' and fasilitas='antar jemput' and (harga_regular between '$harga1' and '$harga2') ORDER BY id_laundry");




                
              }else if ($id_harga==3) {

                 $query = mysqli_query($koneksi,"SELECT * FROM laundry where concat(nama_laundry,   alamat) like '%$peta_tempat%' and fasilitas='antar jemput' and (harga_cepat between '$harga1' and '$harga2') ORDER BY id_laundry");




                
              } else if ($id_harga==4) {

                 $query = mysqli_query($koneksi,"SELECT * FROM laundry where concat(nama_laundry,   alamat) like '%$peta_tempat%' and fasilitas='antar jemput' and (harga_expres between '$harga1' and '$harga2') ORDER BY id_laundry");




                
              }else{

               $query = mysqli_query($koneksi,"SELECT * FROM laundry where concat(nama_laundry,   alamat) like '%$peta_tempat%' and fasilitas='antar jemput' ORDER BY id_laundry");


                }




              # code...
            }else{


              if ($id_harga==2) {

                 $query = mysqli_query($koneksi,"SELECT * FROM laundry where concat(nama_laundry,   alamat) like '%$peta_tempat%' and (harga_regular between '$harga1' and '$harga2') ORDER BY id_laundry");




                
              }else if ($id_harga==3) {

                 $query = mysqli_query($koneksi,"SELECT * FROM laundry where concat(nama_laundry,   alamat) like '%$peta_tempat%' and (harga_cepat between '$harga1' and '$harga2') ORDER BY id_laundry");




                
              } else if ($id_harga==4) {

                 $query = mysqli_query($koneksi,"SELECT * FROM laundry where concat(nama_laundry,   alamat) like '%$peta_tempat%' and (harga_expres between '$harga1' and '$harga2') ORDER BY id_laundry");




                
              }else{



              $query = mysqli_query($koneksi,"SELECT * FROM laundry where concat(nama_laundry, alamat) like '%$peta_tempat%' ORDER BY id_laundry");
            }
          }








                // $query = mysqli_query($konek,"SELECT * FROM laundry where concat(nama_laundry, alamat) like '%$cari%'");

              //  $query = mysqli_query($koneksi,"select * from laundry where concat(nama_laundry, alamat) like '%$cari%'");

              // $query = mysqli_query($koneksi,"SELECT * FROM laundry WHERE (SQRT((POWER(('$lat1'-lat),2))+(POWER(('$lng2'-lng),2)))*111.319*1000)<=200");

                

                while ($data = mysqli_fetch_array($query))
                {
                    $nama = $data['nama_laundry'];
                    $lat = $data['lat'];
                    $lon = $data['lng'];
                    
                    echo ("addMarker($lat, $lon, 'Lokasi : $nama<br/>Latitude : $lat<br/>Longitude : $lon');\n");                      
                }
              ?>
              
            // Proses membuat marker 
            function addMarker(lat, lng, info) {
                var lokasi = new google.maps.LatLng(lat, lng);
                bounds.extend(lokasi);
                var marker = new google.maps.Marker({
                    map: map,
                    position: lokasi
                });       
                map.fitBounds(bounds);
                bindInfoWindow(marker, map, infoWindow, info);
             }
            
            // Menampilkan informasi pada masing-masing marker yang diklik
            function bindInfoWindow(marker, map, infoWindow, html) {
              google.maps.event.addListener(marker, 'click', function() {
                infoWindow.setContent(html);
                infoWindow.open(map, marker);
              });
            }
     
            }
          google.maps.event.addDomListener(window, 'load', initialize);
      </script>

<?php 

  
  if (isset($_POST['fasilitas'])) {

    if ($id_harga==2) {

       $query = mysqli_query($koneksi,"SELECT * FROM laundry where concat(nama_laundry,   alamat) like '%$peta_tempat%' and fasilitas='antar jemput' and (harga_regular between '$harga1' and '$harga2') ORDER BY id_laundry");




      
    }else if ($id_harga==3) {

       $query = mysqli_query($koneksi,"SELECT * FROM laundry where concat(nama_laundry,   alamat) like '%$peta_tempat%' and fasilitas='antar jemput' and (harga_cepat between '$harga1' and '$harga2') ORDER BY id_laundry");




      
    } else if ($id_harga==4) {

       $query = mysqli_query($koneksi,"SELECT * FROM laundry where concat(nama_laundry,   alamat) like '%$peta_tempat%' and fasilitas='antar jemput' and (harga_expres between '$harga1' and '$harga2') ORDER BY id_laundry");




      
    }else{

     $query = mysqli_query($koneksi,"SELECT * FROM laundry where concat(nama_laundry,   alamat) like '%$peta_tempat%' and fasilitas='antar jemput' ORDER BY id_laundry");


      }




    # code...
  }else{


    if ($id_harga==2) {

       $query = mysqli_query($koneksi,"SELECT * FROM laundry where concat(nama_laundry,   alamat) like '%$peta_tempat%' and (harga_regular between '$harga1' and '$harga2') ORDER BY id_laundry");




      
    }else if ($id_harga==3) {

       $query = mysqli_query($koneksi,"SELECT * FROM laundry where concat(nama_laundry,   alamapeta_tempat%' and (harga_cepat between '$harga1' and '$harga2') ORDER BY id_laundry");




      
    } else if ($id_harga==4) {

       $query = mysqli_query($koneksi,"SELECT * FROM laundry where concat(nama_laundry,   alamat) like '%$peta_tempat%' and (harga_expres between '$harga1' and '$harga2') ORDER BY id_laundry");




      
    }else{



    $query = mysqli_query($koneksi,"SELECT * FROM laundry where concat(nama_laundry, alamat) like '%$peta_tempat%' ORDER BY id_laundry");
  }
}

  
    if(mysqli_num_rows($query) == 0){ //ini artinya jika data hasil query di atas kosong
      echo "Tidak ada data";
      }else{  //else ini artinya jika data hasil query ada (data diu database tidak kosong)
        //jika data tidak kosong, maka akan melakukan perulangan while
?>

      <div class="container">  
            <div class="col-12 d-flex">
                <div class="col-md-12 js-fullheight">
                  <div id="map" style="height:400px;"></div>
                </div>
            </div>
            <div class="row">
<?php
        $no = 1;  //membuat variabel $no untuk membuat nomor urut
        while($data = mysqli_fetch_assoc($query)){  //perulangan while dg membuat variabel $data yang akan mengambil data di database
          //menampilkan row dengan data di database

?>                
                <div class="col-md-4 d-flex">
                  <div class="blog-entry align-self-stretch">
                    <a href="<?php echo 'detail_laundry_1.php?id='.$data['id_laundry'].''?>" class="block-20" style="background-image: url('<?php echo "assets/tema/images/".$data['foto'].""?>'); width: 350px;">
                    </a>
                    <div class="text mt-3">
                      <!--<div class="meta mb-2">
                        <div><a href="#">December 2, 2018</a></div>
                        <div><a href="#">Admin</a></div>
                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                      </div>-->
                      <h3 class="heading"><a href="<?php echo 'detail_laundry_1.php?id='.$data['id_laundry'].''?>"><?php echo ''.$data['nama_laundry'].''?></a></h3>
                      <p><?php echo ''.$data['alamat'].''?></p>
                    </div>
                </div>
              </div>
<?php
          $no++;  //menambah jumlah nomor urut setiap row       
        }
      }     
    }
?>
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
  <script src="<?php echo base_url(); ?>assets/tema/js/main.js"></script>
    
  </body>
</html>