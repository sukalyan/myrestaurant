<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
include_once("function.php");
$orderid=$_GET['oid'];
$tip=$_GET['tip'];
mysql_query("insert into `tip` set `order_id`='$orderid',`tip`='$tip'");
?>
 ({
		
		
})