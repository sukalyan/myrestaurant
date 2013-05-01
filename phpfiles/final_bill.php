<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
include_once("function.php");
$orderid=$_GET['oid'];
$q=mysql_query("select o.`topping_id`,i.`price` from `orderdetail` o,`item` i where i.`id`=o.`item_id` and o.`order_id`='$orderid'");
	$sum='';
while($r=mysql_fetch_array($q))
{

$sum1='';
$topping='';
$val=explode("|",$r['topping_id']);

foreach($val as $v)
{

$sql=mysql_query("select * from  toppings where `id`='$v'");
$result=mysql_fetch_array($sql);
$topping=$topping."  ".$result['topping_name'];
$sum1+=$result['price'];
$sum+=$result['price'];

}
$sum+=$r['price'];

}
?>
 ({
		
		"items": [

     {
	 "description": "<tr><td>Subtotal</td><td><?php echo number_format($sum,2);?></td></tr>"
	 
	 },
	  {
	 "description": "<tr><td>Tips</td><td id='tip_val'>0.00</td></tr>"
	 
	 },
	  {
	 "description": "<tr><td>Salestax(0.0%)</td><td>0.00</td></tr>"
	 
	 },
	  {
	 "description": "<tr><td>Total</td><td id='tot_val'><?php echo number_format($sum,2);?></td></tr>"
	 
	 }
	]
})