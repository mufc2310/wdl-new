<!DOCTYPE html>
<html>
<head>
	<title>My php example at AIKTC</title>
	<meta charset="utf-8">
	<meta name="viewport">
</head>
<body>

	<?php 

		echo "<h1>Welcome to PHP</h1>";
		if($_POST){
			$username=$_POST['username'];
			$brand=$_POST['brand'];
			echo "Thankyou , $username you have voted for $brand";

		}
		else{
			echo <<<_END
	

		<form method="post" action="myexample.php">
			<br><label for="user">User Name:</label>
			<input type="text" name="username"/><br>
			<br><label><input type="radio" name="brand" value="apple">Apple</label><br>
			<label><input type="radio" name="brand" value="Samsung">Samsung</label><br>
			<label><input type="radio" name="brand" value="Nokia">Nokia</label><br>
			<label><input type="radio" name="brand" value="HTC">HTC</label><br>
			<label><input type="radio" name="brand" value="xiaomi">xiaomi</label><br>
			<input type="submit" name="hello" value="submit">
		</form>
_END;

		
		}
	?>





</body>
</html>