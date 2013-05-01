<?php
include_once('function.php');

$coupon_code=$_GET['couponcode'];
$restoid=$_GET['rest_id'];

$sql=mysql_query("select * from  coupon where `coupon_code`='$coupon_code'");
$res=mysql_fetch_array($sql);

if($res['resto_id']==$restoid)
{
echo $res['discount'];
}


?>