<?php
function authenticate() {
    header('WWW-Authenticate: Basic realm="Test Authentication System"');
    header('HTTP/1.0 401 Unauthorized');
    echo "You must enter a valid login ID and password to access this resource\n";
    exit;
}

if (!isset($_SERVER['PHP_AUTH_USER']))
{
    authenticate();
} 
else 
{
	if ($_SERVER['PHP_AUTH_USER'] == "admin" && $_SERVER['PHP_AUTH_PW'] == "iloveblue")
	{
		
		$string = file_get_contents("rest/money_transfer.json");
		echo $string;
	}
	else
	{
		header('HTTP/1.0 403 Forbidden');
		die ("Wrong Username/Password");
	}
}
	