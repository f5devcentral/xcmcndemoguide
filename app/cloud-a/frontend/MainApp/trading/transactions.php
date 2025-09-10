<?php
function authenticate() {
    header('WWW-Authenticate: Basic realm="Test Authentication System"');
    header('HTTP/1.0 401 Unauthorized');
    echo "You must enter a valid login ID and password to access this resource\n";
    exit;
}

		$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
		$domainName = $_SERVER['HTTP_HOST'];
    	$backend = "backend:8080";

		echo '
			<div class="element-wrapper compact">
				<h6 class="element-header">
				  Last Transactions
				</h6>
				<div class="element-box-tp">
				  <table class="table table-clean">
					<tbody>';

						//$string = file_get_contents($protocol.$domainName."/files/stock_transactions.json");
						$url = $protocol.$backend.'/files/stock_transactions.json';
						$ch = curl_init($url);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
						$stock_transactions_result = curl_exec($ch);
						$stock_tranfer_list = json_decode($stock_transactions_result, true);
						$i = 0;
						foreach ($stock_tranfer_list as $key)
						{
							if ($key["action"] == "sell")
							{
								$color = "text-danger";
								$sign = "-";
							}
							else
							{
								$color = "text-success";
								$sign = "+";
							}
							if ($i>7)
								continue;
							echo'<tr>
							  <td>
								<div class="value">
								  '.$key["name"].' ('.$key["symbol"].')
								</div>
								<span class="sub-value">'.$key["date"].'</span>
							  </td>
							  <td class="text-right">
								<div class="value '.$color.'">
								  <b>'.$key["price"].'</b> <br> '.$sign.''.$key["qty"].' Stocks
								</div>
							  </td>
							</tr>';
							$i++;

						}


		echo	'
				  </tbody></table>
				</div>
			  </div>';
