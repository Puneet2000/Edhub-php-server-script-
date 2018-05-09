<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$branch=$_GET["branch"];
$year=$_GET["year"];
$roll_number=$_GET["rollnumber"];
$name=$_GET["Name"];
$question=$_GET["question"];
$answer=$_GET["answer"];
$user_pass=$_GET["password"];
$user_name=$branch.$year."BTECH110".$roll_number;

  
 $mysql1="select * from iith where Branch like '$branch' and Year like '$year' and Number>='$roll_number';";
 $mysql2="select * from student where Username like '$user_name';";
$resulta=$conn->query($mysql1);
 $resultb=$conn->query($mysql2);

$text="No biography yet";
 





$mysql_qry="insert into student (Username,Password,Biography,Rating,Name,Question,Answer,RatedNo) values('$user_name','$user_pass','$text',0,'$name','$question','$answer',0);";

if($resultb->num_rows ==0 && $resulta->num_rows>=1)
{
	
if( $conn->query($mysql_qry)==TRUE )
{
	echo "Success";
}
else
	echo $conn->error;
}
else
{
	echo "Username doesn't/already exists";
}
?>