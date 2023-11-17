<?php
include('databaseconnection.php');

// store query in a variable
$sql = "SELECT * FROM feedback";

// perform query and store result in a variable
$result = $conn->query($sql);

echo "<table>
<tr>
<th>S.N.</th>
<th>Name</th>
<th>Topic</th>
<th>Contact</th>
<th>Email</th>
<th>Message</th>
<th>Approved</th>
</tr>";

while($row = $result->fetch_assoc()) {
   echo "<tr>";
   echo "<td>" . $row['id'] . "</td>";
   echo "<td>" . $row['fname'] . "</td>";
   echo "<td>" . $row['topic'] . "</td>";
   echo "<td>" . $row['contact'] . "</td>";
   echo "<td>" . $row['email'] . "</td>";
   echo "<td>" . $row['mess'] . "</td>";
   echo "<td>" . $row['approved'] . "</td>";
   echo "</tr>";
}
echo "</table>";

// close the connection
$conn->close();
?>
