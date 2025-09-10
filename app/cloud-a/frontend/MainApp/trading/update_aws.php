<?php

	if(!isset($_POST["region"]) || $_POST["region"] =="" )
	{
		header('HTTP/1.1 500 No Variables');
		exit();
	}
	else
		$region = $_POST["region"];

	if(!isset($_POST["bucketName"]) || $_POST["bucketName"] =="" )
	{
		header('HTTP/1.1 500 No Variables');
		exit();
	}
	else
		$bucketName = $_POST["bucketName"];	
	
	if(!isset($_POST["IAM_KEY"]) || $_POST["IAM_KEY"] =="" )
	{
		header('HTTP/1.1 500 No Variables');
		exit();
	}
	else
		$IAM_KEY = $_POST["IAM_KEY"];

	if(!isset($_POST["IAM_SECRET"]) || $_POST["IAM_SECRET"] =="" )
	{
		header('HTTP/1.1 500 No Variables');
		exit();
	}
	else
		$IAM_SECRET = $_POST["IAM_SECRET"];

$string = '{"region":"'.$region.'","bucketName":"'.$bucketName.'","IAM_KEY":"'.$IAM_KEY.'","IAM_SECRET":"'.$IAM_SECRET.'"}';

$my_file = fopen("aws.json", "w") or die("Unable to open file!");

fwrite($my_file, $string);	
fclose($my_file);
header("Location: /config.php"); /* Redirect browser */
exit();

?>
