<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
<title>Delete Job</title>
</head>
<body>




<header>

	<?php
	session_start();
	 include 'controller\header.php';
	 $jtitle="Manager";
   $jdetail="Scheduling employees, training new employees ,hiring new employees";
   $salary="25000";
   $emprequire="Graduate from any university, be a team player, Experience as an store manager at least 1-2 years";
   $vacancy="2";
   $location="Road #12, House #21, Motijheel, Dhaka";
   $workplace="Office";
   $jtype="Company";
   $jstatus="valid";
   



	 ?></header>



<section>
   
  <article>

    <?php 



if (isset($_SESSION['username'])) {
    echo "<fieldset>
<legend><B>DELETE JOB</B></legend><div style='float: left; text-align: left;color:blue'> Job Title: ".$jtitle."<hr>
  <br>Job Details:".$jdetail."<hr>
  <br>
  Salary: ".$salary." <hr>
  <br>
  Employee Requirement: ".$emprequire."<hr>
  <br>
  Vacancy: ".$vacancy."<hr>
  <br>
  Location:".$location."<hr>
  <br>
  Workplace:".$workplace."<hr>
  
  <input type='submit' name='delete' value='Delete'>
  
  </div></fieldset>";


}

 ?>

   
  </article>
</section>

<footer>
  <?php include 'controller\footer.php';?>
</footer>

</body>
</html>
