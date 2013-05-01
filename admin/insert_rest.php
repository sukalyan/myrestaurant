<?php
ini_set("display_error",1);
include_once('function.php');

$name=$_POST['rname'];
$shrtname=$_POST['shrtname'];
$address=$_POST['add'];
$img=$_FILES['image']['name'];
$opentime=$_POST['opentime'];
$closetime=$_POST['closetime'];
$desc=$_POST['desc'];
$rate=$_POST['rating'];

	$file_exts = array("jpg","jpeg","png");
	$upload_exts = end(explode(".", $_FILES["image"]["name"]));
	
	if ((($_FILES["image"]["type"] == "image/jpg")
	|| ($_FILES["image"]["type"] == "image/jpeg")
	|| ($_FILES["image"]["type"] == "image/png"))
	&& in_array($upload_exts, $file_exts))
	{
	if ($_FILES["image"]["error"] > 0)
	{
	echo "Return Code: " . $_FILES[""]["error"] . "<br>";
	}
	if (file_exists("image/" . $_FILES["image"]["name"]))
	{
	echo "<div class='error'>"."(".$_FILES["image"]["name"].")".
		" already exists. "."</div>";
	}
	else move_uploaded_file($_FILES["image"]["tmp_name"],
	"Image/" .$img);
	
	}
	else
	{
	echo "<div class='error'>Invalid file type :$_FILES[image][type]</div>";
	}
	
	$filename="Image/" .$img;
	echo "insert into `resturant` set `name`='$name',`shortname`='$shrtname',`address`='$address',`image`='$filename',`opening_time`='$opentime',`closing_time`='$closetime',`description`='$desc',`rating`='$rate'";
	$sql=mysql_query("insert into `resturant` set `name`='$name',`shortname`='$shrtname',`address`='$address',`image`='$filename',`opening_time`='$opentime',`closing_time`='$closetime',`description`='$desc',`rating`='$rate'")or die(mysql_error());
	
	if($sql)
	{
	echo "New resturant added";
	}
	else
	{
	echo "resturant add failed";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<META HTTP-EQUIV="refresh" CONTENT="2;URL=resturant.php"> 
<title>Untitled Document</title>
</head>

<body>
</body>
</html>