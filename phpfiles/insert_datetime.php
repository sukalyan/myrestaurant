<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
include_once("function.php");

$orderid=$_GET['oid'];
$date_time=$_GET['item'];
$add=$_GET['add'];
$mnth=substr($date_time,0,2);
$day=substr($date_time,3,2);

$year=substr($date_time,6,4);

$time=substr($date_time,11,5);
//echo $time;
$date=$year."-".$mnth."-".$day." ".$time;
//echo $date;

$res=mysql_query("insert into `date_time` set `order_id`='$orderid',`date_time`='$date',`address`='$add',`status`='0'");

if($res)

	{

?>
({
		
		
		"items":"1"
		
})

<?php																
}
else
{
?>

({
		
		
		"items":"0"
	
})
<?php
}
?>
