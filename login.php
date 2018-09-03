<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
	<title>Login page</title>
	<style type="text/css">
		#login-box{
			width: 25%;
			margin: 7em auto;
			border: 1px solid black;
			border-radius: 5px;
			padding: 10px;
		}

		#login-box > input{
			display: block;
			width: 90%;
			margin: 0 auto;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<?php
		if($_POST){
			$username=$_POST['username'];
			$pass=$_POST['pass'];
			if($username=="Salman" && $pass=="123456")
			{
				echo '<span>Login Successful!
				 waiting for Blog page</span>';
				 $_SESSION['user']=$username;
				 $_SESSION['college']="AIKTC";
				 $_SESSION['class']="TE";
				 header("Refresh:2, url=blog.php");
			}
			else
			{
				echo '<span> Incorrect Username Or Password!</span>';

			}
		}
	?>
	<form method="post" action="login.php">
		<div id="login-box">
			<span>Log In</span>
			<input type="text" name="username" id="username" placeholder="Username" required="required"/>
			<input type="password" name="pass" id="pass" placeholder="Password" required="required"/>
			<input type="submit" name="" value="Log In"/>
		</div>
	</form>

</body>
</html>