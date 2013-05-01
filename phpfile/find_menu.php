<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
include_once('function.php');
$id=$_GET['restoid'];
$q=mysql_query("select * from `resturant` where `id`='$id'");
?>

 ({
		
		"items": [
<?php
$r=mysql_fetch_array($q);

$img=$r['image'];
?>

   {
			"id":"<?php echo $r['id'];?>",
			
			"image": "<img src='http://50.56.237.229/wang/admin/<?php echo $img?>' style='width:100%; height:auto;'>",
		
			"name": "<?php echo $r['name'];?>",
		
			"add": "<?php echo $r['address'];?><br/><?php echo $r['opening_time'];?>to<?php echo $r['closing_time'];?><br />",
			
			"star": "<?php echo $r['rating'];?>"
		
	   },
	   
	 ],

<?php
$que=mysql_query("select * from `menu` where `resto_id`='$id'");
?>

 "menu":[

   
<?php
while($res=mysql_fetch_array($que))
{
$imageval=$res['image'];

?>
{
		"menuid":"<?php echo $res['id'];?>",
		
		"menuname":"<?php echo $res['name'];?>",
		
		"menuimage":"<img src='http://50.56.237.229/wang/admin/<?php echo $imageval?>'  style='width:100%; height:auto; float:left;' onclick='return getitem(&#39;<?php echo $res['id'];?>&#39;)'>"
	},
	<?php
	}
	?>
	]

})		
		
		
		
		
