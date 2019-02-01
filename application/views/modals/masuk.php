<?php
session_start();
$host = "localhost";  //nama host
$user = "root"; //username phpMyAdmin
$pass = ""; //password phpMyAdmin
$name = "2932517_inilaundry"; //nama database

$koneksi = mysqli_connect($host, $user, $pass, $name);// or die("Koneksi ke database gagal!");




$username = mysqli_real_escape_string($koneksi, $_POST['username']);
// Password yang di e
$password     = md5(mysqli_real_escape_string($koneksi,$_POST['password']));
$login = mysqli_query($koneksi, "SELECT * FROM customer WHERE username = '$username' AND password='$password'");
$row=mysqli_fetch_array($login);
//if($row) {
if(isset($_POST['masuk'])){
	

		if ($row['username'] == $username AND $row['password'] == $password)
		{
		  
		  $_SESSION['username'] = $row['username'];
		  $_SESSION['password'] = $row['password'];
                  header('location:Welcome');
                 }
		else
		{
		  echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br>
		        Username atau Password Anda tidak benar.<br>";
		    echo "<br>";
		  echo "<input class='btn btn-blue' type=button value='ULANGI LAGI' onclick=location.href='masuk_customer_1.php'></a></center>";


		}



}	
//}
?>