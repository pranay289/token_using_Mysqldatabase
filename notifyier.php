<?php 
        require "connection.php";
        $ar=array();
        $query="SELECT * FROM voters";
        $res=mysqli_query($conn,$query);
        while($r=mysqli_fetch_assoc($res))
        {
            array_push($ar,$r['token']);
        }
        print_r($ar);
        
    $title="Something";
    $message="New for you";
        
        
        define( 'API_ACCESS_KEY', 'API_KEY');
$msg = array
(
    'body'   =>$message,
    'title'     => $title,
   


   
);

$fields = array
(
    'registration_ids'            =>  $ar  ,                 // "/topics/alert",
    'priority' =>"high",
    'data' => array("title"=>$title,"body"=>$message,"image"=>"url")


);

$headers = array
(
    'Authorization: key=' . API_ACCESS_KEY,
    'Content-Type: application/json'
);

$ch = curl_init();
curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
$result = curl_exec($ch );
curl_close( $ch );
echo $result;


   
?>   
