<?php
	
	$timestamp = round(microtime(true) * 1000);
	if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['message']))
	{
		header("Location: index.html"); /* Redirect browser */
		exit();
	}
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$msg = $_POST['message'];
	
	$full_msg = "First Name: " . $fname . "\nLast Name: " . $lname . "\nEmail: " . $email . "\nMsg: " . $msg;
	
	
	$dir = getcwd() . '/contact/';
	$filename = $dir."/".$fname."_".$lname."_".$email."_".$timestamp.".json";

	$myfile = fopen($filename, "w") or die("Unable to open file!");
	
	fwrite($myfile, $full_msg);
	fclose($myfile);
	header("Location: register_msg.php?fname=".$fname."&lname=".$lname."&email=".$email);
	exit();	
	
?>
