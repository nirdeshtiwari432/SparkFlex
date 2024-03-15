<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<link rel="stylesheet" type="" href="style.css">
</head>
<body id = "BODY">

<input type="button" onclick="location.href='editinfo.html';" value="Contact" />

<table> 
   <tr>
   <<th>p_name</th>
    <th>Mobile_Number</th>
    <th>p_problem</th>
    <th>day</th>
</tr>

 <?php
    $host = "localhost";
    $dbusername = "root";
    $dbpassword ="";
    $dbname = "test1";
   $conn = new mysqli('localhost','root','','test1'); 
    if($conn->connect_error){
        die('connection failed :'.$conn->connect_error);
    }
    $query ="SELECT *  FROM p ";
    $result = $conn->query($query);
    if($result->num_rows>0){
        while ($row = $result->fetch_assoc()) {
            
            echo "<tr><td>". $row["p_name"] ."</td><td>". "</td><td>" ."</td><td>". $row["Mobile_Number"]."</td><td>"."</td><td>" . $row["p_problem"]."</td><td>". "</td><td>" . $row["day"] ."</td></tr>";
        }
        echo "<?table>";
        exit(); 
    }else{
        header("Location:index3.php");
        exit();
}
$conn->close();

?>
</table>
    <button type="button"  herf = "edit_info.html">EDIT INFO</button>

     
    <a href="index.html">Back to Home</a>
</div>

</body>
</html>
