<?php

function authenticate() {
    header('WWW-Authenticate: Basic realm="Test Authentication System"');
    header('HTTP/1.0 401 Unauthorized');
    echo "You must enter a valid login ID and password to access this resource\n";
    exit;
}

if (!isset($_SERVER['PHP_AUTH_USER']))
{
    header('HTTP/1.1 504 Unauthenticated');
}
else
{
	if ($_SERVER['PHP_AUTH_USER'] == "admin" && $_SERVER['PHP_AUTH_PW'] == "iloveblue")
	{
		$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
		$domainName = "backend:8080";

		sleep(1);
		$string = file_get_contents($protocol.$domainName."/files/stocks.json");
		$stocks = json_decode($string, true);

		$string = file_get_contents($protocol.$domainName."/files/stock_price.json");
		$stock_price = json_decode($string, true);

		$amazon_stock_price = $stock_price['AMZN']['stock_price'];
		$amazon_stock_value = $stocks['AMZN']['value'];
		$amazon_stock_qty =  $stocks['AMZN']['qty'];
		$amazon_stock_diff = $stock_price['AMZN']['diff'];

		$microsoft_stock_price = $stock_price['MSFT']['stock_price'];
		$microsoft_stock_value = $stocks['MSFT']['value'];
		$microsoft_stock_qty =  $stocks['MSFT']['qty'];
		$microsoft_stock_diff = $stock_price['MSFT']['diff'];

		$google_stock_price = $stock_price['GOOGL']['stock_price'];
		$google_stock_value = $stocks['GOOGL']['value'];
		$google_stock_qty =  $stocks['GOOGL']['qty'];
		$google_stock_diff = $stock_price['GOOGL']['diff'];

		$f5_stock_price = $stock_price['FFIV']['stock_price'];
		$f5_stock_value = $stocks['FFIV']['value'];
		$f5_stock_qty =  $stocks['FFIV']['qty'];
		$f5_stock_diff = $stock_price['FFIV']['diff'];




		$today = 28000;
		$yesterday = 27800;
		$week = 27700;
		$month = 27400;
		$year = 27000;
		$current = $f5_stock_value + $google_stock_value  + $microsoft_stock_value + $amazon_stock_value;

		$f5_percentage = round(($f5_stock_value / $current )*100,2);
		$google_percentage = round(($google_stock_value / $current )*100,2);
		$microsoft_percentage = round(($microsoft_stock_value / $current )*100,2);
		$amazon_percentage = round(($amazon_stock_value / $current )*100,2);

		$year_profit = round((($current - $year)/$year)*100,2) ;
		$yesterday_profit = round((($current - $yesterday)/$year)*100,2) ;
		$week_profit = round((($current - $week)/$year)*100,2) ;
		$month_profit = round((($current - $month)/$year)*100,2) ;


		$current = $f5_stock_value + $google_stock_value  + $microsoft_stock_value + $amazon_stock_value;
		$year = $current - $year;
		$yesterday = $current - $yesterday ;
		$week = $current - $week  ;
		$month = $current - $month ;

		$diff = round((($current - $today)/$today)*100,2);

		echo '{"year":'.$year.',"month":'.$month.',"week":'.$week.',"yesterday":'.$yesterday.',"year_profit":'.$year_profit.',"month_profit":'.$month_profit.',"week_profit":'.$week_profit.',"yesterday_profit":'.$yesterday_profit.',"balance":'.$current.', "profit":'.$diff.', "amazon":{"price":'.$amazon_stock_price.',"balance":'.$amazon_stock_value.',"qty":'.$amazon_stock_qty.',"profit":'.$amazon_stock_diff.',"percentage":'.$amazon_percentage.'}, "microsoft":{"price":'.$microsoft_stock_price.',"balance":'.$microsoft_stock_value.',"qty":'.$microsoft_stock_qty.',"profit":'.$microsoft_stock_diff.',"percentage":'.$microsoft_percentage.'}, "google":{"price":'.$google_stock_price.',"balance":'.$google_stock_value.',"qty":'.$google_stock_qty.',"profit":'.$google_stock_diff.',"percentage":'.$google_percentage.'},  "f5":{"price":'.$f5_stock_price.',"balance":'.$f5_stock_value.',"qty":'.$f5_stock_qty.',"profit":'.$f5_stock_diff.',"percentage":'.$f5_percentage.'}}';
	}
	else
	{
		header('HTTP/1.1 505 Wrong Credentials');
	}

}

?>
