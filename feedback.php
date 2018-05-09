<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$feedback=$_GET['feedback'];
 



 





$mysql_qry="insert into Feedback (Feedback) values ('$feedback');";


if( $conn->query($mysql_qry)==TRUE )
{
	echo "Thankyou for your Feedback";
}

?>