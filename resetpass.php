<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


  $user_name=$_GET['username'];
 $oldpass=$_GET['opassword'];



  $user_pass=$_GET['npassword'];
 




$mysql_qry0="select * from student where Username like '$user_name' and Password like '$oldpass';";
$mysql_qry="update student set Password='$user_pass' where Username like '$user_name' and Password like '$oldpass';";
$result=$conn->query($mysql_qry0);
if( $result->num_rows>0 )
{   $conn->query($mysql_qry);
echo "Password Changed";
   }
   else
	   echo "not changed";


?>