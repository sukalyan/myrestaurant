<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
include_once("function.php");
$orderid=$_GET['oid'];
$q=mysql_query("select o.`topping_id`,i.`name`,i.`price`,o.`item_id`,o.`slno` from `orderdetail` o,`item` i where i.`id`=o.`item_id` and o.`order_id`='$orderid'");

?>
 ({
		
		"items": [
		<?php
		$sum='';
		
		
while($r=mysql_fetch_array($q))
{
$idval=$r['slno'];
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
$id=$r['item_id'];
?>
  {
			
			"description": "<tr id='<?php echo $idval;?>'><td><?php echo $r['name'];?>/<?php echo $topping;?></td><td><?php echo $r['price']?>/<?php echo $sum1;?>.00</td> <td><?php echo $r['price']+$sum1;?>.00</td><td><input type='button' name='button1' id='btn1' value='remove' onclick='return remove_category(&#39;<?php echo $idval;?>&#39;);' /></td></tr>"
		
	   },

<?php 
} ?>
     {
	 "description": "<tr><td colspan='2'>Total</td><td><?php echo number_format($sum,2);?></td></tr>"
	 
	 }
	]
})