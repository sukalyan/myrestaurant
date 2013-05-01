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
<table>
          <tr>
		       <td>User Id</td>
			   <td>Restursnt name</td>
			   <td>Date</td>
			   <td>Time</td>
		  </tr>
<?php 
$q=mysql_query("select t.`time`,t.`date`,r.`name`,t.`userid` from `table` t,`resturant` r where r.`id`=t.`resto_id`") or die(mysql_error());
while($r=mysql_fetch_array($q))
{
$duedate=$r['date'];
$date = date("Y-m-d",strtotime($duedate));
?>
		  <tr>
		      <td><?php echo $r['userid'];?></td>
		      <td><?php echo $r['name'];?></td>
			   <td><?php echo $date;?></td>
			  
			   <td><?php echo $r['time'];?></td>
			   
		  </tr>
<?php } ?>
</table>
</body>
</html>
