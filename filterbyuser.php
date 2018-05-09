<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";


  $conn = new mysqli($servername, $username, $password, $dbname);
  $user=$_GET['user'];
$pbtag= array();
$pbtag=json_decode($user,true);
$posts = array();
 $i=0;
 for($i=0;$i<count($pbtag);$i++)
 { $temp=$pbtag[$i];
 $query = "SELECT * FROM problems where Username like '$temp'";
 $result = $conn->query($query);
  
   
   if($result->num_rows) {
      while($post = mysqli_fetch_assoc($result)) {
         $posts[] = array('post'=>$post);
      }
   }
 }
   echo json_encode(array('posts'=>$posts));








?>