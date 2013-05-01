<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
include_once("function.php");

$orderid=$_GET['oid'];
$date_time=$_GET['item'];
mysql_query("insert into `date_time` set `order_id`='$orderid',`date_time`=''");
?>