<?php
   try
   {
      if(!file_exists('../app/Config/world_database_connection.php'))
      {
         throw new Exception('world_database_connection.php file is missing.');
      }
      else
      {
         require '../app/Config/world_database_connection.php';
         if(isset($error))
         {
            echo $error;
         }
         else
         {
            // store query in a variable
            $sql = "SELECT * FROM belgium";

            // perform query and store result in a variable
            $result = $conn->query($sql);

            if($result->num_rows > 0)
            {
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
            }
            else
            {
               echo "No record found at the moment.";
            }

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
