<?php 

session_start();

if (isset($_SESSION['username'])) {
	session_destroy();
	header("location:welcome.php");
	
}

else{
	header("location:welcome.php");
}

 ?>