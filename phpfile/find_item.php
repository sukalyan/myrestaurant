<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
include_once('function.php');
$id=$_GET['menuid'];
$q=mysql_query("select * from `item` where `menu_id`='$id'");
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
			
			"image": "<img src='http://50.56.237.229/wang/admin/<?php echo $img?>' style='width:100%; height:auto;' onclick='return getitemdetails(&#39;<?php echo $r['id'];?>&#39;)'>",
		
			"name": "<?php echo $r['name'];?>",
		
			"desc": "<?php echo $r['description'];?><br/>",
			
			"price": "<?php echo $r['price'];?><br/>"
			
			
		
	   },


<?php } ?>
	]
})
