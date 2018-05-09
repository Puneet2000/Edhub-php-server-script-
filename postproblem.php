<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


  $user_name=$_GET["username"];

  $problemname=$_GET["pbname"];

  $problemtag=$_GET["pbtag"];

  $problemtext=$_GET["pbtext"];
 



 





$mysql_qry="insert into problems (ProblemName,Tag,Statement,Username) values ('$problemname','$problemtag','$problemtext','$user_name');";


if( $conn->query($mysql_qry)==TRUE )
{
	echo "Posted Successfully";
}
else
{
	echo "ERROR:".$sql."<br>".$conn->error;
}
?>