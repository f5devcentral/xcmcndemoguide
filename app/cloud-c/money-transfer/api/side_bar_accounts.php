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
		<option class="'.$key["currency"].'" id="'.$key["id"].'" value=2>
			Acc-'.$key["id"].' ('.$symbol.$key["amount"].')
		</option>';
	}
?>
