<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
include_once('function.php');
$id=$_GET['itemid'];
$q=mysql_query("select * from `item` where `id`='$id'");
?>

 ({
		
		"items": [
<?php
while($r=mysql_fetch_array($q))
{
$img=$r['image'];
?>

   {
			"itemid":"<?php echo $r['id'];?>",
			
			"image": "<img src='<?php echo $img?>' style='width:100%; height:auto;' >",
		
			"name": "<?php echo $r['name'];?>",
		
			"desc": "<?php echo $r['description'];?><br/>",
			
			"price": "<?php echo $r['price'];?><br/>"
			
			
		
	   },


<?php } ?>
	]
})
