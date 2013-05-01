<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback']; 
include_once("../phpfiles/function.php");
$date=date("Y-m-d");
$resto_id=$_GET['cval'];
?>
 ({
		
	"items": 
						[	
<?php
			
			$q=mysql_query("select o.*,i.* from `orderdetail` o,`item` i where i.`id`=o.`item_id` and date(o.`created`)='$date' and o.`user_id`!='null' and o.`user_id`!='' and o.`resto_id`='$resto_id'");

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
						
						
	   {
			
			"description": "<tr><td><?php echo $r['user_id'];?></td><td><?php echo $r['name'];?></td><td><?php echo $name;?></td><td><?php echo $r2['name'];?></td><td><?php echo $r['created'];?></td></tr>"
		
	   },
	    

					<?php
					}


			?>
			]
})