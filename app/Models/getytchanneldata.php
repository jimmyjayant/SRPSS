<?php
    try
   {
      if(!file_exists('../app/Config/srpss_database_connection.php'))
      {
         throw new Exception("srpss_database_connection.php is missing.");
      }
      else
      {
         require '../app/Config/srpss_database_connection.php';
         if(isset($error))
         {
            echo "<script>alert($error);</script>";
            //exit();
         }
         else
         {
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
         }
      }
   }
   catch(Exception $e)
   {
      echo "<script>alert('{$e->getMessage()}');</script>";
   }
?>
