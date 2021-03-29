<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<style>
.error {color: #FF0000;}
</style>
	<title>Post Jobs</title>
</head>
<body>
<?php 
session_start();
	echo "<div>";include 'controller/header.php';echo "</div>";
 ?>
  <?php require 'controller/postJobController.php';
  ?>
<section>
  <article>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <fieldset>
<legend><b>POST JOB</b></legend><div style="float: left; text-align: right;">  
  Job Title: <input type="text" name="jtitle">
  <span class="error"><?php echo $jtitleErr;?></span>
  <br><hr>
  Job Details:<textarea name="jobdetail" rows="4" cols="30"></textarea>
  <span class="error"><?php echo $jobdetailErr;?></span>
  <br><hr>
  Salary: <input type="text" name="salary">
  <span class="error"><?php echo $salaryErr;?></span>
  <br><hr>
  Employee Requirement: <textarea name="emprequire" rows="5" cols="30"></textarea>
  <span class="error"><?php echo $emprequireErr;?></span>
  <br><hr>
  Vacancy: <input type="text" name="vacancy">
  <span class="error"><?php echo $vacancyErr;?></span>
  <br><hr>
  Location: <textarea name="location" rows="2" cols="30"></textarea>
  <span class="error"><?php echo $locationErr;?></span>
  <br><hr>
  Workplace:
  <select name="workplace">
  <option name="workplace" value="" disabled selected>Select a Workplace</option>
  <option name="workplace" value="Office">Office</option>
  <option name="workplace" value="Home">Home</option>
  <option name="workplace" value="Others">Others</option>
  </select>
  <span class="error"><?php echo $workplaceErr;?></span>
  <br><hr>Job Type:
  <select name="jobtype">
  <option name="jobtype" value="" disabled selected>Select A Job Type</option>
  <option name="jobtype" value="Government">Government</option>
  <option name="jobtype" value="Semi Government">Semi Government</option>
  <option name="jobtype" value="Private Company">Private Company</option>
  <option name="jobtype" value="Private">Private</option>
  <option name="jobtype" value="NGO">NGO</option>
  <option name="jobtype" value="International Agencies">International Agencies</option>
  <option name="jobtype" value="Others">Others</option>
  </select>
  <span class="error"><?php echo $jobtypeErr;?></span>
  <br><br>
  <hr>
 
  <input type="submit" name="submit" value="Submit"> <input type="reset" value="Reset"></div>
</fieldset>
</form>

  </article>
</section>

<footer>
    <?php include 'controller\footer.php';?>
</footer>
</body>
</html>