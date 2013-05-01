<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback'];
include_once("../phpfiles/function.php");

$username=$_GET['name'];
//echo $username;
$password=$_GET['pass'];
$mobile=$_GET['mobile'];
$email=$_GET['email'];

$confirm_code=md5(uniqid(rand()));

$que=mysql_query("select * from `owner_details` where `email`='$email'");
$count=mysql_num_rows($que);

if($count==0)
{

$res=mysql_query("insert into `owner_details` set `user_name`='$username',`password`='$password',`contact_no`='$mobile',`email`='$email',`confirm_code`='$confirm_code'")or die(mysql_error());

mysql_query("insert into `login` set `uname`='$email',`password`='$password',`status`='10'");

$to=$email;



$subject="Your confirmation link here";

// From

$header="from: noreply@abc.com";

// Your message

$message="Your Comfirmation link \r\n";

$message.="Click here to activate your account \r\n";

$message.="$linkval_owner?passkey=$confirm_code \r\n";

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

