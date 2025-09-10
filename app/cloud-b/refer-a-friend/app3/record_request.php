<?php

	$data = file_get_contents('php://input');
	$contents = json_decode($data, true);
	if ( !is_Array($contents))
	{
		header('HTTP/1.1 501 wrong format');
		exit();		
	}

	
	if(!array_key_exists('user_name', $contents) || !array_key_exists('bank_id', $contents) || !array_key_exists('email', $contents))
	{
		header('HTTP/1.1 500 No Variables');
		exit();
	}

	$user_name =$contents['user_name'];
	$bank_id = $contents['bank_id'];
	$email = $contents['email'];
	$filename = $contents['email'].".json";
	
	$sql_injection1_2='"$ne"';
	$sql_injection2_2='}';
	
	$sql_injection3_4="' or";
	$sql_injection4_4='=';

	$dir = getcwd() . '/files/';
	$filename = $dir."/".$contents['email'].".json";
	
	if (strpos($email,$sql_injection1_2) !== false && strpos($email,$sql_injection2_2) !== false)
	{
		$doc = [];
		$scan = scandir($dir);
		foreach($scan as $file)
		{
			if (!is_dir($dir.$file) and !($file=="." || $file==".."))
			{
				array_push ($doc, substr($file, 0, -5));
			}
		}
		echo '{"status":"failure", "reason":"'.implode("<br>",$doc).'"}';
		exit();
	}


	if (strpos($email,$sql_injection3_4) !== false && strpos($email,$sql_injection4_4) !== false)
	{
		$doc = [];
		$scan = scandir($dir);
		foreach($scan as $file)
		{
			if (!is_dir($dir.$file) and !($file=="." || $file==".."))
			{
				array_push ($doc, substr($file, 0, -5));
			}
		}
		echo '{"status":"failure", "reason":"'.implode("<br>",$doc).'"}';
		exit();
	}



	
	if (file_exists ($filename))
	{
		$string = file_get_contents($filename);
		$details = json_decode($string, true);	
		if($details['user_name']==$user_name)
		{
			echo '{"status":"failure", "reason":"You have already registered this referral"}';
			exit();
		}				
		else
		{
			echo '{"status":"failure", "reason":"Someone else has already registered this referral"}';
			exit();
		}	

	}
	else
	{
		
		$myfile = fopen($filename, "w") or die("Unable to open file!");
		$txt = '{"email":"'.$email.'","bank_id":"'.$bank_id.'","user_name":"'.$user_name.'"}';
		fwrite($myfile, $txt);
		fclose($myfile);
		echo '{"status":"success", "reason":"Referral is successfully recorded"}';
		exit();
	}



		
		

?>

