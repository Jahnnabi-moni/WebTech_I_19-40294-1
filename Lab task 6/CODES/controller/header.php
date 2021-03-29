
<header>
  <div align="left"><a href="welcome.php"><img src="docs\companyLogo.png" width="300" height="100"></a></div>

          <?php 


if (empty($_SESSION['username'])) {

   echo "<div align='right'><a href='welcome.php'><button>Home</button></a> |
      <a href='loginpage.php'><button>Log in</button></a> |
      <a href='signUp.php'><button>Sign Up</button></a></div>";

}
else if(!empty($_SESSION['username'])) {
    $msg="error";

     echo "<div align='right'> Logged in as <a href='viewprofile.php'><button>".$_SESSION['username']."</button> </a> | <a href='controller/logout.php'><button> Log Out</button></a></div>";
  }

 ?>


  
</header>