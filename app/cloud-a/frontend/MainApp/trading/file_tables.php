<?php 

if ((isset($_GET['delete']) && $_GET['delete'] == true))
{
	$my_file = getcwd() . '/documents/'. $_GET['delete'];
	sleep(2);
	if (file_exists($my_file)) { unlink ($my_file); }	
	
}

if ((isset($_GET['add']) && $_GET['add'] == true))
{
	sleep(1);
	
}

$doc = [];
$docs_num = 0;
$dir = getcwd() . '/documents/';
$scan = scandir($dir);


foreach($scan as $file)
{
	if (!is_dir($dir.$file) and !($file=="." || $file==".."))
    {
		$docs_num ++;
    }
}

if ($docs_num>0)
{
	echo '
	<table class="table table-clean">
		<tbody>';

	foreach($scan as $file)
	{
		if (!is_dir($dir.$file) and !($file=="." || $file==".."))
		{
			echo '		
					<tr>
						<td>
							<div class="value">
							  '.$file.'
							</div>
						</td>
						<td class="text-right text-danger">
							<span class="profile-tile-box my_file_delete" id="'.$file.'"><i class="picons-thin-icon-thin-0056_bin_trash_recycle_delete_garbage_empty"  style="font-size: 20px;"></i></span>
						</td>
					</tr>';
		}
	}
	echo '			
		</tbody>
	</table>
	';
}
else
{
	echo "<img src='img/filenotfound404.jpg' height=128>";
	
}


?>

