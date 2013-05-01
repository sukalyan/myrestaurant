<?php
//echo "database connection";
session_start();
   
         $set_host="localhost";
        $set_username="root";
        $set_password="colourfade";
         $set_database="cap";
        $con = mysql_connect($set_host, $set_username, $set_password) or die('Error connecting to DB'); 
			//echo $this->database;
	mysql_select_db($set_database,$con);
    
    ?>
