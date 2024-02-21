<?php
require 'sessionstart.php';
?>

<?php
include('databaseconnection.php');

// store query in a variable
$sql = "SELECT * FROM researchpapers WHERE loggeduser='{$_SESSION['username']}' AND email='{$_SESSION['email']}' ORDER BY id ASC";

// perform query and store result in a variable
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    echo "<table>
    <tr>
    <th>S.N.</th>
    <th>Category</th>
    <th>Researcher</th>
    <th>Topic</th>
    <th>Paper</th>
    <th>Approved</th>
    </tr>";
    while($row = $result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['category'] . "</td>";
        echo "<td>" . $row['loggeduser'] . "</td>";
        echo "<td>" . $row['topic'] . "</td>";
        echo "<td>";
        echo "<a href='" .  "displaypaperdata.php?pdf=" . $row['paper'] . "' target='_blank'>"  . $row['topic'] . "</a>";
        echo "</td>";
        if($row['approved'] == 0)
        {
            echo "<td>" . "No" . "</td>";
        }
        if($row['approved'] == 1)
        {
            echo "<td style='color:green;'>" . "Yes" . "</td>";
        }
        if($row['approved'] == -1)
        {
            echo "<td style='color:red;'>" . "Rejected" . "</td>";
        }
        
        
        echo "</tr>";
    }
    echo "</table>";
}
else 
{
   echo "<p style='color:red;'>No Research Papers Submitted.</p>";
}


$result->free_result();

// close the connection
$conn->close();
?>
