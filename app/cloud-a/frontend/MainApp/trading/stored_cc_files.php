<?php

	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	$domainName = $_SERVER['HTTP_HOST'];	
	if(!empty($_GET['delete']))
	{
		if($_GET['delete'] == "yes")
			$url = $protocol.$domainName.'/app3/read_cc_request.php?delete=yes';
		else
			$url = $protocol.$domainName.'/app3/read_cc_request.php';
	}
	else
		$url = $protocol.$domainName.'/app3/read_cc_request.php';

//	echo $url;
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
	$result = curl_exec($ch);
	$info = curl_getinfo($ch);
	curl_close($ch);
	
	
	if ($info["http_code"] == "200")
	{
		$data = json_decode($result, true);
//		print_r ($result);
//		exit();
	}
	else
	{
		$data = [];
		$data['total_files']= 0;

		
	}	

	$i=0;
	echo '
	<h4> Total Files: '.$data['total_files'].' </h4>
	<button class="btn btn-danger" id="delete_all">Delete All Files <i class="picons-thin-icon-thin-0056_bin_trash_recycle_delete_garbage_empty"  style="font-size: 20px;"></i></button>
	<br>
	<br>

	<table class="table table-striped table-bordered" style="width:50%">
	<thead>
		<tr>
		  <th width="30px">#</th>
		  <th width="90%">File Name</th>
		</tr>
	 </thead>
		<tbody>';

	if ($data['total_files']>0)
	{
		foreach($data['file_names'] as $key)
		{
			$i++;
			echo '		
				<tr>
					<td>
						'.$i.'
					</td>
					<td>
						<div class="value">
						  '.$key['file'].'
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
	
	echo '			
		</tbody>
	</table>
	';
?>