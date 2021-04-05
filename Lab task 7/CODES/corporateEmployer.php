<?php
session_start();
if (isset($_SESSION['username'])) { ?>
  
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Dashboard</title>
</head>
<body>



<header>

  <?php
  
   include 'controller\header.php';?></header>
   <?php //require 'controller\loginController.php';?>


<section>  
  <article>
  
<fieldset>






    <legend><h1><center> Welcome <?php echo $_SESSION['username']?></center></h1></legend>
                    <a class="button1 button2" href='postJob.php'>Post Job</a><br><br><br>
                    <a class="button1 button2" href='postedJobStatus.php'>Posted Job Status</a><br><br><br>
                    <a class="button1 button2" href='editPostedJob.php'>Edit Posted Job</a><br><br><br>
                    <a class="button1 button2" href='deletePostedJob.php'>Delete Job</a>
 <!--  "<h2 align='center'> Welcome ".$_SESSION['username']."</h2>"; -->





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
