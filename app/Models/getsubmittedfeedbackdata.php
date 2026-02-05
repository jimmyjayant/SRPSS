<?php
require '../app/Views/sessionstart.php';
?>

<?php
// Connect to 'srpss' database and output necessary form information from 'feedback' table using MySQLi Object-Oriented method:- 

require 'srpss_database_connection.php';

// sql query
$sql = "SELECT * from feedback WHERE email='{$_SESSION['email']}' ORDER BY 'timestamp' DESC";

// perform query and store result in a variable
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Topic</th>";
    echo "<th>Message</th>";
    echo "<th>Approved</th>";
    echo "<th>Submitted</th>";
    echo "</tr>";
    while($row = $result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['topic']}</td>";
        echo "<td>{$row['mess']}</td>";
        if($row['approved'] == 0)
        {
            echo "<td>Not Yet</td>";
        }
        if($row['approved'] == 1)
        {
            echo "<td style='color:green;'>Yes</td>";
        }
        if($row['approved'] == -1)
        {
            echo "<td style='color:red;'>No</td>";
        }
        echo "<td>{$row['timestamp']}</td>";
        echo "</tr>";
    }
    echo "</table>";
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

