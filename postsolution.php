<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


  $user_name=$_GET["username"];

  $problemname=$_GET["pbname"];


  $solution=$_GET["soln"];
 



 





$mysql_qry="insert into solutions (ProblemName,Solution,Username,Likes) values ('$problemname','$solution','$user_name',0);";


if( $conn->query($mysql_qry)==TRUE )
{
	echo "Solution Posted Successfully";
}
else
{
	echo "ERROR:".$sql."<br>".$conn->error;
}
?>