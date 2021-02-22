<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
<style>
.error {color: #FF0000;}
</style>

</head>
<body>

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

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <b>Current Password: </b><input type="password" name="cpassword" value="<?php echo $cpass;?>">
  <span class="error"><?php echo $cpassErr;?></span>
  <br><br>
  <b style="color: green;">New Password: </b><input type="password" name="npassword" value="<?php echo $npass;?>">
  <span class="error"><?php echo $npassErr;?></span>
  <br><br>
  <b style="color: red;">Retype New Password: </b><input type="password" name="rpassword" value="<?php echo $rpass;?>">
  <span class="error"><?php echo $rpassErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">

  <?php
  echo "<h3>Input:</h3>";
echo "current password: "; echo $cpass;
echo "<br>";
echo "new password: "; echo $npass;


  ?>

</body>
</html>