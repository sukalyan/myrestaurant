<?php
ini_set("display_error",1);
include_once('function.php');

$name=$_POST['item_name'];
$menu=$_POST['Menu'];
$desc=$_POST['desc'];
$image=$_FILES['item_img']['name'];
$price=$_POST['price'];

	$file_exts = array("jpg","jpeg","png");
	$upload_exts = end(explode(".", $_FILES["item_img"]["name"]));
	
	if ((($_FILES["item_img"]["type"] == "image/jpg")
	|| ($_FILES["item_img"]["type"] == "image/jpeg")
	|| ($_FILES["item_img"]["type"] == "image/png"))
	&& in_array($upload_exts, $file_exts))
	{
	if ($_FILES["item_img"]["error"] > 0)
	{
	echo "Return Code: " . $_FILES[""]["error"] . "<br>";
	}
	if (file_exists("image/" . $_FILES["item_img"]["name"]))
	{
	echo "<div class='error'>"."(".$_FILES["item_img"]["name"].")".
		" already exists. "."</div>";
	}
	else move_uploaded_file($_FILES["item_img"]["tmp_name"],
	"Image/" . $_FILES["item_img"]["name"].$name);
	
	}
	else
	{
	echo "<div class='error'>Invalid file type :$_FILES[item_img][type]</div>";
	}
	
	$filename="Image/" . $_FILES["item_img"]["name"] .$name;
	
	$sql=mysql_query("insert into `item` set `menu_id`='$menu',`name`='$name',`image`='$filename',`description`='$desc',`price`='$price'")or die(mysql_error());
		if($sql)
	{
	echo "New item added";
	}
	else
	{
	echo "item addition failed";
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<META HTTP-EQUIV="refresh" CONTENT="2;URL=add_item.php"> 
<title>Untitled Document</title>
</head>

<body>
</body>
</html>