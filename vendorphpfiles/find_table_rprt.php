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
			
			$q=mysql_query("select t.*,r.* from `table` t,`resturant` r where r.id='$resto_id' and r.`id`=t.`resto_id` and t.`date`='$date'");

					while($r=mysql_fetch_array($q))
{
$duedate=$r['date'];

							$date = date("Y-m-d",strtotime($duedate));
						?>
						
						
	   {
			
			"description": "<tr><td><?php echo $r['userid'];?></td><td><?php echo $r['name'];?></td><td><?php echo $date;?></td><td><?php echo $r['time'];?></td></tr>"
		
	   },
	    

					<?php
					}


			?>
			]
})