<?php
include('databaseconnection.php');

// store query in a variable
$sql = "SELECT * FROM observatory";

// perform query and store result in a variable
$result = $conn->query($sql);

echo "<table>
<tr>
<th>S.N.</th>
<th>Observatory Name</th>
</tr>";

while($row = $result->fetch_assoc()) {
   echo "<tr>";
   echo "<td>" . $row['id'] . "</td>";
   echo "<td>" . $row['observatoryname'] . "</td>";
   echo "</tr>";
}
echo "</table>";

// close the connection
$conn->close();
?>