<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


  $user_name=$_GET['username'];
 $question=$_GET['question'];



  $answer=$_GET['answer'];
 




$mysql_qry="update student set Question='$question'  where Username like '$user_name' ;";
$mysql_qry1="update student set Answer='$answer'  where Username like '$user_name' ;";

if( $conn->query($mysql_qry)==true && $conn->query($mysql_qry1)==true)
{  
echo "Ques Changed";
   }
   else
	   echo "not changed";


?>