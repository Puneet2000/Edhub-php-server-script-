<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


  $user_name=$_GET['username'];
 



  $user_pass=$_GET['password'];
 





$mysql_qry="update student set Password='$user_pass' where Username like '$user_name';";

if( $conn->query($mysql_qry)==TRUE )
{   echo "Password Changed";
   }


?>