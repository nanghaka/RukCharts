<?php 
include 'db_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title> Users</title>
</head>
<body>
<h3>Number of Users Registered </h3>
<p>----------------</p>
<h6>Number of users registered </h6>
<?php

// Query the database and get the count 
$result = mysql_query("SELECT * FROM users"); 
$num_rows = mysql_num_rows($result); 

// Display the results 
echo $num_rows; 

?>


</body>
</html>