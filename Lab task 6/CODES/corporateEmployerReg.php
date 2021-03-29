<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <style>
.error {color: #FF0000;}
</style>
<title>Registration</title>
</head>
<body>

<header>
  
    <?php include 'controller\header.php';?>
</header>



<section>  
<!-- <nav></nav> -->
  <article>
   <form method="post" action="controller\CEmployerController.php">
  <fieldset>
    <legend><b>REGISTRATION</b></legend><br><div style="float: left; text-align: right;">



User Name: <input type="text" name="username" value="<?php //echo $username;?>">
 <span class="error"><?php if(!empty($_GET['userNameErr'])){echo $_GET['userNameErr'];}?></span>
<hr>

  E-mail: <input type="text" name="email" value="<?php //echo $email;?>">
  <span class="error"><?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];}?></span>
 <hr>
  Phone: <input type="tel" name="phone" placeholder="01234567891"  value="<?php //echo $phn;?>">
  <span class="error"><?php if(!empty($_GET['phnErr'])){echo $_GET['phnErr'];}?></span>

<hr>

  Password: <input type="password" name="password" value="<?php //echo $pass;?>">
  <span class="error"><?php if(!empty($_GET['passErr'])){echo $_GET['passErr'];}?></span>
<hr>

  Confirm Password: <input type="password" name="cpassword" value="<?php //echo $cpass;?>">
  <span class="error"><?php if(!empty($_GET['cpassErr'])){echo $_GET['cpassErr'];}?></span>
  <hr>

 Company Name: <input type="text" name="compname" value="<?php //echo $compname;?>">
  <span class="error"><?php if(!empty($_GET['compnameErr'])){echo $_GET['compnameErr'];}?></span>

  <hr>

 Company Address: <!-- <input type="text" name="compaddress" value="<?php echo $compadrs;?>"> -->
  <textarea name="compaddress" rows="2" cols="25"></textarea>
<span class="error"><?php if(!empty($_GET['compadrsErr'])){echo $_GET['compadrsErr'];}?></span>
<hr>

<!-- 
 Job Type:
  <select name="jobtype">
   <option value="" disabled selected>Select a type </option>
    <option value="Agriculture">Agriculture, Food and Natural Resources</option>
    <option value="Architecture">Architecture and Construction</option>
    <option value="Arts">Arts, Audio/Video Technology and Communications</option>
    <option value="Government">Government and Public Administration</option>
     <option value="Tourism">Hospitality and Tourism</option>
    <option value="IT">Information Technology</option>
    <option value="Science">Science, Technology</option>
    <option value="Engineering & Mathematics">Engineering and Mathematics</option>
  </select>
  <span class="error"><?php//echo $jobtypeErr;?></span> -->


   <!-- <div style= 'float: right;position: absolute;right:100px; top: 205px;color: blue;'>
  <fieldset>
    <legend><b>PROFLE PICTURE</b></legend>
<center><img src='docs\dp.png' alt='Profile Picture' width='150' height='180'></center><br>
<input type="file" name="image">
</fieldset>
  </div> -->



Trade License: <input type="text" name="license" value="<?php //echo $license;?>">
<span class="error"><?php if(!empty($_GET['licenseErr'])){echo $_GET['licenseErr'];}?></span>

<hr>





  <input type="submit" name="submit" value="Submit">
     <input type="reset">  
</div>
     </fieldset>
</form>
   
  </article>
</section>

<footer>
    <?php include 'controller\footer.php';?>
</footer>

</body>
</html>