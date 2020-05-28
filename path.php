<?php
   
   require 'connection.php';
   
$token=$_POST['token'];

 $query="INSERT INTO voters (token) VALUES('$token')";
 
 $res=mysqli_query($conn,$query);
 
 if($res)
 {
     echo json_encode(array("response"=>true));
 }else
 {
     echo json_encode(array("response"=>false));
 }



?>
