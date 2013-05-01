<?php
header('Content-type: application/javascript');
echo $_GET['jsoncallback']; 
include_once("dbconnection.php");

?>
 ({
		
		"items": [

	   {
			
			"description": "successful"
		
	   }
			]
})