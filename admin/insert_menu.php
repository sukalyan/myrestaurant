<?php 
include_once('function.php');
$image = $_FILES['img']['name'];
$file1=getexatfilename($image);

$ext1=getext($image);

 if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif")

						{
	$folder="img/";

						 $filename = $folder . $image;
	 $copied = copy($_FILES['img']['tmp_name'], $filename);
	 }
mysql_query("insert into `menu` set `resto_id`='$_POST[resto]',`name`='$_POST[name]',`image`='$filename',`description`='$_POST[desc]'");
header("location:add_menu.php");
?>