<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password,'stud_form');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>