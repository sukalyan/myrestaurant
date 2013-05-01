<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
include_once('function.php');
$id=$_GET['itemval'];
$q=mysql_query("select * from `toppings` where `item_id`='$id'");
?>

 ({
		
		"items": [
<?php
while($r=mysql_fetch_array($q))
{

?>

   {
			"toppingid":"<?php echo $r['id'];?>",
			
			
		
			"tname": "<?php echo $r['topping_name'];?>"
		
			
			
			
			
			
		
	   },


<?php } ?>
	]
})
