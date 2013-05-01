<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
include_once("function.php");
$orderid=$_GET['oid'];
$name=$_GET['uid'];
$res=mysql_query("update `date_time` set `status`=1 where `order_id`='$orderid'");
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
if(isset($_GET['uid']))
{
$q=mysql_query("select o.`topping_id`,o.`created`,i.`name`,i.`menu_id` from `orderdetail` o,`item` i where i.`id`=o.`item_id` and o.`user_id`='$_GET[uid]' and o.`order_id`='$orderid'");
$message='';
while($r=mysql_fetch_array($q))
{
$toping=explode('|',$r['topping_id']);

foreach($toping as $t)
{
//echo $t.'<br/>';
$q1=mysql_query("select `topping_name` from `toppings` where `id`='$t'");
$r1=mysql_fetch_array($q1);
if($r1['topping_name']!='')
$name.=$r1['topping_name'].',';
}
$q2=mysql_query("select r.`name` from `menu` m,`resturant` r where r.`id`=m.`resto_id` and m.`id`='$r[menu_id]'");
$r2=mysql_fetch_array($q2);
$message=" $r[name]----- with topings/n $name/nFrom :$r2[name]";
} 
//echo $message;
mail($_GET['uid'], 'My Orders', $message);
}
?>
