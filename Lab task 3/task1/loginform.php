<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<style>
.error {color: #FF0000;}
</style>
</head>
<body>
	<?php
	$usernameErr=$passErr="";
	$username=$pass="";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "*User Name cannot be Empty";
  } else {

     $username =$_POST["username"];

    if (!preg_match("/^[a-zA-Z-'._ ]*$/",$username)) {
      $usernameErr = "*Can contain a-z,A-Z,period,dash,underscrone only";
      $username="";

    }

    else if(strlen($username)<2)
    {
       $usernameErr = "*must contain 2 characters";
       $username="";
    }
   

  }

  if(empty($_POST["password"])){
  	$passErr="*Password can't be empty";
  }
  else {

  	   $pass =$_POST["password"];
  	 
  	   if(strlen($pass)<8)
  	   {
  	   	$passErr="*must contain at least 8 charaters";
  	   	$pass="";
  	   }
  	   
  	  else if (!preg_match('@[^\w]@', $pass)) {
      $passErr = "*must contain one special character";
      $pass="";

    }

  }


}


	?>

	<!-- html -->
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <b>User Name: </b><input type="text" name="username" value="<?php echo $username;?>">
  <span class="error"><?php echo $usernameErr;?></span>
  <br><br>
  <b>Password: </b><input type="password" name="password" value="<?php echo $pass;?>">
  <span class="error"><?php echo $passErr;?></span>
  <br><br>

<input type="checkbox" name="remember" value=""  >Remember me<br><br>
  <input type="submit" name="submit" value="Submit">
  <a href="#">Forget Password?</a>
</form>

<?php
echo "<h3>Input:</h3>";
echo $username;
echo "<br>";
echo $pass;



?>

</body>
</html>