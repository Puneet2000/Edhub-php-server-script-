<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";


  $conn = new mysqli($servername, $username, $password, $dbname);


$user_name=$_GET['username'];
$image=$_GET['image'];


$path="images/".$user_name.'.jpg';
file_put_contents($path,$image);


 $query = "insert into profilepic (Username,ProfilePic) values( '$user_name','$path');";
 $result = $conn->query($query);
  if($result==true)
	  echo "Success";
  else
	  echo "Not Success";







?>