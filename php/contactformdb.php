<?php
require_once 'functions.php';
if($_POST)
{

	$email= fix_email($_POST['semail']);
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	if(!empty($email)&&!empty($subject)&&!empty($message))
	{
		$link=mysqli_connect('localhost','root','root','salman');
		if(!$link){
            echo '<br>Unable to connect to Database.'.mysqli_connect_error();
        }

        $query="Insert into form values('$email','$subject','$message')";
        $result=mysqli_query($link,$query);

        if(!$result){
        	echo "<br>".mysqli_error($link);
        }
        else{
        	echo "<script>alert('Your Message is Sent Successfully..')</script>";
			echo "<script>window.open('../contact.html','_self');</script>";
        }
        mysqli_close($link);
	}

	else{
		echo "Something is missing";
		header('Refresh:3, url=../contact.html');
	}
}

//main if ka else.
else{
	echo "not post";
}

?>