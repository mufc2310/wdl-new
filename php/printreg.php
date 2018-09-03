<!DOCTYPE html>
<html>
<head>
	<title>Registration Info</title>
	 <style>
            table{
                border: 2px solid black;
            }
            table td{
                padding: 2px;
            }
            table tr:nth-child(odd){
                background-color: #f1f8ff;
            }
      </style>
</head>
<body>
<?php

	require_once 'functions.php';
	if($_POST){
		$rollno=$_POST['rollno'];
		$name=$_POST['sname'];
		$gender=$_POST['gender'];
		$address=$_POST['address'];
		$dob=$_POST['dob'];
		$sem=$_POST['sem'];
		$semail=$_POST['semail'];
		$dept=$_POST['dept'];
		$batch=$_POST['batch'];
		if(!empty($rollno)&&!empty($name)&&!empty($gender)&&!empty($address)&&!empty($dob)&&!empty($sem)
			&&!empty($semail)&&!empty($dept)&&!empty($batch)){
				?>

				<table>
					<tr>
						<td>Roll No</td>
						<td><?php echo fix_rollno($rollno);?></td>
					</tr>

					<tr>
						<td>Name</td>
						<td><?php echo fix_name($name);?></td>
					</tr>

					<tr>
						<td>Gender</td>
						<td><?php echo $gender;?></td>
					</tr>

					<tr>
						<td>Address</td>
						<td><?php echo fix_address($address);?></td>
					</tr>

					<tr>
						<td>DOB</td>
						<td><?php echo $dob;?></td>
					</tr>

					<tr>
						<td>Semester</td>
						<td><?php echo $sem;?></td>
					</tr>

					<tr>
						<td>Email</td>
						<td><?php echo fix_email($semail);?></td>
					</tr>

					<tr>
						<td>Department</td>
						<td><?php echo $dept;?></td>
					</tr>

					<tr>
						<td>Batch</td>
						<td><?php echo $batch;?></td>
					</tr>
				</table>
	<?php		
		}
		else{
			echo "<span>Something is Missing!</span>";
			header('Refresh:2, url=../registration.html');
		}

		}
		else{
			header('Refresh:2 , url=../registration.html');
		}

	?>

</body>
</html>