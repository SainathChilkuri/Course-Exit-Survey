<!DOCTYPE html>
<?php session_start();
if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  if (isset($_POST['course_sub'])) {
	  include('server.php');
  }
?>
<?php session_start();
$_SESSION['subject']="EVS"; ?>

<html>
<head>
    <title>Course Exit Form</title>
     <link href="style3.css" rel="stylesheet" type="text/css">
    </head>
    <body>
	<pre>	   <a href="formpage1A.php?logout='1'" style="color: red;">logout</a> </pre>
     <form method="post" action="formpage1D.php">
	 	<?php include('errors.php'); ?> 
        <img src="UCoE-Logo.jpg" alt="UCoE-Logo(Universal College Of Engineering)"><br><br>
         <h3>Department of Computer Engineering</h3>
        <h3>Course end survey</h3>
        <h3>(<b>Batch:</b>2018-2019)</h3><br><br>
    <h3 class="a">Thank you for taking this survey. Your input is extremely valuable. The information that we are collecting using this survey will be used solely for the purpose of evaluating and improving the delivery of this course.</h3><br><br>
        <table>
        <tr>
            <th colspan="2">Personal Infiormation</th>
        </tr>
            <tr>
            <td>Course Name:</td>
                <td>EVS</td>
            </tr>
            <tr>
            <td>Student Name(in CAPITAl LETTERS)</td>
                <td><input type="text" name="name" value=<?php echo $_SESSION['username']; ?> ></td>
            </tr>
            <tr>
            <td>Register Number </td>
                <td><input type="text" name="rollno"></td>
            </tr>
            <tr>
            <td>Academic year</td>
                <td>2018-2019</td>
            </tr>
            <tr>
            <td>Year/Semester</td>
                <td>
               <input type="text" name="sem" value=<?php if($_SESSION['sem'] == 's1'){ echo "SEMESTER1"; } ?> >
                </td>
            </tr>
        </table><br><br>
        <h3>
        For each questions, please provide your rating on 4-point scale, showing the extent to which you agree with each of the following statements regarding the course.
        </h3><br><br>
        <h2>
        (Excellent-4   Good-3   Average-2   Moderate-1   Poor-0)<br><br>
            <u>QUESTIONNAIRE</u>
        </h2>
        <pre>
        
        1. Were you able to write programs using programming constructs                             <select name="ques1">
                    <option value=""></option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                    <option value="0">0</option>
                                          
                    </select>
                    
                    
        2. Were you able to write programs using classes and objects                                    <select name="ques2">
                    <option value=""></option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                    <option value="0">0</option>
                                          
                    </select>
                    
                    
        3. Were you able to execute programs using strings, vectors and array.                      <select name="ques3">
                    <option value=""></option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                    <option value="0">0</option>
                                          
                    </select>
        
        
        4. Were you able to implement the concept of inheritance and interfaces.                     <select name="ques4">
                    <option value=""></option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                    <option value="0">0</option>
                                          
                    </select>
                    
                    
        5. Were you able to illustrate exception handling and multithreading in java.               <select name="ques5">
                    <option value=""></option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                    <option value="0">0</option>
                                          
                    </select>
														
					
					
        
		                                                                   <Button class="BT" type="submit" name="course_sub" >PROCEED</Button>
        
        </pre>
   
    </form>
    
    
    </body>
</html>