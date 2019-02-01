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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
                if ($_SESSION['username']) {
                echo '<a href="logout.php" class="nav-link">Logout</a>';
                      $host = "localhost";  //nama host
                      $user = "root"; //username phpMyAdmin
                      $pass = ""; //password phpMyAdmin
                      $name = "2932517_inilaundry"; //nama database

      $koneksi = mysqli_connect($host, $user, $pass, $name);// or die("Koneksi ke database gagal!");
      $idlaundry=mysqli_real_escape_string($koneksi, $_POST['id_laundry']);
      $ratlama=mysqli_real_escape_string($koneksi, $_POST['ratinglama']);
      $ratlamatidak=mysqli_real_escape_string($koneksi, $_POST['ratinglamatidak']);
      $komen=mysqli_real_escape_string($koneksi, $_POST['ratinglama']);
        //melakukan query ke database dg SELECT table siswa dengan kondisi WHERE id_produk = '$id'


    //  untuk rating
        $a=1;
        $ratingbaru= $a+$ratlama;
        
        $ratingtidakbaru=$a+$ratlamatidak;

      if (isset($_POST['suka'])) {


      $update = mysqli_query($koneksi,"UPDATE laundry SET rating='$ratingbaru'  WHERE id_laundry='$idlaundry'");

      if($update){
          
          echo 'Data berhasil di simpan! ';   //Pesan jika proses simpan sukses
          echo '<a href="detail_laundry_1.php?id='.$id.'">Kembali</a>'; 
          
        }else{
          
          echo 'Gagal menyimpan data! ';    //Pesan jika proses simpan gagal
          echo '<a href="detail_laundry_1.php?id='.$id.'">Kembali</a>'; 
          
        }

      
    }
     if (isset($_POST['tidak'])) {


      $update = mysqli_query($koneksi,"UPDATE laundry SET rating_tidak='$ratingtidakbaru'  WHERE id_laundry='$idlaundry'");

      if($update){
          
          echo 'Data berhasil di simpan! ';   //Pesan jika proses simpan sukses
          echo '<a href="detail_laundry_1.php?id='.$id.'">Kembali</a>'; 
          
        }else{
          
          echo 'Gagal menyimpan data! ';    //Pesan jika proses simpan gagal
          echo '<a href="detail_laundry_1.php?id='.$id.'">Kembali</a>'; 
          
        }

      
    }

    
                } else {
                # code...
                 echo '<a href="masuk_customer_1.php" class="nav-link">Masuk</a>';
                 if (isset($_POST['suka'])) {
          echo "<script>alert('Anda harus login dahulu');window.location='masuk_customer_1.php'</script>";
                }
                }
                 ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
<?php
  
    
   


      //mematikan error reporting
      error_reporting(0);
      
  include('koneksi.php');
    //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=id_produk
  $id = strip_tags($_GET['id']);
    //melakukan query ke database dg SELECT table siswa dengan kondisi WHERE id_produk = '$id'
  $show = mysqli_query($koneksi,"SELECT * FROM laundry WHERE id_laundry='$id'");
    //cek apakah data dari hasil query ada atau tidak
  if(mysqli_num_rows($show) == 0){
    
    echo '<script>window.history.back()</script>';
    
  }else{
    
      //jika data ditemukan, maka membuat variabel $data
    $data = mysqli_fetch_assoc($show);  //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
    
?>

    <div class="hero-wrap" style="background-image: url('<?php echo "images/".$data['foto'].""?>'); height: 400px;"data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row no-gutters js-fullheight slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-8 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 0 }"><br>
            <span><?php echo $data['nama_laundry']; ?></span></h1>
            <p class="mb-0" data-scrollax="properties: { translateY: '30%', opacity: 0 }"> <!--<span class="number" data-number="850000"></span>--><?php echo $data['alamat']; ?></p>
          <!--<br><br><br><br><br><br><br><br><br>-->
        </div>
      </div>
    </div>
  </div>
    
    <br><br><br>
   <div class="container">
     <div class="row">
       <div class="col-12">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" href="#tentang" role="tab" data-toggle="tab">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#ulasan" role="tab" data-toggle="tab">Penilaian</a>
            </li>
          </ul>
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade show active" id="tentang">
            <div class="row">
              <div class="col-8">
            <h2>Daftar harga paket cuci</h2><br>
            <h5><table>
                  <tr>
                    <td width="200px">Regular</td>
                    <td width="200px">Rp <?php echo $data['harga_regular']; ?>/Kg</td>
                    <td><?php echo $data['hari_regular']; ?> Hari</td>
                  </tr>
                  <tr>
                    <td>Cepat</td>
                    <td>Rp <?php echo $data['harga_cepat']; ?>/Kg</td>
                    <td><?php echo $data['hari_cepat']; ?> Hari</td>
                  </tr>
                  <tr>
                    <td>Expres</td>
                    <td>Rp <?php echo $data['harga_expres']; ?>/Kg</td>
                    <td><?php echo $data['hari_expres']; ?> Jam</td>
                  </tr>
                </table>
                <br><br>
              </h5>
            <h2>Fasilitas</h2>
            <h5><ul>
              <li>
                <?php echo $data['fasilitas']; ?>
              </li>
                </ul>
            </h5>
            </div>
            <div class="col-4">
              <h1>Kontak</h1><ul>
              <li>WhatsApp <?php echo $data['kontak']; ?></li>
              <li>No. Hp <?php echo $data['kontak']; ?></li>
                </ul>
            </div>
            
          </div>
            
            <br><br><br>
            
    
        <h2>Lokasi</h2>
       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpALWzkNO7VH_pCSX30bt43_7h3sIeqQI" async defer></script>

<script type="text/javascript">
          //   function updateMarkerPosition(latLng) {
          //   document.getElementById('lat').value = [latLng.lat()];
          //   document.getElementById('lng').value = [latLng.lng()];
          // }
    
    function initialize() {
    var mapOptions = {
      zoom: 6,
      center: new google.maps.LatLng(<?php echo "$data[lat], $data[lng]"; ?>)
    }
    var map = new google.maps.Map(document.getElementById('map'),
      mapOptions);
    
    setMarkers(map, beaches);
  }

  var beaches = [
    ['<?php echo "$data[nama_laundry]"; ?>', <?php echo "$data[lat], $data[lng]"; ?>],
  ];

    function setMarkers(map, locations) {
    var shape = {
      coords: [1, 1, 1, 20, 18, 20, 18 , 1],
      type: 'poly'
    };
    var infoWindow = new google.maps.InfoWindow;
    for (var i = 0; i < locations.length; i++) {
      var beach = locations[i];
      var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
      var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: beach[4],
        shape: shape,
        title: beach[0],
        zIndex: beach[3]
      });
      var html = 'Lokasi : '+beach[0]+'<br/>Latitude : '+beach[1]+'<br/>Longitude : '+beach[2]+'';
      bindInfoWindow(marker, map, infoWindow, html);
    }
  }
  
  function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>

      <div id="map" style="height:400px;"></div>
</div>    
    <div role="tabpanel" class="tab-pane fade" id="ulasan">
            <?php
    echo "<b>".$data['rating']."</b> Suka | <b>".$data['rating_tidak']."</b> Tidak";
    //echo $data['rating'];
    //echo $data['rating_tidak'];
    $ratinglama=$data['rating'];
    $ratinglamatidak=$data['rating_tidak'];
    ?>
    <hr>
    <form action="detail_laundry_1.php" method="post">
    <input type="hidden" name="id_laundry" value="<?php echo $id; ?>">
    <input type="hidden" name="ratinglama" value="<?php echo $ratinglama; ?>">
    <input type="hidden" name="ratinglamatidak" value="<?php echo $ratinglamatidak; ?>">
    <input type="submit" class="btn btn-primary" name="suka" value="Suka">
    <input type="submit" class="btn btn-danger" name="tidak" value="Tidak">
    </form>
    <hr>
  <!--  <form action="detail_laundry_1.php" method="post">
    <div class="form-group col-4">
            <label for="exampleFormControlTextarea1"></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    </form>-->

    <?php
    
    

    }
    ?>
        </div>
        </div>
       </div>
     </div>
    </div>
   
   

  
    
    
  

  <!-- loader -->


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