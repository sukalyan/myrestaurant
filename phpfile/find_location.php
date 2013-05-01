<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
include_once('function.php');
$q=mysql_query("select * from `resturant`");
?>

 ({
		
		"items": [
<?php
while($r=mysql_fetch_array($q))
{
$img=$r['image'];
?>

   {
			"id":"<?php echo $r['id'];?>",
			
			"image": "<img src='http://50.56.237.229/wang/admin/<?php echo $img?>' style='width:100%; height:auto;' onclick='return getmenu(&#39;<?php echo $r['id'];?>&#39;)'>",
		
			"name": "<?php echo $r['name'];?>",
		
			"add": "<?php echo $r['address'];?><br/><?php echo $r['opening_time'];?>to<?php echo $r['closing_time'];?>",
			
			"star": "<?php echo $r['rating'];?>"
		
	   },


<?php } ?>
	]
})
