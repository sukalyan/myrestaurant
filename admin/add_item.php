<?php
include_once('function.php');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form name="item" action="insert_item.php" method="post" enctype="multipart/form-data">

<table width="100" border="1" cellspacing="2" cellpadding="2">

  <tr>
  
    <td>Item Name:</td>
    <td><input type="text" name="item_name" value="" /></td>
    <td>Menu Name:</td>
   <td><select name="Menu">
   <option value="--Select--"></option>
    <?php
	echo "select * from `menu` order by `id` ASC";
	 $q=mysql_query("select * from `menu` order by `id` ASC"); 
	 while($r=mysql_fetch_array($q))
	 {
	 ?>
	 <option value="<?php echo $r['id'];?>"><?php echo $r['name'];?></option>
	 <?php } ?>
	      </select></td>
  </tr>
  <tr>
  
  	<td>Description:</td>
	
    <td><input type="text" name="desc" value="" /></td>
    <td>Image:</td>
	<td><input type="file" name="item_img" value="" /></td>
	
	</tr>
	
	<tr>
	
	<td>Price:</td>
	
	<td><input type="text" name="price" value="" /></td>
	
	<td><input type="submit" name="submit" value="Add" /></td>
	
  </tr>
  </table>
  </form>
</body>
</html>
