<?php
require 'sessionstart.php';
?>

<?php
require 'srpss_database_connection.php';

// store query in a variable
/*
$sql = "SELECT * FROM usernotif ORDER BY timestmp DESC WHERE firstname=" . $_SESSION['username']. " AND lastname=" . $_SESSION['username1'] . " AND
email=" . $_SESSION['email'] . "";
*/

$sql = "SELECT usrnotification FROM usernotif WHERE firstname='{$_SESSION['username']}' AND lastname='{$_SESSION['username1']}' AND
email= '{$_SESSION['email']}' ORDER BY timestmp DESC";

// perform query and store result in a variable
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    $i = 1;
    while($row = $result->fetch_assoc())
    {
        echo "<p>";
        echo "$i. " . "{$row['usrnotification']}";
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
