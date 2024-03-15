<?php 
$dr_name = $_POST['dr_name'];
$dr_id = $_POST['dr_id'];
$phone = $_POST['mobile'];
$specialization = $_POST['specialization'];
$experience = $_POST['experience'];
$age = $_POST['age'];
$status = $_POST['status'];

$conn = new mysqli('localhost','root','','test1');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}

else{
    $stmt = $conn->prepare("insert into avaliable_dr(dr_name,dr_id,phone,specialization,experience,age,status)
    values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssss",$dr_name,$dr_id,$phone,$specialization,$experience,$age,$status);
    $stmt->execute();
    $stmt->close();
    $conn->close();

}

?>
