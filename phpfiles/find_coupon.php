<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
$con=mysql_connect("localhost","root","colourfade");
mysql_select_db("yuyueaco_CNMS1029",$con);

$q=mysql_query("select * from `jmo_promo_product` ");
?>

 ({
		
		"items": [
<?php
while($r=mysql_fetch_array($q))
{
$img=$r['image'];
?>

   {
			
			
			"image": "<img src='<?php echo $img?>' style='width:100%; height:auto;' >",
		
			"discount": "<?php echo $r['discount'];?>",
		
			
			
			
		
	   },


<?php } ?>
	]
})