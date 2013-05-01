<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
include_once('../phpfiles/function.php');
$owner=$_GET['owner'];
//echo "select * from `resturant` where `added_by`=(select `id` from `login` where `uname`='$owner')";
$q=mysql_query("select * from `resturant` where `added_by`=(select `id` from `login` where `uname`='$owner')")or die(mysql_error());
?>

 ({
		
		"items": [
<?php
while($r=mysql_fetch_array($q))
{
$img=$r['image'];
?>

   {
           
			"image": "<img src='http://50.56.237.229/wang/admin/<?php echo $img?>' style='width:50%; height:auto;' onclick='return getmenu(&#39;<?php echo $r['id'];?>&#39;)'>",
			
		
			"name": "<?php echo $r['name'];?>",
		
	   },


<?php } ?>
	]
})
