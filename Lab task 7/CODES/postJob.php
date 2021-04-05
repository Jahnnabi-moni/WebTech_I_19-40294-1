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
<legend><b>POST JOB</b></legend><!-- <div style="float: left; text-align: right;"> -->

<div class="row">
    <div class="col-25">
      <label for="jtitle"><b>Job Title</b></label>
    </div>
    <div class="col-75">
      <input type="text" id="jtitle" name="jtitle" placeholder="Job title..">
    </div>
  </div>
  <span class="error"><?php echo $jtitleErr;?></span>
  <br><hr>

  <div class="row">
    <div class="col-25">
      <label for="jobdetail"><b>Job Details</b></label>
    </div>
    <div class="col-75">
      <textarea id="jobdetail" name="jobdetail" placeholder="Write something.." rows="4"></textarea>
    </div>
  </div>
  <span class="error"><?php echo $jobdetailErr;?></span>
  <br><hr>

<div class="row">
    <div class="col-25">
      <label for="salary"><b>Salary</b></label>
    </div>
    <div class="col-75">
      <input type="text" id="salary" name="salary" placeholder="salary..">
    </div>
  </div>
  <span class="error"><?php echo $salaryErr;?></span>
  <br><hr>

  <div class="row">
    <div class="col-25">
      <label for="emprequire"><b>Employee Requirement</b></label>
    </div>
    <div class="col-75">
      <textarea id="emprequire" name="emprequire" placeholder="Write something.." rows="4"></textarea>
    </div>
  </div>
  <span class="error"><?php echo $emprequireErr;?></span>
  <br><hr>

  <div class="row">
    <div class="col-25">
      <label for="vacancy"><b>Vacancy</b></label>
    </div>
    <div class="col-75">
      <input type="text" id="vacancy" name="vacancy" placeholder="vacancy..">
    </div>
  </div>
  <span class="error"><?php echo $vacancyErr;?></span>
  <br><hr>

  <div class="row">
    <div class="col-25">
      <label for="location"><b>Employee Requirement</b></label>
    </div>
    <div class="col-75">
      <textarea id="location" name="location" placeholder="Write something.." rows="4"></textarea>
    </div>
  </div>
  <span class="error"><?php echo $locationErr;?></span>
  <br><hr>

  <div class="row">
      <div class="col-25">
        <label for="workplace"><b>Workplace</b></label>
      </div>
      <div class="col-75">
        <select id="workplace" name="workplace">
          <option value="" disabled selected>Select a Workplace</option>
          <option value="Office">Office</option>
          <option value="Home">Home</option>
          <option value="Others">Others</option>
        </select>
      </div>
    </div>
  <span class="error"><?php echo $workplaceErr;?></span>
  <br><hr>

<div class="row">
      <div class="col-25">
        <label for="jobtype"><b>Job Type</b></label>
      </div>
      <div class="col-75">
        <select id="jobtype" name="jobtype">
          <option value="" disabled selected>Select A Job Type</option>
          <option value="Government">Government</option>
          <option value="Semi Government">Semi Government</option>
          <option value="Private Company">Private Company</option>
          <option value="Private">Private</option>
          <option value="NGO">NGO</option>
          <option value="International Agencies">International Agencies</option>
          <option value="Others">Others</option>
        </select>
      </div>
    </div>
  <span class="error"><?php echo $jobtypeErr;?></span>
  <br><br>
  <hr>
 
  <input type="submit" class="registerbtn" name="submit" value="Submit"> <input type="reset" class="registerbtn" value="Reset"><!-- </div> -->
</fieldset>
</form>

  </article>
</section>

<footer>
    <?php include 'controller\footer.php';?>
</footer>
</body>
</html>