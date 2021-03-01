<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
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

   include 'docs\header.php';?>
</header>

<?php

  $cpass=$npass=$rpass="";
    $cpassErr=$npassErr=$rpassErr="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {



      if(empty($_POST["cpassword"]))
      {
        $cpassErr="*please enter password";
        $cpass="";
      }
      else
      {
       $cpass =$_POST["cpassword"];
      }

      if(empty($_POST["npassword"]))
      {
        $npassErr="*Please enter a new password";
        $npass="";
      }

      else 
      {
        $npass=$_POST["npassword"];
        if(strcmp($cpass, $npass)==0)
        {
          $npassErr="*Can't match with current password";
          $npass="";

        }
      }

      if(empty($_POST["rpassword"]))
      {
        $rpassErr="*Can't be empty";
        $rpass="";
      }
      else
      {
         $rpass=$_POST["rpassword"];
        if(!strcmp($npass, $rpass)==0)
        {
          $rpassErr="*Must match with new password";
          $rpass="";
        

        }

      }

      

 
  }

  ?>


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

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<fieldset>
  <legend><b>CHANGE PASSWORD</b></legend>
    Current Password: <input type="password" name="cpassword" value="<?php echo $cpass;?>">
  <span class="error"><?php echo $cpassErr;?></span>
  <br><br>
  <b style="color: green;">New Password: </b><input type="password" name="npassword" value="<?php echo $npass;?>">
  <span class="error"><?php echo $npassErr;?></span>
  <br><br>
  <b style="color: red;">Retype New Password: </b><input type="password" name="rpassword" value="<?php echo $rpass;?>">
  <span class="error"><?php echo $rpassErr;?></span>
  <hr>
  <input type="submit" name="submit" value="Submit">
</fieldset>
   
  </article>
</section>

<footer>
<?php include 'docs\footer.php';?>
</footer>

</body>
</html>
