<?php
require 'sessionstart.php';
?>

<?php
// Connect to 'srpss' database and output necessary form information from 'feedback' table using MySQLi Object-Oriented method:- 

include('databaseconnection.php');

// sql query
$sql = "SELECT mess from feedback WHERE email='{$_SESSION['email']}' ORDER BY 'timestamp' DESC";

// perform query and store result in a variable
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    $i = 1;
    while($row = $result->fetch_assoc())
    {
        echo "<p>";
        echo "$i {$row['mess']}";
        echo "</p>";
        $i++;
    }
}
else
{
    echo "<p style='color:red;'>";
    echo "No Feedback submitted by you.";
    echo "</p>";
}

// free the result
$result->free_result();

// close the connection
$conn->close();
?>

