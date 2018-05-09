<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


  $user_name=$_GET['username'];
 $oldname=$_GET['oldname'];



  $newname=$_GET['newname'];
 




$mysql_qry0="select * from student where Username like '$user_name' and Name like '$oldname';";
$mysql_qry="update student set Name='$newname' where Username like '$user_name' and Name like '$oldname';";
$result=$conn->query($mysql_qry0);
if( $result->num_rows>0 )
{   $conn->query($mysql_qry);
echo "Name Changed";
   }
   else
	   echo "not changed";


?>