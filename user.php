<!DOCTYPE html>
<html>
<head>
<style>
table {
 width: 100%;
 border-collapse: collapse;
}
table, td, th {
 border: 1px solid black;
 padding: 5px;
}
th {text-align: left;}
</style>
</head>
<body>
<?php
$q = strval($_GET['q']);
$con = mysqli_connect('localhost','root','','php_tutorial');
if (!$con) {
 die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"php_tutorial");
$sql="SELECT * FROM users WHERE subject = '".$q."' OR semester = '".$q."' OR studentsname = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Student Name</th>
<th>ROLL NO</th>
<th>Subject</th>
<th>Semester</th>
<th>Year</th>
<th>Q1</th>
<th>Q2</th>
<th>Q3</th>
<th>Q4</th>
<th>Q5</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
 echo "<tr>";
 echo "<td>" . $row['studentsname'] . "</td>";
 echo "<td>" . $row['rollno'] . "</td>";
 echo "<td>" . $row['subject'] . "</td>";
 echo "<td>" . $row['semester'] . "</td>";
 if($row['semester'] == 'SEMESTER5' || $row['semester'] == 'SEMESTER6' ) {
	 echo  "<td>" ."THIRD YEAR" . "</td>";
 }
  if($row['semester'] == 'SEMESTER1' || $row['semester'] == 'SEMESTER2' ) {
	 echo  "<td>" ."FIRST YEAR" . "</td>";
 }
  if($row['semester'] == 'SEMESTER3' || $row['semester'] == 'SEMESTER4' ) {
	 echo  "<td>" ."SECOND YEAR" . "</td>";
 }
  if($row['semester'] == 'SEMESTER7' || $row['semester'] == 'SEMESTER8' ) {
	 echo  "<td>" ."FINAL YEAR" . "</td>";
 }
 echo "<td>" . $row['Q1'] . "</td>";
 echo "<td>" . $row['Q2'] . "</td>";
 echo "<td>" . $row['Q3'] . "</td>";
 echo "<td>" . $row['Q4'] . "</td>";
 echo "<td>" . $row['Q5'] . "</td>";
 echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>