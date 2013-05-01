<?php
include_once("../phpfiles/function.php");

$passkey=$_GET['passkey'];

$sql1="SELECT * FROM `owner_details` WHERE confirm_code ='$passkey'";
$result1=mysql_query($sql1);

if($result1){

$count=mysql_num_rows($result1);

if($count==1){

$rows=mysql_fetch_array($result1);

$email=$rows['email'];
$password=$rows['password']; 

mysql_query("update `owner_details` set `status`='1' where `email`='$email'");
echo "Your Account Has Been Activated";


}

else {
echo "Wrong Confirmation code";
}



}
?>
