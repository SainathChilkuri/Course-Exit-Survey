<?php
session_start();

// initializing variables
$studentname="";
$subject="";
$username = "";
$student="";
$semes="";
$Q1="";
$Q2="";
$Q3="";
$Q4="";
$Q5="";
$rollno="";
$studentname1="";
$username1 = "";
$password1="";
$email    = "";
$year="";
$sem="";
$errors = array(); 
$feedback="";

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'php_tutorial');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $studentname = mysqli_real_escape_string($db, $_POST['studentname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $year = mysqli_real_escape_string($db, $_POST['year']);
  $sem = mysqli_real_escape_string($db, $_POST['sem']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
   if (empty($studentname)) { array_push($errors, "Studentname is required"); }
    if (empty($year)) { array_push($errors, "Current year is required"); }
	 if (empty($sem)) { array_push($errors, "semester is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM registration WHERE username='$username' OR email='$email' OR studentname='$studentname' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['studentname'] === $studentname) {
      array_push($errors, "Student is Already enrolled");
    }
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    //encrypt the password before saving in the database

        $query = "INSERT INTO registration (username, email, password,studentname,year,sem) 
              VALUES('$username', '$email', '$password_1', '$studentname','$year','$sem')";
        mysqli_query($db, $query);
    $_SESSION['username'] = $username;
	$_SESSION['sem'] = $sem;
    $_SESSION['success'] = "You are now logged in";
    header('location: index1.php');
  }
}

if (isset($_POST['course_sub'])) {
	$db = mysqli_connect('localhost', 'root', '', 'php_tutorial');
  // receive all input values from the form
  $student = mysqli_real_escape_string($db, $_POST['name']);
  $semes = mysqli_real_escape_string($db, $_POST['sem']);
  $rollno = mysqli_real_escape_string($db, $_POST['rollno']);
  $subject=mysqli_real_escape_string($db, $_SESSION['subject']);
  $Q1 = mysqli_real_escape_string($db, $_POST['ques1']);
  $Q2 = mysqli_real_escape_string($db, $_POST['ques2']);
  $Q3 = mysqli_real_escape_string($db, $_POST['ques3']);
  $Q4 = mysqli_real_escape_string($db, $_POST['ques4']);
  $Q5 = mysqli_real_escape_string($db, $_POST['ques5']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
   if (empty($student)) { array_push($errors, "Studentname is required"); }
    if (empty($semes)) { array_push($errors, "semester is required"); }
	 if (empty($Q1)) { array_push($errors, "feedback is empty"); }
  if (empty($Q2)) { array_push($errors, "feedback is empty"); }
  if (empty($Q3)) { array_push($errors, "feedback is empty"); }
  if (empty($Q4)) { array_push($errors, "feedback is empty"); }
  if (empty($Q5)) { array_push($errors, "feedback is empty"); }
  
 $query = "SELECT * FROM users WHERE studentsname='$student' AND subject='$subject'";
    $results = mysqli_query($db, $query);
	$feedback = mysqli_fetch_assoc($results);
	$subb=$feedback['subject'];
		if($subject == $subb )
		{
			array_push($errors, "you already given feedback to this subject");
		}
	
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  /*$user_check_query = "SELECT * FROM registration WHERE username='$username' OR email='$email' OR studentname='$studentname' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['studentname'] === $studentname) {
      array_push($errors, "Student is Already enrolled");
    }
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }*/

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    //encrypt the password before saving in the database

    $query1 = "INSERT INTO users (studentsname,rollno,semester,subject,Q1,Q2,Q3,Q4,Q5) 
                VALUES('$student','$rollno','$semes','$subject','$Q1','$Q2','$Q3','$Q4','$Q5')";
    mysqli_query($db, $query1);
    $_SESSION['student'] = $student;
	$_SESSION['semes'] = $semes;
    header('location: new.php');
  }
}
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
   
    $query = "SELECT * FROM registration WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) 
	{
      $_SESSION['username'] = $username;
	 
    $user = mysqli_fetch_assoc($results);
    $email=$user['email'];
	$studentname1=$user['studentname'];
	$_SESSION['studentname1']=$studentname1;
    $_SESSION['email'] = $email;
	$sem=$user['sem'];
	$_SESSION['sem']=$sem;
      
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
		}
	  }
	}
	if (isset($_POST['Flogin_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['Fusername']);
  $password = mysqli_real_escape_string($db, $_POST['Fpassword']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
   
    if($username == "admin" && $password == "12345")
	{     
   
		header('location: htmll.php');
	}
	else {
	array_push($errors, "Wrong username/password combination");	
  }
	}
	}
	?>