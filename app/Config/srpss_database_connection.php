<?php
// Connect to the 'srpss' database but do not disconnect 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "srpss";

// Create connection
try
{
    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error)
    {
        throw new Exception("Error Connecting Database");
    }
}
catch(Exception $e)
{
    $error = 'Database connection failed!';
}
?>
