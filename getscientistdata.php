<?php
require('databaseconnection.php');

// store query in a variable
$sql = "SELECT * FROM scientists";

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
   echo "<td>" . $row['scientistname'] . "</td>";
   echo "</tr>";
}
echo "</table>";

// close the connection
$conn->close();
?>
