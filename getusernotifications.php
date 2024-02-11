<?php
require 'sessionstart.php';
?>

<?php
include('databaseconnection.php');

// store query in a variable
/*
$sql = "SELECT * FROM usernotif ORDER BY timestmp DESC WHERE firstname=" . $_SESSION['username']. " AND lastname=" . $_SESSION['username1'] . " AND
email=" . $_SESSION['email'] . "";
*/

$sql = "SELECT notification FROM usernotif WHERE firstname='{$_SESSION['username']}' AND lastname='{$_SESSION['username1']}' AND
email= '{$_SESSION['email']}' ORDER BY timestmp DESC";

// perform query and store result in a variable
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $i = 1;
        echo "<p>";
        echo "$i. " . "{$row['notification']}";
        echo "</p>";
        $i++;
    }
}
else
{
    echo "<p style='color:red;'>";
    echo "No Notifications.";
    echo "</p>";
}

// free the result
$result->free_result();

// close the connection
$conn->close();
?>
