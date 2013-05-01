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
			
			"image": "<img src='<?php echo $img?>' style='width:100%; height:auto;'>",
		
			"name": "<?php echo $r['name'];?>",
		
			"add": "<?php echo $r['address'];?><br/><?php echo $r['opening_time'];?>to<?php echo $r['closing_time'];?><br />",
			
			"star": "<?php echo $r['rating'];?>"
		
	   },
	   
	 ],
"timing":[
<?php
$open_time=$r['opening_time'];
for($open_time!=0;$open_time<=$r['closing_time'];$open_time++)
{
?>	 
	{
		"table":"<div class='timebutton'>
								<?php echo $open_time;?>
						</div>"
	}, 
	
	
	<?php } ?>
	] 
})