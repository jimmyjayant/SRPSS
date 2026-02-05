<?php
   require '../app/Config/srpss_database_connection.php';
   if(isset($error))
   {
      echo $error;
      exit();
   }
   // store query in a variable
   $sql = "SELECT * FROM magazines";

   // perform query and store result in a variable
   $result = $conn->query($sql);

   if($result->num_rows > 0)
   {
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
   }
   else
   {
      echo "<p style='color:red;'>No Magazine data found.</p>";
   }
   // close the connection
   $conn->close();
?>
