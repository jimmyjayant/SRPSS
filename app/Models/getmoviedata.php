<?php
require '../app/Config/srpss_database_connection.php';

// store query in a variable
$sql = "SELECT * FROM movies";

// perform query and store result in a variable
$result = $conn->query($sql);

echo "<table>
<tr>
<th>S.N.</th>
<th>Name</th>
</tr>";

while($row = $result->fetch_assoc()) {
   echo "<tr>";
   echo "<td>" . $row['id'] . "</td>";
   echo "<td>" . $row['moviename'] . "</td>";
   echo "</tr>";
}
echo "</table>";

// close the connection
$conn->close();
?>
