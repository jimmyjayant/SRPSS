<?php 
// Create database and input necessary information

// Create connection using MySQLi Object-Oriented

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if($conn->connect_error) {
    $createdataerror = "<p style='color:red;font-weight:bold;background:yellow;'>Error Connecting Server.</p><br>";
    echo $createdataerror;
    die("Connection failed: " . $conn->connect_error);
}

// store query in a variable
$sql = "CREATE DATABASE IF NOT EXISTS srpss";

// Create database 
$conn->query($sql);

if(!($conn->query($sql) === TRUE))
{
  echo "<p style='color:red;font-weight:bold;background:yellow;'>Error Creating database.</p><br>";
}

// Close the connection
$conn->close();
?>






<?php 
// include file 'databaseconnection.php'
include('databaseconnection.php');

// Importing SQL file 'srpss.sql' into MySQL database 'srpss'

// Check if tables already exists within the srpss database
$tableCheckQuery = "SHOW TABLES FROM $dbname";

$tablesResult = $conn->query($tableCheckQuery);

if($tablesResult->num_rows > 0)
{
        //echo "Tables already exist. Skipping import.";
}
else 
{
        // Path to sql file
        $sqlfile = "srpss.sql";

        $sql = file_get_contents($sqlfile);

        if(!($conn->multi_query($sql) === TRUE))
        {
                echo "Import failed. Error: " . $conn->error;
        }
}


// Close the connection
$conn->close();

?>
