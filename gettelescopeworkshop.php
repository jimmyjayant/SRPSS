<?php
require('databaseconnection.php');

// store query in a variable
$sql = "SELECT * FROM telescopeworkshop";

// perform query and store result in a variable
$result = $conn->query($sql);

echo "<table style='width:70%;'>
<tr>
<th>S.N.</th>
<th>Workshop Name</th>
<th>Link</th>
</tr>";

while($row = $result->fetch_assoc()) {
   echo "<tr>";
   echo "<td>" . $row['id'] . "</td>";
   echo "<td>" . $row['workshopname'] . "</td>";
   echo "<td><a href='" . $row['link']. "' target='_blank'>" . "Link".  "</a></td>";
   echo "</tr>";
}
echo "</table>";

// close the connection
$conn->close();
?>
