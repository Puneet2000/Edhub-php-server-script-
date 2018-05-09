<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


  $user_name=$_GET["username"];
 



  $solutionid=$_GET["solutionid"];
 
$ischecked=$_GET["ischecked"];



if($ischecked=="Uncheck")
{$mysql_qry="delete FROM Likes WHERE Username LIKE '$user_name' AND SolutionID LIKE '$solutionid';";
$conn->query("update solutions set Likes=Likes-1 where SolutionID LIKE '$solutionid';");
}
else if($ischecked=="Check")
{$mysql_qry="insert into Likes (Username,SolutionID) values('$user_name' , '$solutionid');";
$conn->query("update solutions set Likes=Likes+1 where SolutionID LIKE '$solutionid';");
}
$result= $conn->query($mysql_qry);

if( $result==true )
{
	echo "Success";
}
else
{
	echo "Unsuccess";
}
?>