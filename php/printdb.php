<!DOCTYPE html>
<html>
<head>
	<title>Registration Info</title>
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

			//inserting into db

		$link=mysqli_connect('localhost','root','test','AIKTC');
		if(!$link){
			echo "<br> unable connect to database";
			//.mysqli_connect_error();
		}
		$query=Insert into Students values('$rollno','$name','gender','$address','dob','sem','semail','dept','batch');

		$result=mysqli_query($link,$query);
		if(!result){
			echo "<br>"mysqli_error($link);
		}
		else{
			echo "<br><h4>Data Succesfully Inserted</h4>";
		}

		$query="select * from Students";
        $result=  mysqli_query($link, $query);
        mysqli_close($link);
        if(!$result){
            echo "<br>".mysqli_error($link);
        }
        else{
        	?>
        	<table>
        		<?php
        		while($row=mysqli_fetch_array($result)){
        			?>


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
			<?php

        		}
          ?></table>
          <?php

        }
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