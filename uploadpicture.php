<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$image=$_GET["image"];
$pic=json_decode($image);
$user_name=$_GET["username"];
$upload_path="images/".$user_name.".png";
file_put_contents($upload_path,base64_decode($pic));
?>