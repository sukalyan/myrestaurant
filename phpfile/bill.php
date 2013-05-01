<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
include_once("function.php");
$orderid=$_GET['oid'];
$q=mysql_query("select o.`topping_id`,i.`name`,i.`price` from `orderdetail` o,`item` i where i.`id`=o.`item_id` and o.`order_id`='$orderid'");
?>
 ({
		
		"items": [
		<?php
while($r=mysql_fetch_array($q))
{
?>
  {
			
			"description": "<tr><td><?php echo $r['name'];?></td><td class="sum"><?php echo $r['price'];?></td></tr>"
		
	   },

<?php } ?>
	]
})