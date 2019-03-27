<html>
<head>
<style>
strong {
	font-family: verdana;
}
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
    background-color: green;
    color: white;
}
</style></head>

<body ><pre> 
<form method="post" action="homepage.php">

                                                 



                                                              <img src="tick.png" width="20%">
						 
						                         
						                <strong>SUCCESFULLY SUBMITTED</strong>
										
			                               THANK YOU <strong><?php session_start();
						 echo $_SESSION['username'];
						 ?></strong> FOR YOUR VALUABLE FEEDBACK
						 
						 
						                <Button class="btn button1" type="submit">HOMEPAGE</Button>
						 </form>
</pre></body>
</html>