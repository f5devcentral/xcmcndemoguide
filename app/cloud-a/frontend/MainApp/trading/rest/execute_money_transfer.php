<?php
$_POST = json_decode(file_get_contents('php://input'), true);

$variables_set ="on";

if(!isset($_POST["account"]))
{
	$variables_set = "off";
}	
if(!isset($_POST["currency"]))
{
	$variables_set = "off";
}	
if(!isset($_POST["amount"]))
{
	$variables_set = "off";
}	
if(!isset($_POST["friend"]))
{
	$variables_set = "off";
}	

if ($variables_set == "off")
{
    header('HTTP/1.1 501 Variables not Set');
    exit(0);
}

sleep(1);

$my_account = $_POST["account"];
$my_amount = $_POST["amount"];
if($_POST["currency"] == 'Euro')
{
	$my_curr_amount = '€'.$_POST["amount"];
}
else
{
	$my_curr_amount = '£'.$_POST["amount"];
}
$my_trans_id = rand(300000000,999999999);

$string = file_get_contents("accounts.json");
$account_list = json_decode($string, true);
if (($account_list[$_POST["account"]]['amount'] - $my_amount)>=0)
{
	$new_amount = $account_list[$_POST["account"]]['amount'] - $my_amount;
	echo '{"name":"'.$_POST["friend"].'", "status":"success","amount":"'.$_POST["amount"].'", "currency":"'.$_POST["currency"].'", "transid":"'.$my_trans_id.'", "msg":"The money transfer has been successfully completed "}';	
	
	$account_list[$_POST["account"]]['amount'] = $new_amount;
	$my_account_file = fopen("accounts.json", "w") or die("Unable to open file!");

	fwrite($my_account_file, json_encode($account_list));	
	fclose($my_account_file);
	

	$money = file_get_contents("money_transfer.json");
	$tranfer_list = json_decode($money, true);

	$myfile = fopen("money_transfer.json", "w") or die("Unable to open file!");

	$my_new_array = array();
	$array =  array (
		  'name' => $_POST["friend"],
		  'amount' => $my_curr_amount,
		  'date' => date("d.m.Y")
		);
	array_push($my_new_array,$array);

	foreach ($tranfer_list as $key)
	{
		array_push($my_new_array,$key);
	}
	fwrite($myfile, json_encode($my_new_array));
	fclose($myfile);

	
}
else
{
	echo '{"name":"'.$_POST["friend"].'", "status":"failed","amount":"'.$_POST["amount"].'", "currency":"'.$_POST["currency"].'", "transid":"'.$my_trans_id.'", "msg":"Not sufficient funds for the money transfer "}';
}




?>
