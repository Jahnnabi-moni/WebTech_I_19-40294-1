<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}


header {
  background-color: #99ff99;
  padding: 10px;
  text-align: center;
  font-size: 15px;
  color: blue;
}


nav {
  float: left;
  width: 20%;
  height: 400px; 
  background: #b3cccc;
  padding: 20px;
}


article {
  float: left;
  padding: 20px;
  width: 80%;
  background-color:#e6e6e6 ;
  height: 400px; 
}


section::after {
  content: "";
  display: table;
  clear: both;
}

footer {
  background-color: #00cc66;
  padding: 8px;
  height: 8%;
  text-align: center;
  color: white;
}

}
</style>
</head>
<body>



<header>

	<?php
	session_start();
	 include 'docs\header.php';?></header>



<section>
  <nav>
     <div align="center">Account</div>
    <hr>
    <ul>
      <li><a href='dashboard.php'>Dashboard</a></li>
      <li><a href='viewprofile.php'>View Profile</a></li>
      <li><a href=' editprofile.php'>Edit Profile</a></li>
      <li><a href='chngprofilepic.php'>Change Profile Picture</a></li>
      <li><a href=' changepassword.php'>Change Password</a></li>
       <li><a href=' logout.php'>Log Out</a></li>
    </ul>
  </nav>
  
  <article>

    <?php 



if (isset($_SESSION['username'])) {
  echo "<h2 align='center'> Welcome ".$_SESSION['username']."</h2>";


}
else{
    $msg="error";
    header("location:loginpage.php");
    // echo "<script>location.href='login.php'</script>";
  }

 ?>

   
  </article>
</section>

<footer>
  <?php include 'docs\footer.php';?>
</footer>

</body>
</html>
