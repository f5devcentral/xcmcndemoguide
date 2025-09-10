<?php
	$string = file_get_contents("trading/aws.json");
	$aws = json_decode($string, true);
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
	
	require 'amazon/aws-autoloader.php';
	
	use Aws\S3\S3Client;
	use Aws\S3\Exception\S3Exception;
	// AWS Info

	$bucketName = $aws['bucketName'];
	$IAM_KEY = $aws['IAM_KEY'];
	$IAM_SECRET =  $aws['IAM_SECRET'];
	$region = $aws['region'];
	// Connect to AWS
	try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
				),
				'version' => 'latest',
				'region'  => $region
			)
		);
	} catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("Error: " . $e->getMessage());
	}
	
	// For this, I would generate a unqiue random string for the key name. But you can do whatever.
	$keyName = 'contact-form/'.$lname."-".$timestamp.'.doc';
	$pathInS3 = 'https://s3.'.$region.'.amazonaws.com/' . $bucketName . '/' . $keyName;
	// Add it to S3
	try {
		// Uploaded:
//		$file = $_FILES["fileToUpload"]['tmp_name'];
		$s3->putObject(
			array(
				'Bucket'=>$bucketName,
				'Key' =>  $keyName,
				//'SourceFile' => $file,
				'Body'   => $full_msg,
				'StorageClass' => 'REDUCED_REDUNDANCY'
			)
		);
	} catch (S3Exception $e) {
		die('Error:' . $e->getMessage());
	} catch (Exception $e) {
		die('Error:' . $e->getMessage());
	}
	header("Location: register_msg.php?fname=".$fname."&lname=".$lname."&email=".$email); /* Redirect browser */
	// Now that you have it working, I recommend adding some checks on the files.
	// Example: Max size, allowed file types, etc.
?>
