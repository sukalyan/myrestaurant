<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
include_once("function.php");
$username=$_GET['email'];
$password=$_GET['password'];

$que=mysql_query("select * FROM  `registration` WHERE `email`='$username'")or die(mysql_error());
$res=mysql_fetch_array($que);
$status=$res['status'];
//echo $status;
if($status==1)
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

