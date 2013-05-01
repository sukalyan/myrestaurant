<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
include_once("function.php");

$username=$_GET['name'];
//echo $username;
$password=$_GET['pass'];
$mobile=$_GET['mobile'];
$email=$_GET['email'];
$location=$_GET['location'];

$confirm_code=md5(uniqid(rand()));

$que=mysql_query("select * from `registration` where `email`='$email'");
$count=mysql_num_rows($que);

if($count==0)
{

$res=mysql_query("insert into `registration` set `user_name`='$username',`password`='$password',`contact_no`='$mobile',`email`='$email',`location`='$location',`confirm_code`='$confirm_code'")or die(mysql_error());

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

