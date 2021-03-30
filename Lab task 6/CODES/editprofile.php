<?php
session_start();
require_once 'model/model.php';
$tableName='corporate';
$corpEmployee = showEmployee($tableName, $_SESSION['username']);
if (isset($_SESSION['username'])) { ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
<title>Edit Profile</title>
</head>
<body>

<header>

	<?php
	
	 include 'controller\header.php';

	 ?></header>

<section>
  
  
  <article>

  	
    <fieldset>
<legend><B>EDIT PROFILE</B></legend><div style= 'margin-right: 750px;float: left; text-align: left;color: blue;'> <!-- Username: <input type='text' name='name' value=".$_SESSION['username']."> -->
<form method="post" action="<?php echo htmlspecialchars('controller/editProfileController.php');?>" enctype="multipart/form-data">
  <br><br>Email:<input type='text' name='email' value="<?php echo $corpEmployee['Email']; ?>">
  <span class="error"><?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span><hr>

  <br>
  Phone: <input type='tel' name='phone' placeholder='01234567891'  value="<?php echo $corpEmployee['Phone']; ?>">
  <span class="error"><?php if(!empty($_GET['phnErr'])){echo $_GET['phnErr'];} ?></span><hr>
  <br>
  <!-- Password: <input type='password' name='password' value="<?php //echo $corpEmployee['Password']; ?>"> -->
  <input type='submit' name='save' value='Save'><input type="reset" value="Reset"><br><br>
  <br>
  </div>
  <div style= 'float: right;position: absolute;left:580px; top: 215px;color: blue;'>
 <fieldset>
  <img src='uploads/<?php echo $corpEmployee['Image']; ?>' alt='Profile Picture' width='150' height='150'><hr>
 <input type="file" name="fileToUpload" id="fileToUpload">
 </fieldset>
  </div>
</form>
<div style= 'float: right;position: absolute;left:141px; top: 371px;color: blue;'>
  <a href='changepassword.php'><button>Change Password</button></a>
</div>

  </fieldset>
 

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
