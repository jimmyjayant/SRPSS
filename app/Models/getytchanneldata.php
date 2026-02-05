<?php
   require '../app/Config/srpss_database_connection.php';
   if(isset($error))
   {
      echo $error;
      exit();
   }
   // store query in a variable
   $sql = "SELECT * FROM ytchannels";

   // perform query and store result in a variable
   $result = $conn->query($sql);

   echo "<table>
   <tr>
   <th>S.N.</th>
   <th>Name</th>
   <th>Handle</th>
   </tr>";

   while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['channelname'] . "</td>";
      echo "<td>" . $row['handle'] . "</td>";
      echo "</tr>";
   }
   echo "</table>";

   // close the connection
   $conn->close();
?>
