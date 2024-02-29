<?php
$servername = "localhost";
$username = "root";  //your user name for php my admin if in local most probaly it will be "root"
$password = "root";  //password probably it will be empty
$databasename = "flipkart"; //Your db nane
// Create connection
$conn = new mysqli($servername, $username, $password,$databasename);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    $result = $conn -> query("SELECT * FROM users");
    $row = $result->fetch_assoc();
    echo $row['userId'];

    $conn->close();
?>
