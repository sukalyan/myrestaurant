<?php 
include_once("dbconnection.php");

$ques=$_POST['question1'];
$name=$_POST['fname'];
//$feedback=$_POST[''];
$state=$_POST['state'];
$country=$_POST['country'];
$email=$_POST['email'];
$u_id=$_COOKIE['cookie']['one'];
$date=date("Y-m-d H-i-s");
mysql_query("insert into `feedback` set `user_id`='$u_id',`ques`='$ques',`name`='$name',`state`='$state',`country`='$country',`email`='$email',`created`='$date'");

$subj="$ques";

$message="$ques\r\n";

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From: $name\n";

$to="priyanka.nayak08@gmail.com";

mail($to,$subj,$message,$headers);
header("location:category.php");
?>