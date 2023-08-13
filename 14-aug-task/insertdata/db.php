<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="products";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}


// $sql = "INSERT INTO product (productname, productcategory, price,itemQuntity)
//  VALUES
// ('samsung', 'phone', 500 ,100),
// ('iphone', 'phone', 700 ,50),
// ('honor', 'phone', 300 ,150),
// ('note12', 'phone', 500 ,100) 
// ";
   

// if ($conn->query($sql) === TRUE) {
//     $last_id = $conn->insert_id;
//     echo "New record created successfully. Last inserted ID is: " . $last_id;
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();
?>