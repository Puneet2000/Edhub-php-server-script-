<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


  $user_name=$_GET["username"];
 



  $solutionid=$_GET["solutionid"];
 





$mysql_qry="SELECT * FROM Likes WHERE Username LIKE '$user_name' AND SolutionID LIKE '$solutionid';";
$result= $conn->query($mysql_qry);

if( $result->num_rows >0 )
{
	echo "Liked";
}
else
{
	echo "Not Liked";
}
?>