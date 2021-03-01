
<header>
  <img src="docs\logo.png" width="150" height="100">

          <?php 


if (empty($_SESSION['username'])) {

   echo "<div align='right'><a href='welcome.php'>Home</a> |
      <a href='loginpage.php'>Log in</a> |
      <a href='registration.php'>Registration</a></div>";

}
else{
    $msg="error";
    // header("location:loginpage.php");
    // echo "<script>location.href='login.php'</script>";

     echo "<div align='right'> Logged in as <a href='viewprofile.php'>".$_SESSION['username']."</a> | <a href='welcome.php'>Log Out</a></div>";
  }

 ?>


  
</header>