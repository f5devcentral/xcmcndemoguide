<?php 

$doc = [];
$docs_num = 0;
$dir = getcwd() . '/documents/';
$scan = scandir($dir);

echo '{"file_names":[';

foreach($scan as $file)
{
	if (!is_dir($dir.$file) and !($file=="." || $file==".."))
    {
		if ($docs_num>0)
			echo ',';

		array_push ($doc, $file);
		$docs_num ++;
		echo '{"file":"'.$file.'"}';

    }
}

echo '], "total_files":'.$docs_num.'}';

?>

