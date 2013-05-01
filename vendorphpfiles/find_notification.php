<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback']; 
include_once("../phpfiles/function.php");
$date=date("Y-m-d");

$restoid=$_GET['restoid'];
?>
 ({
		"items": [
		
<?php
			
			$que=mysql_query("select t.*,r.`name` from `table` t,`resturant` r where r.`id`=t.`resto_id` and r.`id`='$restoid' and t.`resto_id`='$restoid' and t.`date`='$date' and t.`status`=0");
			
			while($r=mysql_fetch_array($que))

							{

						$duedate=$r['date'];
						$date = date("Y-m-d",strtotime($duedate));
						?>
						
						
	   {
			
			"userid": " <?php echo $r['userid'];?>",
		
	  
			
			"restname": "<?php echo $r['name'];?>",
		
	  
			
			"date": "<?php echo $date;?>",
		
	  	
			"time": "<?php echo $r['time'];?>",
		
	 
			
			"action": "<input type='button' name='button' value='Cofirm' onclick='return confirmation(<?php echo $r['id'];?>,&#39;<?php echo $r['name'];?>&#39;);' />"
		
	   },

					<?php
					}


			?>
		]	
})