<?php
require '../app/Config/world_database_connection.php';

// store query in a variable
$sql = "SELECT * FROM armenia";

// perform query and store result in a variable
$result = $conn->query($sql);

echo "<table>
<tr>
<th>S.N.</th>
<th>Name of Institute</th>
<th>Link</th>
</tr>";

while($row = $result->fetch_assoc()) {
   echo "<tr>";
   echo "<td>" . $row['id'] . "</td>";
   echo "<td>" . $row['insname'] . "</td>";
   echo "<td>";
   echo "<a href='" . $row['link'] . "' target='_blank'>" . "Link" . "</a>";
   echo "</td>";
   echo "</tr>";
}
echo "</table>";

// close the connection
$conn->close();
?>
