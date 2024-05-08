<?php
//view
include("conn.php");
//select DB
mysqli_select_db($conn, "stud_form");
$sql = "SELECT * from student_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<center><table border=5 color=#33ffff><tr><th>student regno</th><TH>student name</th><th>Mobile</th><th>D.O.B</th><th>Gender</th><th>Email</th><th>Department</th><th>remove</th></tr>";
  while($row = $result->fetch_assoc()) {
	  $id=$row["regno"];
    echo "<tr><td>" .$row["regno"] ."</td><td>" .$row["name"]. "</td><td>".$row["mobile"]."</td><td>".$row["dob"]."</td><td>".$row["gender"]."</td><td>".$row["email"]."</td><td>".$row["dept"]."</td><td><a href='delete.php?id=".$id."'>Delete</a></td></tr>";
  }
  echo "</table></center>";
} else {
  echo "0 results";
}
?>
<center><a href="project.html">Home Page</a><br>