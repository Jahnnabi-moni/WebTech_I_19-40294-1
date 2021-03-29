<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Change Profile Picture</title>
</head>
<body>




<header>
  <?php 

session_start();
  include 'controller\header.php';?>
</header>



<section>

  
  <article>
  <fieldset>
	<legend><b>PROFLE PICTURE</b></legend>
	<img src="docs\dp.png" alt="Profile_pic" width="150" height="150"><br>
<form action="uploadp.php" method="post" enctype="multipart/form-data">
  <input type="file" name="fileToUpload" id="fileToUpload"><hr>
  <input type="submit" value="Submit" name="submit">
</fieldset>
</form>
   
  </article>
</section>

<footer>
<?php include 'controller\footer.php';?>
</footer>

</body>
</html>
