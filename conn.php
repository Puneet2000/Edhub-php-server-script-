<?php
$db_name="student_information";
$mysql_username="root";
$mysql_password="";
$server_name="localhost";
$conn=mysqli_connect( $server_name,$mysql_username,$mysql_password,$db_name);
if($conn)
{
	echo "successful";
}
else
{
	echo "unsuccess";
}
?>
