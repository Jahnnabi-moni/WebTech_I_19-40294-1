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
<title>View Profile</title>
</head>
<body>

<header>

	<?php

	 include 'controller\header.php';
	 // $email="jahnnabi.moni54@gmail.com";
	 // $phone="01930284388";



	 ?></header>



<section>

  <article>

    

<div style="color: blue;"><?php if(!empty($_GET['successMsg'])){echo $_GET['successMsg'];} ?></div><br>

<fieldset>
<legend><B>PROFILE</B></legend><div style= 'margin-right: 750px;float: left; text-align: left;color: blue;'>


   Username: <?php 
   if(empty($_GET['username']))
    echo $_SESSION['username'];
  else
    echo $_GET['username'];?><hr>
  <br>Email: <?php echo $corpEmployee['Email']; ?><hr>
  <br>Phone Number:<?php echo $corpEmployee['Phone']; ?><hr>
  <br><a href='editprofile.php'><button>Edit Profile</button></a>
  <br>
  
  </div>
 <div style= 'float: right;position: absolute;left:580px; top: 240px;color: blue;'>

    <form method="post" action='controller/uploadppController.php' method="post" enctype="multipart/form-data">
  <fieldset>
<img src='<?php echo $corpEmployee['Image']; ?>' alt='Profile Picture' width='150' height='150'><br>
  <input type='file' name='fileToUpload' id='fileToUpload'><hr>
  <input type="submit" name="changeProPic" value="Change">
  <div style="color: red;"><?php if(!empty($_GET['msg'])){echo $_GET['msg'];} ?></div>
</fieldset>
</form>
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