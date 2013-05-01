<?php 
include_once('function.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form name="form" method="post" action="insert_menu.php" enctype="multipart/form-data">
<table>
<tr>
     <td>Name</td>
	 <td><input type="text" name="name" /></td>
</tr>
<tr>
     <td>Image</td>
	 <td><input type="file" name="img" /></td>
</tr>
<tr>
     <td>Description</td>
	 <td><input type="text" name="desc" /></td>
</tr>
<tr>
     <td>select Resturant</td>
	 <td><select name="resto">
	 <?php $q=mysql_query("select * from `resturant`"); 
	 while($r=mysql_fetch_array($q))
	 {
	 ?>
	 <option value="<?php echo $r['id'];?>"><?php echo $r['name'];?></option>
	 <?php } ?>
	      </select></td>
</tr>
<tr>
     <td colspan="2"><input type="submit" name="submit" value="Submit" /></td>
</tr>
</table>
</form>
</body>
</html>
