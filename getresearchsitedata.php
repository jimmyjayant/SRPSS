<?php
include('databaseconnection.php');

// store query in a variable
$sql = "SELECT * FROM researchsites";

// perform query and store result in a variable
$result = $conn->query($sql);

echo "<table>
<tr>
<th>S.N.</th>
<th>Name of Institute</th>
<th>Head Quarter</th>
</tr>";

while($row = $result->fetch_assoc()) {
   echo "<tr>";
   echo "<td>" . $row['id'] . "</td>";
   echo "<td>" . $row['sitename'] . "</td>";
   echo "<td>" . $row['headquarter'] . "</td>";
   echo "</tr>";
}
echo "</table>";

// close the connection
$conn->close();
?>
