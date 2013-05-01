<?php 
include_once("dbconnection.php");
$uid=$_GET['id'];
echo $uid;
$q=mysql_query("select * from `user` where `id`='$uid'");
$cnt=mysql_num_rows($q);
$date=date("Y-m-d H-i-s");
if($cnt=='0')
{
mysql_query("insert into `user` set `id`='$uid',`no_of_attempts`='1',`created`='$date'");

}
else
{
$r=mysql_fetch_array($q);
$i=$r['no_of_attempts']+1;
mysql_query("update `user` set `no_of_attempts`='$i' where `id`='$uid'");
}
?>