<?php 

session_start();

if (isset($_SESSION['username'])) {
	session_destroy();
	header("location:../view/welcome.php");
	
}

else{
	header("location:../view/welcome.php");
}

 ?>