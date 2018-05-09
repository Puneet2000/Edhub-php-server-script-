<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


  $user_name=$_GET["username"];
 



  $user_pass=$_GET["password"];
 





$mysql_qry="SELECT * FROM student WHERE Username LIKE '$user_name' AND Password LIKE '$user_pass';";
$result= $conn->query($mysql_qry);

if( $result->num_rows >0 )
{
	echo "login successful";
}
else
{
	echo "login Unsuccessful";
}
?>