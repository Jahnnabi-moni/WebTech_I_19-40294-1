<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
<title>Edit Posted Job</title>
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
   $jstatus="Pending";

   $jtitle1="Managing Director";
   $jdetail1="Developing and executing the company's business strategies, Providing strategic advice to the board and chairperson";
   $salary1="60000";
   $emprequire1="Degree in business, marketing, or a related field, Master's degree preferred,Extensive experience as a Managing Director or in a similar role";
   $vacancy1="1";
   $location1="Road #12, House #21, Motijheel, Dhaka";
   $workplace1="Office";
   $jtype1="Company";
   $jstatus1="Approved";

   $jtitle2="Clerk";
   $jdetail2="Typing reports, letters and other business documents, Monitoring and ordering office supplies, Making travel arrangements for employees' business trips";
   $salary2="10000";
   $emprequire2="Familiarity with office processes, including filing, handling mail and directing telephone calls, Computer literacy and facility with word processing, spreadsheets, data entry and basic accounting software";
   $vacancy2="3";
   $location2="Road #12, House #21, Motijheel, Dhaka";
   $workplace2="Office";
   $jtype2="Company";
   $jstatus2="Approved";



	 ?></header>



<section>

  <article>

    <?php 



if (isset($_SESSION['username'])) {
    echo "<fieldset>
<legend style='color: DarkGreen;'><B>EDIT JOB</B></legend><br>
<table border='1'>
      

      <tr>
        <th>Job Id</th>
        <th>Job Title</th>
        <th>Job Details</th>
        <th>Salary</th>
        <th>Employee Requirement</th>
        <th>Vacancy</th>
        <th>Location</th>
        <th>Workplace</th>
        <th>Job Type</th>
        <th>Job Status</th>
        <th></th>
      </tr>

      <tr>
        <td>1</td>
        <td>".$jtitle."</td>
        <td>".$jdetail."</td>
        <td>".$salary."</td>
        <td>".$emprequire."</td>
        <td>".$vacancy."</td>
        <td>".$location."</td>
        <td>".$workplace."</td>
        <td>".$jtype."</td>
        <td>".$jstatus."</td>
        <td><a href='editJob2.php'>Edit</a></td>
      </tr>

      <tr>
        <td>2</td>
        <td>".$jtitle1."</td>
        <td>".$jdetail1."</td>
        <td>".$salary1."</td>
        <td>".$emprequire1."</td>
        <td>".$vacancy1."</td>
        <td>".$location1."</td>
        <td>".$workplace1."</td>
        <td>".$jtype1."</td>
        <td>".$jstatus1."</td>
        <td><a href='#'>Edit</a></td>
      </tr>

      <tr>
        <td>2</td>
        <td>".$jtitle2."</td>
        <td>".$jdetail2."</td>
        <td>".$salary2."</td>
        <td>".$emprequire2."</td>
        <td>".$vacancy2."</td>
        <td>".$location2."</td>
        <td>".$workplace2."</td>
        <td>".$jtype2."</td>
        <td>".$jstatus2."</td>
        <td><a href='#'>Edit</a></td>
      </tr>

      

     </table>
     <br>

  </fieldset>";


}

 ?>

   
  </article>
</section>

<footer>
  <?php include 'controller\footer.php';?>
</footer>

</body>
</html>
