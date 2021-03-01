<!DOCTYPE html>
<html>
<head>
<title>View Profile</title>
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
	 include 'docs\header.php';
	 $email="jahnnabi.moni54@gmail.com";
	 $name="jahnnabi Mazumder";
	 $gender="Female";
	 $dob="5/24/2000";
   $checkm=$checkf=$checko="";

   if ($gender=="Female")
   {

    $checkf="checked";

   }
   else if($gender=="Male")
   {

     $checkm="checked";

   }
   else
   {
    $checko="checked";
   }



	 ?></header>



<section>
   <?php 



if (isset($_SESSION['username'])) {
  echo "  
  <nav>
     <div align='center'>Account</div>
    <hr>
    <ul>
      <li><a href='dashboard.php'>Dashboard</a></li>
      <li><a href='viewprofile.php'>View Profile</a></li>
      <li><a href='editprofile.php'>Edit Profile</a></li>
      <li><a href='chngprofilepic.php'>Change Profile Picture</a></li>
      <li><a href=' changepassword.php'>Change Password</a></li>
       <li><a href=' logout.php'>Log Out</a></li>
    </ul>
  </nav>";


}
else{
    $msg="error";
    header("location:loginpage.php");
    // echo "<script>location.href='login.php'</script>";
  }

 ?>

  
  <article>

    <?php 



if (isset($_SESSION['username'])) {
    echo "<fieldset>
<legend><B>EDIT PROFILE</B></legend><div style= 'margin-right: 750px;float: left; text-align: left;color: blue;'> Username: <input type='text' name='name' value=".$name."><hr>
  <br>Email:<input type='text' name='name' value=".$email."><hr>
  <br>
  Gender:

  <input type='radio' name='gender'  value='female' ".$checkf.">Female
  <input type='radio' name='gender' value='male' ".$checkm.">Male
  <input type='radio' name='gender'  value='female'".$checko.">Other
  <hr>
  <br>Date Of Birth:<input type='text' name='name' value=".$dob."><hr>
  </div>
  <div style= 'float: right;position: absolute;left:650px; top: 200px;color: blue;'>
  <fieldset>
<img src='docs\dp.png' alt='Profile Picture' width='150' height='200'>
</fieldset>
  </div></fieldset>";


}

 ?>

   
  </article>
</section>

<footer>
  <?php include 'docs\footer.php';?>
</footer>

</body>
</html>
