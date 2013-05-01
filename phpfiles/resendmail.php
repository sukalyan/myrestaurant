<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
include_once("function.php");

$email=$_GET['email'];

$que=mysql_query("select * from `registration` where `email`='$email'");
$res=mysql_fetch_array($que);

$confirm_code=$res['confirm_code'];
$status=$res['status'];

if($status==0)
{
$to=$email;



$subject="Your confirmation link here";

// From

$header="from: noreply@abc.com";

// Your message

$message="Your Comfirmation link \r\n";

$message.="Click here to activate your account \r\n";

$message.="$linkval?passkey=$confirm_code \r\n";

$sentmail = mail($to,$subject,$message,$header);
}

if($sentmail)

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