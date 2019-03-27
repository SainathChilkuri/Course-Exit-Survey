<!DOCTYPE html>
<?php session_start(); 
if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: homepage.php");
  }
 

?>
<html>
<head>
<script>
function showUser(str) {
 if (str == "") {
 document.getElementById("txtHint").innerHTML = "";
 return;
 } else {
 if (window.XMLHttpRequest) {
 // code for IE7+, Firefox, Chrome, Opera, Safari
 xmlhttp = new XMLHttpRequest();
 } else {
 // code for IE6, IE5
 xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
 }
 xmlhttp.onreadystatechange = function() {
 if (this.readyState == 4 && this.status == 200) {
 document.getElementById("txtHint").innerHTML = this.responseText;
 }
 };
 xmlhttp.open("GET","user.php?q="+str,true);
 xmlhttp.send();
 }
}

</script>
<style>
input[type=text] {
     background: transparent;
	 
	 
	 border-radius:9px;
	 border: 1px solid black;
	 border-length:20px;
	 font-size:20px;
	 height: 30px;
}
</style>
</head>
<a href="htmll.php?logout='1'" style="color: red;"><img src="logout.png" width="2%"></a>
<body background="baack.jpg">
<pre>                                                   SEARCH HERE : <input type="text" name="users"  onkeyup="showUser(this.value)">


<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>
</pre>
</body>
</html>
