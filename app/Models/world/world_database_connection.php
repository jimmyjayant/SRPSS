<?php
// Connect to the 'world' database but do not disconnect 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "world";

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
    $_SESSION['error'] = "<p style='color:red;'>{$e->getMessage()}</p>";
}
?>
