<?php 
$h_id = $_POST['h_id'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$city = $_POST['city'];
$h_name = $_POST['h_name'];
$conn = new mysqli('localhost','root','','test1');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}

else{
    $stmt = $conn->prepare("insert into resistration_h(h_id,city,email,Password,hospital_name)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$h_id,$city,$Email,$Password,$h_name);
    $stmt->execute();
    $stmt->close();
    $conn->close();

}

?>
