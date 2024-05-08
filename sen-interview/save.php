<?php
$regno=$_POST["id"];
$name=$_POST["name"];
$mobile=$_POST["phn"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$dept=$_POST["dept"];
$password1=$_POST["pass"];
echo $password1 ;
$servername = "localhost";
$username = "root";
$password = "";
//connection
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";
//select DB
mysqli_select_db($conn, "stud_form");
//insert
$sql = "INSERT INTO student_info values($regno,'$name','$mobile','$dob','$gender','$email','$dept')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?><br>
<a href="project.html">Home Page</a><br>
<a href="view.php">Records saved</a>


