<html>
<head>
	<title>
	     welcome!!
	 </title>
	</head>
	<body>
<?php
$db_host="localhost";
$db_username="root";
$db_password="";
$db_name="php_tutorial";



$db_connect= mysqli_connect($db_host, $db_username, $db_password,$db_name);
// Check connection
if (mysqli_connect_error())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
	echo "database connection good";
}
?>

     </body>
     </html>
