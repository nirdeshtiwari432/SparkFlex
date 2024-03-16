<?php 
$status = $_POST['status'];
$h_id = $_POST['h_id'];


$conn = new mysqli('localhost','root','','test1');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}

else{
   
    $stmt = "update resistration_h set h_status = '$status' where h_id = '$h_id' ";
    
    $result = $conn->query($stmt);
    
}

?>
