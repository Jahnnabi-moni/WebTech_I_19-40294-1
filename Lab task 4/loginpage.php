<!DOCTYPE html>
<html>
<head>
<title>login page</title>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

header {
  background-color: #99ff99;
  padding: 18px;
  text-align: center;
  font-size: 15px;
  color: blue;
}


article {
  float: left;
  padding: 20px;
  text-align: center;
  width: 100%;
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
  <?php include 'docs\header.php';?>
</header>
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
      

    }

  }



?>

  <?php
  session_start();

$username="jahnnabi";
$pass="admin";


if (isset($_POST['username'])) {
  if ($_POST['username']==$username && $_POST['password']==$pass) {
    $_SESSION['username'] = $username;
    header("location:dashboard.php");
  }
  else{
    $msg="invalid username or password ";
    //echo "<script>alert('uname or pass incorrect!')</script>";
  }

}



  ?>


<section>  
<!-- <nav></nav> -->
  <article>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <fieldset>
    <legend><b>LOGIN</b></legend>
      <?php if(isset($msg)){?>
        
          <span class="error"><p valign="top"><?php echo $msg;?></p></span>
        
      <?php } ?>
  User Name: <input type="text" name="username" >
  <span class="error"><?php echo $usernameErr;?></span>
  <br><br>
  Password: <input type="password" name="password">
  <span class="error"><?php echo $passErr;?></span>
  <hr>

<input type="checkbox" name="remember" value=""  >Remember me<br><br>
  <input type="submit" name="submit" value="Submit">
  <a href="#">Forget Password?</a>
  </fieldset> 
</form>
   
  </article>
</section>

<footer>
 <?php include 'docs\footer.php';?>
</footer>

</body>
</html>
