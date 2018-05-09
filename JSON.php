<?php
 
/* disable cache in browser */
 


 
/* encode an sql query */
 
function encodequery($query) {
  
 
   $result = $conn->query($query);
  
   $posts = array();
   if($result->num_rows) {
      while($post = mysql_fetch_assoc($result)) {
         $posts[] = array('post'=>$post);
      }
   }
   encodearray($posts);
}
 
/* Encode array to JSON string */
function encodearray($posts) {
   header('Content-type: application/json');
   echo json_encode(array('posts'=>$posts));
}
 
?>