<?php
require '../app/Config/srpss_database_connection.php';

// store query in a variable
$sql = "SELECT * FROM magazines";

// perform query and store result in a variable
$result = $conn->query($sql);

echo "<table>
<tr>
<th>S.N.</th>
<th>Name</th>
<th>Publisher</th>
</tr>";

while($row = $result->fetch_assoc()) {
   echo "<tr>";
   echo "<td>" . $row['id'] . "</td>";
   echo "<td>" . $row['magazinename'] . "</td>";
   echo "<td>" . $row['publisher'] . "</td>";
   echo "</tr>";
}
echo "</table>";

// close the connection
$conn->close();
?>