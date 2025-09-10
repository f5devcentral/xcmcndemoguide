<?php

	if(!empty($_GET['delete']))
	{
		sleep (1);	
		if($_GET['delete'] == "yes")
		{
			$dir = getcwd() . '/contact';	
			foreach (glob($dir."/*.*") as $filename) 
			{
				if (is_file($filename))
					unlink($filename);
			}

		}
	}
		
	$docs_num = 0;
	$dir = getcwd() . '/contact/';
	$scan = scandir($dir);
	/*****  Read the documents in Folder 'files' and store them in an array  *****/


	$scan = scandir($dir);
	$y = sizeof($scan)-2;
	$i=0;
	echo '
	<h4> Total Files: '.$y.' </h4>
	<button class="btn btn-danger" id="delete_all">Delete All Files <i class="picons-thin-icon-thin-0056_bin_trash_recycle_delete_garbage_empty"  style="font-size: 20px;"></i></button>
	<br>
	<br>

	<table class="table table-striped table-bordered">
	<thead>
		<tr>
		  <th width="30px">#</th>
		  <th width="90%">File Name</th>
		</tr>
	 </thead>
		<tbody>';

	if ($y>0)
	{
		foreach($scan as $file)
		{
			if (!is_dir($dir.$file) and !($file=="." || $file==".."))
			{
				$i++;
				echo '		
					<tr>
						<td>
							'.$i.'
						</td>
						<td>
							<div class="value">
							  '.substr($file, 0, -5).'
							</div>
						</td>
					</tr>';
				if ($i>=50)
				{
					echo '		
						<tr>
							<td>
								-
							</td>
							<td>
								<div class="value">
								  Diplaying only the first 50 entries
								</div>
							</td>
						</tr>';	
					exit();	
				}
			}
		}
	}
	
	echo '			
		</tbody>
	</table>
	';
?>