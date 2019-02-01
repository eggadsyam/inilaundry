<?php
//error_reporting(0);
$host = "localhost";	//nama host
$user = "root";	//username phpMyAdmin
$pass = "";	//password phpMyAdmin
$name = "2932517_inilaundry";	//nama database

$koneksi = mysqli_connect($host, $user, $pass, $name);// or die("Koneksi ke database gagal!");

//mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>