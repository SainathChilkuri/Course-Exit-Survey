<html>
<head>
<style>
button.btn {
    width: 20%;
    padding: 10px;
	
	border:transparent;
   background-color: transparent;
    border-radius: 15px;
   
    margin-top: 6px;
    margin-bottom: 16px;
	cursor: pointer;
}
.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: blue;
    color: white;
}
</style>
</head>
<body background="bc.jpg">
<form method="post" action="facultylogin.php">                            
						                       <pre>                                                                                                                                <Button class="btn button1" type="submit"><strong> <img src="fac.png" width="7%">  faculty login</strong></Button></pre>
						  </form> 
<?php session_start();
session_destroy();?>
<pre>
                                       <img src="Feedback.png" width="50%">             
</pre>
<form method="post" action="register.php">                            
						                       <pre>                                                                 <Button class="btn button1" type="submit"><strong>DROP YOUR FEEDBACK</strong></Button></pre>
						  </form> 
						 
<body>
</html>