<?php
session_start();
if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<style>
 div{
	
      width:400px;
      height:800px;

      margin: 80px 390px 100px;
      

      background-color:#D3D3D3;
}
button.btn {
    width: 80%;
    padding: 10px;
	
	border:solid black;
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
    background-color: #4CAF50;
    color: white;
}
</style>
</html>

<body background="baack.jpg";>
<div>
<pre>
                                                                                               
                                              <a href="new3.php?logout='1'" style="color: red;"><img src="logout.png" width="5%"></a> 
   <img src="UCoE-Logo.png" width="80%" alt="ucoe">
<p>      Welcome <strong style="font-family: verdana;"><?php echo $_SESSION['username']; ?></strong> Give your Valuable Feedback</p>
                 <img src="arrow.png" width="4%" alt="ucoe">Select the subject<img src="arrow.png" width="4%" alt="ucoe">
<form action="formpage3A.php" method="post">
      <button class="btn button1" width="10%" type="submit">Applied-Mathematics III</button>
</form>
<form action="formpage3B.php" method="post">
      <button class="btn button1" width="10%" type="submit">Data Structure </button>
</form>
<form action="formpage3C.php" method="post">
      <button class="btn button1" width="10%" type="submit">OOPM</button>
</form>
<form action="formpage3D.php" method="post">
      <button class="btn button1" width="10%" type="submit">DLDA</button>
</form>
<form action="formpage3E.php" method="post">
       <button class="btn button1" width="10%" type="submit">ECCF</button>
</form>
<form action="formpage3F.php" method="post">
       <button class="btn button1" width="10%" type="submit">Discrete Mathematics</button>
</form>

<?php if (isset($_SESSION['success'])) : ?>
      
      	<h3>
          <?php 
          	
          	unset($_SESSION['success']);
          ?>
      	</h3>
     
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	
    <?php endif ?>
	</pre>
	</div>
</body>
</html>