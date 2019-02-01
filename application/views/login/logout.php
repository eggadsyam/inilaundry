<?php
  // session_start();
  // session_destroy();
  // header('location:login.php');

session_start();
/*if ($_SESSION['level']=="admin") {
	# code...

  session_destroy();
  header('location:login.php');
}
else if (isset($_SESSION['customer'])) {
	# code...

	session_destroy();
  header('location:index.php');
}*/
session_start();
session_destroy();
echo "<script>alert('Logout Berhasi')</script>";
echo "<script>location='index.php';</script>";
  
?>