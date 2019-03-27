<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <style>
  select {
	  background: transparent;
	  border-radius: 6px;
  }
  div{
	
      width:400px;
      height:800px;

      margin: 80px 390px 100px;
      

      background-color:#D3D3D3;
}
input[type=text] {
     background: transparent;
	 
	 
	 border-radius:9px;
	 border: 1px solid black;
	 border-length:20px;
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
input[type=email] {
     background: transparent;
	 border: none;
	 border-radius:9px;

	 border: 1px solid black;
	 border-size:40px;
	 font-size:20px;
	 height: 30px;
}
button.btn {
    width: 80%;
    padding: 12px;
   background-color:green;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}
label{
	font-family:verdana;
  </style>
  
</head>
<body background="baack.jpg">
<?php include('errors.php'); ?>
<pre>

 <div>
   <img src="UCoE-Logo.png" width="90%" alt="ucoe">
 
	<form method="post" action="register.php">
	
        <label>STUDENT FULL NAME:</label>
        <input type="text" name="studentname" value="<?php echo $studentname; ?>">
		
	
	current year:  
	<select name="year">
         <option>--choose--</option>
        <option value="fY">First year</option>
		<option value="SY">Second year</option>
        <option value="TY">Third year</option>
        <option value="BE">Final year</option>
                        </select>
             
        current semester:
        <select name="sem">
          <option>--choose--</option>
          <option value="s1">sem 1</option>
         <option value="s2">sem 2</option>
         <option value="s3">sem 3</option>
         <option value="s4">sem 4</option>
		  <option value="s5">sem 5</option>
         <option value="s6">sem 6</option>
         <option value="s7">sem 7</option>
         <option value="s8">sem 8</option>
         </select>
		

  	<label>Username:</label>
  	<input type="text" name="username" value="<?php echo $username; ?>">
	
	
  	<label>Email:</label>
  	<input type="email" name="email" value="<?php echo $email; ?>">
  	
  	
  	<label>Password:</label>
  	<input type="password" name="password_1">
  	
  	
  	<label>Confirm password:</label>
  	<input type="password" name="password_2">
  
  	
     <button type="submit" class="btn" name="reg_user">Register</button>
  	<p>
  		Already Registerd? <a href="login.php">Login</a>
  	</p>
  </form>
  </div>
  </pre>
</body>
</html>