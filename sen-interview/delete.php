<?php
IF(ISSET($_GET["id"]))
{
$id=$_GET["id"];
INCLUDE("conn.php");
$sql="delete from student_info where regno='$id'";
$result = $conn->query($sql);
if($result)
	{
     header("location:view.php");
	}
else 
	{
		echo"record not deleted";
	}
}
else
	{
 echo"value not come";
    }

?>