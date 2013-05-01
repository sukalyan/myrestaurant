<?php
 $set_host="localhost";
        $set_username="kriti_cobbler";
        $set_password="cobbler@123";
         $set_database="kriti_yii";
        $con = mysql_connect($set_host, $set_username, $set_password) or die('Error connecting to DB');
	mysql_select_db($set_database,$con);
$que=mysql_query("select max(id) as id1 from `test`");
$cnt=mysql_fetch_array($que);
//echo "http://www.krititech.com/testapp.php?ready=$cnt[id1]<br>";
$homepage = file_get_contents('http://www.krititech.com/testapp.php?ready='.$cnt['id1']);
//echo $homepage;
//echo "<br>insert into test set `data`='$homepage'</br>";
mysql_query("insert into test set `data`='".$homepage."'")or die(mysql_error());
?>
<table>
<tr><td>Id</td><td>Homepage</td></tr>
<?php
$que1=mysql_query("select * from `test` where id=(select max(id) from test)");
while($res=mysql_fetch_array($que1))
{
echo "<tr><td>".$res['id']."</td><td>".$res['data']."</td></tr>";
}
?>
</table>