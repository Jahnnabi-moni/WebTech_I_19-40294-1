<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
<title>Edit Page</title>
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
<legend><B>EDIT JOB</B></legend><div style='float: left; text-align: right;'> Job Title: <input type='text' name='jtitle' value=".$jtitle."><hr>
  <br>Job Details:<textarea name='jobdetail' rows='4' cols='30' >".$jdetail."</textarea><hr>
  <br>
  Salary: <input type='text' name='salary' value=".$salary." ><hr>
  <br>
  Employee Requirement: <textarea name='emprequire' rows='5' cols='30'>".$emprequire."</textarea><hr>
  <br>
  Vacancy: <input type='text' name='vacancy' value= ".$vacancy."><hr>
  <br>
  Location: <textarea name='location' rows='2' cols='30'>".$location."</textarea><hr>
  <br>

  Workplace:

  <select name='workplace'>
  <option name='workplace' value='' disabled selected >Select a Workplace</option>
  <option name='workplace' value='Office' selected>Office</option>
  <option name='workplace' value='Home'>Home</option>
  <option name='workplace' value='Others'>Others</option>
  </select>
  <hr>
  <input type='submit' name='Save' value='Save'>
  
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
