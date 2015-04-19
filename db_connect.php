<?php
$dbname            ='rusokoni_rusokoni'; //Name of the database
$dbuser            ='root'; //Username for the db
$dbpass            ='oonabo19'; //Password for the db
$dbserver          ='localhost'; //Name of the mysql server
 
$dbcnx = mysql_connect ("$dbserver", "$dbuser", "$dbpass");
mysql_select_db("$dbname") or die(mysql_error());


?>