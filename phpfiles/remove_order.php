<?php 
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
include_once("function.php");
$item_id=$_GET['item_id'];
$orderid=$_GET['orderid'];
$q=mysql_query("delete from `orderdetail` where `order_id`='$orderid' and `slno`='$item_id'");
if($q)
{

?>
({
"items":"1"

})

<?php } ?>