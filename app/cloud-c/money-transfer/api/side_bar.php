<?php

$authentication = false;
if (isset($_SERVER['PHP_AUTH_USER']))
{
	if ($_SERVER['PHP_AUTH_USER'] == "admin" && $_SERVER['PHP_AUTH_PW'] == "iloveblue")
	{
		$authentication = true;
	}
}
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domainName = "10.0.20.100";
?>
  <div class="content-panel-close">
	<i class="os-icon os-icon-close"></i>
  </div>
  <div class="element-wrapper">

	<h6 class="element-header">
	  Quick Money Transfer
	</h6>
	<div class="element-box-tp">
	  <form action="">
		<div class="row">
		  <div class="col-12">
			<div class="form-group">
			  <label for="">From</label><select class="form-control" style="background-color:#293145" id="account_select">
				<option id="select_1" value=1>
				  Select Acount ...
				</option>
				<?php
					$string = file_get_contents($protocol.$domainName."/files/accounts.json");
					$accounts = json_decode($string, true);
					foreach ($accounts as $key)
					{
						if($key["currency"]=="EUR")
						{
							$symbol = '€';
						}
						else
						{
							$symbol = '£';
						}
						echo '
						<option class="'.$key["currency"].'" id="'.$key["id"].'">
							Acc-'.$key["id"].' ('.$symbol.$key["amount"].')
						</option>';
					}
				?>
			</select>
			</div>
		  </div>
		  <div class="col-12">
			<div class="form-group">
			  <label for="">To</label><select class="form-control" style="background-color:#293145" id="friend_select">
				<option id="select_2" value=1>
				  Select Friend ...
				</option>
				<option id="Vincent" value=2>
				  Vincent
				</option>
				<option id="Bart" value=3>
				  Bart
				</option>
				<option id="Or" value=4>
				  Or
				</option>
				<option id="Sven" value=5>
				  Sven
				</option>
				<option id="Alfredo" value=6>
				  Alfredo
				</option>
				</select>
			</div>
		  </div>
		</div>
		<div class="row">
		  <div class="col-7">
			<div class="form-group">
			  <label for="">Amount</label>
			  <div class="input-group">
				<input class="form-control" placeholder="i.e. 180" type="number" min="1" value="" id="transfer_value">
				<div class="input-group-append">
				  <div class="input-group-text" id="curr">
					EUR
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		<button class="btn btn-primary btn-block btn-lg" data-target="#result" data-toggle="modal" type="button" id="transfer_now" disabled><i class="os-icon os-icon-refresh-ccw"></i><span>Transfer Now</span></button>
	  </form>
	</div>
  </div>
  <div class="element-wrapper compact">

	<h6 class="element-header">
	  Transfer History
	</h6>
	<div class="element-box-tp" id="side_bar_table">
	  <table class="table table-compact smaller text-faded mb-0">
		<thead>
		  <tr>
			<th>
			  To
			</th>
			<th class="text-center">
			  Date
			</th>
			<th class="text-right">
			  Amount
			</th>
		  </tr>
		</thead>
		<tbody>
		<?php
			$string = file_get_contents($protocol.$domainName."/files/money_transfer.json");
			$tranfer_list = json_decode($string, true);
			$i = 0;
			foreach ($tranfer_list as $key)
			{
				if ($i>9)
					continue;
				echo'
				<tr>
				  <td>
					  '.$key["name"].'
				  </td>
				  <td class="text-center text-bright">
					  '.$key["amount"].'
				  </td>
				  <td class="text-right">
					  '.$key["date"].'
				  </td>
			  </tr>';
				$i++;
			}
		?>
		</tbody>
	  </table>
	</div>
  </div>
