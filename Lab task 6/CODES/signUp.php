<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>SIGN UP</title>
</head>
<body>

<header>
    <?php include 'controller\header.php';?>
</header>



<section>  
<!-- <nav></nav> -->
  <article>
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

 <fieldset>
   <legend><h1 style="font-family: monospace; font-size: 28px; color: #004080"><center>Sign Up Your Desired Account</center></h1></legend>

                    <a class="button button1" href='admin.php'>Admin</a><br><br><br>
                    <a class="button button1" href='corporateEmployerReg.php'>Corporate Employer</a><br><br><br>
                    <a class="button button1" href='freelancerEmployer.php'>Freelance Employer</a><br><br><br>
                    <a class="button button1" href='seeker.php'>Seeker</a>
 </fieldset>
  
</form>
   
  </article>
</section>

<footer>
    <?php include 'controller\footer.php';?>
</footer>

</body>
</html>
