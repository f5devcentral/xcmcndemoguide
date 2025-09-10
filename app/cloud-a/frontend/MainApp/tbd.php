<?php 

$string = $_GET['email'];
 
//echo strpos($string, ":'");

$string = substr($string, (strpos($string, ":'")+2));

$string = substr($string, 0, strpos($string, "'}"));
echo $string;
echo "<br>";

?>