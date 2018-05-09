<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


  $user_name=$_GET["username"];

  $purpose=$_GET["purpose"];

  $link=$_GET["link"];

  
 



 





$mysql_qry="insert into usefullinks (Purpose,Link,Username) values ('$purpose','$link','$user_name');";


if( $conn->query($mysql_qry)==TRUE )
{
	echo "Added successfully";
}
else
{
	echo $conn->error;
}
?>