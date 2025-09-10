<?php

	session_start();

	
	if(empty($_POST['username']) || empty($_POST['password']))
	{
		header("Location: login.php"); /* Redirect browser */
		exit();
	}

	$user=$_POST["username"];
	$pass=$_POST["password"];

//	echo '{"auth":"success"}';
//	exit();
	
	if ($user!="admin" || $pass!="iloveblue")
	{
		if (isset($_SESSION['error_count']))
		{
			$count = $_SESSION['error_count'];
		}
		header("Location: login.php"); /* Redirect browser */
		$_SESSION['error'] = 1;
		$_SESSION['error_count'] = $count+1;
		if ($_SESSION['error_count'] ==1)
		{
			$_SESSION['error_msg'] = "You have entered the wrong username/password. Please try again";
		}
		else
		{
			$_SESSION['error_msg'] = "You have entered the wrong username/password the last ".$_SESSION['error_count']." attempts. Please try again";
			
		}
	}
	else
	{
	
		$_SESSION['loggedin'] = true;
		header("Location: index.php"); /* Redirect browser */
		unset($_SESSION['error']);
		unset($_SESSION['error_msg']);
		unset($_SESSION['error_count']);
		exit();
	}
?>