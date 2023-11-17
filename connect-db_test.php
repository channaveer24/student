<?php

 
$con=mysqli_connect($server, $user, $pass) or DIE('Connection to host is failed, perhaps the service is down!');
// Select the database

$link = mysql_connect('localhost', 'tech_nest_001', 'komqo6yznv');
$db_list = mysql_list_dbs($link);

while ($row = mysql_fetch_object($db_list)) {
     echo $row->Database . "\n";
}


?>
 

