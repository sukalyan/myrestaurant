<?php

$host="localhost";
$userid="root";
$password="colourfade";
$db="wang_resturant";
$con=mysql_connect($host,$userid,$password);
mysql_select_db($db,$con);

function getext($image)
{
$i=strrpos($image,'.');
$l=strlen($image)-$i;
$ext=substr($image,$i+1,$l);
$ext=strtolower($ext);
return $ext;
}

function getexatfilename($file)
{
$file=stripslashes($file);
return $file;
}
$linkval="http://192.168.2.22/wang/phpfiles/confirmation.php";
?>
