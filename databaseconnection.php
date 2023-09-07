<?php
// Connect to the 'srpss' database but do not disconnect 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "srpss";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if($conn->connect_error) {
    $dbconnerror = "<p style='color:red;font-weight:bold;background:yellow;'>Error Connecting Database.</p><br>";
    echo $dbconnerror;
    die("Connection failed: " . $conn->connect_error);
}
?>
