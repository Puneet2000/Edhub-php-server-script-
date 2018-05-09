<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";


  $conn = new mysqli($servername, $username, $password, $dbname);


$user_name=$_GET['username'];
 
 $query = "SELECT ProfilePic FROM profilepic where Username like '$user_name'";
 $result = $conn->query($query);
  
   $posts = array();
   if($result->num_rows) {
      while($post = mysqli_fetch_assoc($result)) {
         $posts[] = array('post'=>$post);
      }
   }
   echo json_encode(array('posts'=>$posts));








?>