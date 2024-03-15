<!DOCTYPE html>
<html lang="en">
<head>
<<link rel="stylesheet" type="" href="style.css">> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home Page</title>
<script src= "main.js">
<script src = "db2.js"> </script>

</head>
<body >
<main>
<section class = "one">
    <div id = "div1">
    <h1>Welcome to Our Website</h1>
</div>
</section>
<section class="two">
    <div id = "link1">
<ul >
    <li><a href="index.html">Logout</a></li>
    <li><a href="registration.html">Registration</a></li>
    <li><a href="about.html">About</a></li> 
</ul>
</div>

  

<div id="bookingForm" class="booking-form" >
        <h2>Booking Form</h2>
        <form action="confirm_bookin.php" method="post">
            <form action="p_detail.php" method="post">
        <label for="p_name">p_name:</label>
        <input type="text" id="p_name" name="p_name" required>
        <br>

        <label for="p_adhar">Mobile Number:</label>
        <input type="text" id="p_adhar" name="p_adhar" required>
        <br>
        <label for="p_problem">p_problem:</label>
        <input type="text" id="p_problem" name="p_problem" required>
        <br>
        <br>
        <label for="Hospital_Name">Hospital Name:</label>
        <input type="text" id="Hospital_Name" name="Hospital_Name" >
        <br>
        <label for="h_id">h_id:</label>
        <input type="text" id="h_id" name="h_id" required>
        <br>
        <label for="day">date:</label>
        <input type="date" id="day" name="day" required>
        <br>
        <input type="submit" value="submit" href ="">
    </form>
        </form>
    </div>
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<<link rel="stylesheet" type="" href="style.css">> 
</head>
<body id = "BODY">


<table> 
   <tr>
   <<th>h_name</th>
    <th>h_city</th>
    <th>h_status</th>
    <th>h_id</th>
</tr>



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
    $query ="SELECT h_id,city,hospital_name,h_status  FROM resistration_h WHERE city = '$city'";
    $query2 ="SELECT * FROM avaliable_dr";
    $result = $conn->query($query);
    $result2 = $conn->query($query2);
    
    if($result->num_rows>0){
        while ($row = $result->fetch_assoc()) {
            
            echo "<tr><td>". $row["hospital_name"] ."</td><td>" ."</td><td>". $row["city"] .$row["h_id"] .$row["h_status"] ."</td></tr>";
        }
        echo "<?table>";
        
    }else{
        header("Location:");
        exit();
}



    }
    ?> 
   
</table>
<table> 
   <tr>
   <<th>dr_name</th>
    <th>phone</th>
    <th>specialization</th>
    <th>experience</th>
    <th>age</th>
    <th>status</th>
    <th>hospital</th>
</tr>

<?php





if($result2->num_rows>0){
    while ($row = $result2->fetch_assoc()) {
    
        echo "<tr><td>". $row["dr_name"] ."</td><td>" ."</td><td>". $row["phone"]. "</td><td>" ."</td><td>".$row["specialization"]."</td><td>" ."</td><td>" .$row["experience"] ."</td><td>" ."</td><td>" .$row["status"]."</td><td>" ."</td><td>" .$row["hospital"] ."</td></tr>";
    }
    echo "<?table>";
    exit(); 
}else{
    header("Location:");
    exit();
}


?>
</table>
     
    <a href="index.html">Back to Home</a>
</div>

</body>
</html>

   
</main>
</body>
</script>
</html>
