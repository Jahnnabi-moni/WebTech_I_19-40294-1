<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <title>UPLOAD PICTURE</title>
</head>
<body>

<header>



   <?php session_start(); require 'controller\uploadppController.php';?>
   <section>
  
  <article>
    <fieldset>
<legend><B>PROFILE PICTURE</B></legend> <br>
<br><img src="uploads/<?php echo($_FILES["fileToUpload"]["name"]) ?>" alt="Profile Picture" width="180" height="200">
</fieldset>

  </article>
</section>





</body>
</html>