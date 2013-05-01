<?php 
include_once('function.php');

$id=$_GET['order_id'];
//echo $id;

$sql=mysql_query("delete from `date_time` where `order_id`='$id'")or die(mysql_error());

if($sql)
{
echo "your order is cancelled";
}
else echo "your order is not cancelled";
?>