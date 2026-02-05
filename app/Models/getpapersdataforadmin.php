<?php
require '../app/Config/srpss_database_connection.php';

// store query in a variable
$sql = "SELECT * FROM researchpapers ORDER BY id ASC";

// perform query and store result in a variable
$result = $conn->query($sql);

echo "<table>
<tr>
<th>S.N.</th>
<th>Category</th>
<th>Researcher</th>
<th>Topic</th>
<th>Paper</th>
<th>Approved</th>
</tr>";

while($row = $result->fetch_assoc()) {
   echo "<tr>";
   echo "<td>" . $row['id'] . "</td>";
   echo "<td>" . $row['category'] . "</td>";
   echo "<td>" . $row['loggeduser'] . "</td>";
   echo "<td>" . $row['topic'] . "</td>";
   echo "<td>";
   echo "<a href='" .  "displaypaperdata.php?pdf=" . $row['paper'] . "' target='_blank'>"  . $row['topic'] . "</a>";
   echo "</td>";
   echo "<td>" . $row['approved'] . "</td>";
   echo "</tr>";
}
echo "</table>";

$result->free_result();

// close the connection
$conn->close();
?>