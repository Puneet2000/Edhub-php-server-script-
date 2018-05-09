<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if($_SERVER['REQUEST_METHOD'] == 'GET')
 {
 $DefaultId = 0;
 
 $ImageData = $_GET['image'];
 
 $user_name = $_GET['username'];

 
 
 $ImagePath = "images/$user_name.jpg";
 
 $ServerURL = "https://172.16.166.181/$ImagePath";
 
 $InsertSQL = "insert into profilepicrure (Path,Username) values ('$ServerURL','$user_name')";
 
 if(mysqli_query($conn, $InsertSQL)){

 file_put_contents($ImagePath,base64_decode($ImageData));

 echo "Your Image Has Been Uploaded.";
 }
 
 mysqli_close($conn);
 }else{
 echo "Not Uploaded";
 }

?>