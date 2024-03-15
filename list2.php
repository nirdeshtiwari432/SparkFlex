<?php
   
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $city = $_POST['city'];
    $host = "localhost";
    $dbusername = "root";
    $dbpassword ="";
    $dbname = "test1";
   $conn = new mysqli('localhost','root','','test1'); 
    if($conn->connect_error){
        die('connection failed :'.$conn->connect_error);
    }
    $query ="SELECT h_id,city,hospital_name,h_status  FROM resistration_h WHERE city = $city";
    $result = $conn->query($query);
    if($result->num_rows>0){
        while ($row = $result->fetch_assoc()) {
            
            echo "<tr><td>". $row["hospital_name"] ."</td><td>" ."</td><td>". $row["city"] .$row["h_id"] .$row["h_status"] ."</td></tr>";
        }
        echo "<?table>";
        exit(); 
    }else{
        header("Location:index2.html");
        exit();
}
$conn->close();
    }
    ?>