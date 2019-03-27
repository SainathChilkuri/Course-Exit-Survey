<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  
?>
<!DOCTYPE html>
<html>
<head>
<style>
button {
	border-radius:9px;
	padding:10px;
}
</style>
	<title>feedback</title>
</head>
<body>

<?php
$sem= $_SESSION['sem'];
//if($sem == 2)
	if($sem == "s1") {
	header('location: new1.php');
	}
	if($sem == "s2") {
	header('location: new2.php');
	}
	if($sem == "s3") {
	header('location: new3.php');
	}
	if($sem == "s4") {
	header('location: new4.php');
	}
	if($sem == "s5") {
	header('location: new5.php');
	}
	if($sem == "s6") {
	header('location: new6.php');
	}
	if($sem == "s7") {
	header('location: new7.php');
	}
	if($sem == "s8") {
	header('location: new8.php');
	}
	echo "you have not selected the semester";
	
?>


  	<!-- notification message -->
  	

		
</body>
</html>