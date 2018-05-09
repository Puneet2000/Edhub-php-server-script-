<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


  $user_name=$_GET["username"];

  $heading=$_GET["heading"];

  $feed=$_GET["feed"];

  
 



 





$mysql_qry="insert into feeds (Heading,Feed,Username) values ('$heading','$feed','$user_name');";


if( $conn->query($mysql_qry)==TRUE )
{
	echo "Posted Successfully";
}
else
{
	echo $conn->error;
}
?>