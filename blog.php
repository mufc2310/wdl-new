<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
	<title>Reach me`</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li>
					<a href="index.html" title="About ME">Home</a>
				</li>
				<li>
					<a href="resume.html" title="RESUME!">Resume!</a>
				</li>
				<li>
					<a href="blog.html" title="My Blog">BLOG</a>
				</li>
				<li>
					<a href="gallery.html" title="Gallery">Gallery</a>
				</li>
				<li>
					<a href="contact.html" title="Contact">Contact</a>
				</li>
			</ul>
		</nav>
	</header>

	<main>
		<?php
		
		
			if($_POST){
				if($_POST['logout']=="yes")
				{
					session_destroy();
				}
			}
			if(isset($_SESSION['user']))
			{
				echo "<h1>Welcome $_SESSION[user]!!</h1>
				Name : $_SESSION[user]<br/>
				College : $_SESSION[college]<br/>
				Class : $_SESSION[class]<br/>";

				echo '<br/>
				<form method="post" action="blog.php">
				   	<input type="hidden" name="logout" value="yes"/>
					<input type="submit"  value="Logout"/>
				</form>';

			}
			else
			{
				header("Refresh:1, url=login.php");
			}
		?>
	</main>



	<footer>
		<div>
			&copy; All rights reserved - Mohd Salman Ansari
		</div>
	</footer>

</body>
</html>