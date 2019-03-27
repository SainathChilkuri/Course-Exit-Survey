<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<style>
div{
	
      width:400px;
      height:600px;

      margin: 80px 390px 100px;
      

      background-color:#D3D3D3;
}
input[type=text] {
     background: transparent;
	 border: none;
	 border-radius:9px;

	 border: 1px solid black;
	 border-size:40px;
	 font-size:20px;
	 height: 30px;
}
input[type=password] {
     background: transparent;
	 border: none;
	 border-radius:9px;

	 border: 1px solid black;
	 border-size:40px;
	 font-size:20px;
	 height: 30px;
}
button.btn {
    width: 65%;
    padding: 12px;
   background-color:red;
   border-color: red;
   border-color: red;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}
h5 {
	font-family: verdana;
	font-style: bold;
}

</style>
  <title>Registration system PHP and MySQL</title>
  
</head>
<body background="baack.jpg">
<pre>
  	                    
<div> 

     <img src="UCoE-Logo.png" width="80%">
	 	<h5>                          Faculty Login</h5>
	 <form method="post" action="facultylogin.php">
  	<?php include('errors.php'); ?>  
  
                        <img src="username.png" width="40px" height="40px">
	
          <input type="text" name="Fusername"  placeholder=" Username">

  	                <img src="security.png" width="40px" height="40px">
  		
          <input type="password" name="Fpassword" placeholder=" security key">
  	
  	
         <button type="submit" class="btn" name="Flogin_user">Login</button>
 
  </form>
  </div>
  </pre>
</body>
</html>