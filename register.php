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
 $mysql1="select * from iith where Branch like '$branch' and Year like '$year' and $roll_number between 1 AND Number;";
 $mysql2="select * from student where Username like '$user_name';";
 $mysql="insert into student (Username,Password) values ($user_name,$password);";
 $resulta=$conn->query($mysql1);
 $resultb=$conn->query($mysql2);

 
	if($resultb->num_rows ==0 && $resulta->num_rows>=1)
	{ $result=$conn->query($mysql);
		if($result==true)
		{
			echo "success";
		}
	}
	else
	{
		echo "ERROR";
	}

 ?>