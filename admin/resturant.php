<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<form name="resturant" action="insert_rest.php" method="post" enctype="multipart/form-data">
<table width="100" border="1" cellspacing="2" cellpadding="2">
  <tr>
    <td>Name:</td>
    <td><input type="text" name="rname" value="" /></td>
    <td>Short Name:</td>
    <td><input type="text" name="shrtname" value="" /></td>
  </tr>
  <tr>
    <td>Address:</td>
    <td><input type="text" name="add" value="" /></td>
 
    <td>Image:</td>
    <td><input type="file" name="image" value="" /></td>
  </tr>
  <tr>
  <td>Opening Time:</td>
  <td><input type="text" name="opentime" value="" /></td>
  <td>Closing Time:</td>
  <td><input type="text" name="closetime" value="" /></td>
  </tr>
  <tr>
  <td>Description:</td>
  <td><input type="text" name="desc" value="" /></td>
  <td>Rating:</td>
  <td><input type="text" name="rating" value="" /></td>
  </tr>
  <tr>
  <td><input type="submit" name="submit" value="submit" /></td></tr>
</table>

</form>
</body>
</html>
