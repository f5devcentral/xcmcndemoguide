<?php

if(!empty($_FILES)) 
{
	echo $_FILES["fileToUpload"]["name"];
	echo "<br>";
	$uploadOk = 1;
	$target_dir = getcwd()."/documents/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	if($_FILES["fileToUpload"]["size"] < 1)
	{
		echo "File too small";
		exit();
	}	
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
	{
        
		echo "File uploaded";
    } 
	else {
        Header ("Location:index.php?error=3");
		exit();
    }

}
else
{
echo "No file upload";
}	
?>