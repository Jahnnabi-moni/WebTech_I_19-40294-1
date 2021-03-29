<?php
session_start();
if (isset($_SESSION['username'])) { ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
    <style>
.error {color: #FF0000;}
</style>
<title>Change Password</title>
</head>
<body>



<header>
  <?php 
  include 'controller/header.php';;
  require_once ('model/model.php');
  $tableName = 'corporate';
  $corpEmployee = showEmployee($tableName, $_SESSION['username']);
 ?>
</header>



<section>

  <article>



  <form method='post' action='controller\chngPassController.php'>  
<fieldset>




<legend><b>CHANGE PASSWORD</b></legend><br><div style='float: left; text-align: right;'>
    Current Password: <input type='password' name='cpassword' value='<?php //echo $cpass;?>'>
  <span class='error'><?php if(!empty($_GET['cpassErr'])){echo $_GET['cpassErr'];}?></span>
  <br><br>
  <b style='color: green;'>New Password: </b><input type='password' name='npassword' value='<?php //echo $npass;?>'>
  <span class='error'><?php if(!empty($_GET['npassErr'])){echo $_GET['npassErr'];}?></span>
  <br><br>
  <b style='color: red;'>Retype New Password: </b><input type='password' name='rpassword' value='<?php //echo $rpass;?>'>
  <span class='error'><?php if(!empty($_GET['rpassErr'])){echo $_GET['rpassErr'];}?></span>
  <hr>
  <input type='submit' name='submit' value='Submit'></div>






</fieldset>
</form>
   
  </article>
</section>

<footer>
<?php include 'controller\footer.php';?>
</footer>

</body>
</html>
<?php }

else{
    $msg="error";
    header("location:loginpage.php");
    // echo "<script>location.href='login.php'</script>";
  }

?>
