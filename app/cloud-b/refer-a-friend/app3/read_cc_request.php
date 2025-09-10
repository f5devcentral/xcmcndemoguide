<?php		

	if(!empty($_GET['delete']))
	{
		sleep (1);	
		if($_GET['delete'] == "yes")
		{
			$dir = getcwd() . '/files';	
			foreach (glob($dir."/*.*") as $filename) 
			{
				if (is_file($filename))
					unlink($filename);
			}

		}
	}
		
	$docs_num = 0;
	$dir = getcwd() . '/files/';
	$scan = scandir($dir);
	/*****  Read the documents in Folder 'files' and store them in an array  *****/


	$scan = scandir($dir);

		
	echo '{"file_names":[';

	foreach($scan as $file)
	{
		if (!is_dir($dir.$file) and !($file=="." || $file==".."))
		{
			if ($docs_num>0)
				echo ',';
			
			$docs_num ++;
			echo '{"file":"'.substr($file, 0, -5).'"}';

		}
	}

	echo '], "total_files":'.$docs_num.'}';
		
?>