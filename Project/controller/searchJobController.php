<?php
require_once '../model/model.php';
$q=$_GET["q"];
    try {
    	
    	$allSearchedJobs = searchJob($q);

    	echo "<br><center><table border='1'>
	<thead>
		<tr>
			<th>Job ID</th>
			<th>Job Title</th>
			<th>Company Name</th>
			<th>Job Details</th>
			<th>Salary</th>
			<th>EmployeeRequirement</th>
			<th>Vacancy</th>
			<th>Location</th>
			<th>Workplace</th>
			<th>Job Type</th>
			<th>Posted By</th>
		</tr>
	</thead>
	<tbody>";
		foreach ($allSearchedJobs as $i => $job):
			echo "<tr>
				<td>".$job['Job_id']."</td>
				<td>".$job['JobTitle']."</td>
				<td>".$job['cname']."</td>
				<td>".$job['JobDetail']."</td>
				<td>".$job['Salary']."</td>
				<td>".$job['EmployeeRequirement']."</td>
				<td>".$job['Vacancy']."</td>
				<td>".$job['Location']."</td>
				<td>".$job['Workplace']."</td>
				<td>".$job['JobType']."</td>
				<td>".$job['PostedBy']."</td>
			</tr>";
		endforeach;
		
	echo "</tbody>
</table></center>";

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
