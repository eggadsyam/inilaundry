<?php

/*if(isset($_POST['daftar_admin'])){
		//inlcude atau memasukkan file koneksi ke database
	include_once('koneksi.php');
		//jika tombol tambah benar di klik maka lanjut prosesnya
	$username			= mysqli_real_escape_string($koneksi, $_POST['username']);	
	$password			= mysqli_real_escape_string($koneksi, $_POST['password']);	
	$nama				= mysqli_real_escape_string($koneksi, $_POST['nama']);	
	$level				="admin";
	//$jabatan			= mysqli_real_escape_string($koneksi, $_POST['jabatan']);
		//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysqli_query($koneksi,"INSERT INTO admin_web VALUES(NULL,'$username',md5('$password'), '$nama','$level')"); 

		//jika query input sukses
	if($input){
		
		echo 'Berhasil Daftar! ';		//Pesan jika proses tambah sukses
		echo '<a href="daftar.php">Kembali</a>';	
		
	}else{
				echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="daftar.php">Kembali</a>';	
			}

} else */

if(isset($_POST['Pdaftar'])){
		//inlcude atau memasukkan file koneksi ke database
	include_once('koneksi.php');
		//jika tombol tambah benar di klik maka lanjut prosesnya
	$nama				= mysqli_real_escape_string($koneksi, $_POST['nama']);
        $username			= mysqli_real_escape_string($koneksi, $_POST['username']);	
	$password			= mysqli_real_escape_string($koneksi, $_POST['password']);	
	
//	$level				="customer";
	//$jabatan			= mysqli_real_escape_string($koneksi, $_POST['jabatan']);
		//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysqli_query($koneksi,"INSERT INTO customer VALUES(NULL,'$nama', '$username',md5('$password'))"); 

		//jika query input sukses
	if($input){
		
		echo '<center><br><br><br><br><br><br><b>Berhasil Daftar! ';		//Pesan jika proses tambah sukses
		echo '<a href="Masuk.php">Lanjut masuk</a></center>';	
		
	}else{
		echo '<center><br><br><br><br><br><br><b>Gagal mendaftar! ';		//Pesan jika proses tambah gagal
		echo '<a href="Daftar.php">Kembali</a></center>';	
			}

}
else{	//jika tidak terdeteksi tombol daftar di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>