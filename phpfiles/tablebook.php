<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
include_once("function.php");

$name=$_GET['name'];
$restoid=$_GET['restoid'];
$time=$_GET['time'];
$date=date("Y-m-d");

$que=mysql_query("insert into `table` set `resto_id`='$restoid',`userid`='$name',`time`='$time',`date`='$date'");


if($que)

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
?>
