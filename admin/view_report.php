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
			   <td>Item Name</td>
			   <td>Toppings</td>
			   <td>Restursnt name</td>
			   <td>Date</td>
		  </tr>
<?php 
$q=mysql_query("select o.`user_id`,o.`topping_id`,o.`created`,i.`name`,i.`menu_id` from `orderdetail` o,`item` i where i.`id`=o.`item_id`");
while($r=mysql_fetch_array($q))
{
$toping=explode('|',$r['topping_id']);
$name='';
foreach($toping as $t)
{
//echo $t.'<br/>';
$q1=mysql_query("select `topping_name` from `toppings` where `id`='$t'");
$r1=mysql_fetch_array($q1);
if($r1['topping_name']!='')
$name.=$r1['topping_name'].',';
}
$q2=mysql_query("select r.`name` from `menu` m,`resturant` r where r.`id`=m.`resto_id` and m.`id`='$r[menu_id]'");
$r2=mysql_fetch_array($q2);
?>
		  <tr>
		      <td><?php echo $r['user_id'];?></td>
			   <td><?php echo $r['name'];?></td>
			  
			   <td><?php echo $name;?></td>
			    <td><?php echo $r2['name'];?></td>
				 <td><?php echo $r['created'];?></td>
		  </tr>
<?php } ?>
</table>
</body>
</html>
