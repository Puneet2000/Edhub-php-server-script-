<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information";


  $conn = new mysqli($servername, $username, $password, $dbname);
  $tag=$_GET['tag'];
$pbtag= array();
$pbtag=json_decode($tag,true);
$posts = array();
 $i=0;
 for($i=0;$i<count($pbtag);$i++)
 { $temp=$pbtag[$i];
 $query = "SELECT * FROM problems where Tag like '$temp'";
 $result = $conn->query($query);
  
   
   if($result->num_rows) {
      while($post = mysqli_fetch_assoc($result)) {
         $posts[] = array('post'=>$post);
      }
   }
 }
   echo json_encode(array('posts'=>$posts));








?>