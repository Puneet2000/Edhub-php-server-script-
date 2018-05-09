<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


  $user_name=$_GET['username'];




  $biography=$_GET['biography'];
 





$mysql_qry="update student set Biography='$biography' where Username like '$user_name';";

if( $conn->query($mysql_qry)==true )
{   
echo "Biography Changed";
   }
   else
	   echo "not changed";


?>