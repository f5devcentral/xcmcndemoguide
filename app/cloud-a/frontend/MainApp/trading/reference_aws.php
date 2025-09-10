<?php

	$string = file_get_contents("aws.json");
	$aws = json_decode($string, true);


	$timestamp = round(microtime(true) * 1000);
	if(empty($_GET['email']) || empty($_GET['user']))
	{
		header('HTTP/1.1 500 No Variables');
		exit();
	}
	
	$fname = $_GET['user'];
	$email = $_GET['email'];
	
	$full_msg = "Email: " . $email . "\nRegisted User: " . $user;
	
	require '../amazon/aws-autoloader.php';
	
	use Aws\S3\S3Client;
	use Aws\S3\Exception\S3Exception;
	// AWS Info
	$bucketName = 'emea-forum';
	$IAM_KEY = '';
	$IAM_SECRET = '';
	$region = 'eu-west-1';

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
	$keyName = 'cc_reference/'.$email."-".$timestamp.'.doc';
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
	echo $timestamp;
	// Now that you have it working, I recommend adding some checks on the files.
	// Example: Max size, allowed file types, etc.
?>
