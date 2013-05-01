<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
include_once("function.php");

$orderid=$_GET['oid'];
$itemid=$_GET['item'];
$topping=$_GET['topping'];
$name=$_GET['uid'];
$resto=$_GET['resto'];

$res=mysql_query("insert into `orderdetail` set `order_id`='$orderid',`item_id`='$itemid',`topping_id`='$topping',`user_id`='$name',`resto_id`='$resto'");
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
