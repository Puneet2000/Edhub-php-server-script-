<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";


  $conn = new mysqli($servername, $username, $password, $dbname);



 
 $query = "SELECT * FROM usefullinks order by ID DESC";
 $result = $conn->query($query);
  if($result->num_rows==0)
  {
	  echo "None";
  }
  else
  {
   $posts = array();
   if($result->num_rows) {
      while($post = mysqli_fetch_assoc($result)) {
         $posts[] = array('post'=>$post);
      }
   }
   echo json_encode(array('posts'=>$posts));
  }







?>