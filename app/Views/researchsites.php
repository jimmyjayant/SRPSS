<?php
   require 'sessionstart.php';
   try
   {
      if(!file_exists('../app/Models/checkcookie.php'))
      {
         throw new Exception("checkcookie.php is missing.");
      }
      else
      {
         require '../app/Models/checkcookie.php';
      }
   }
   catch(Exception $e)
   {
      echo "<script>alert('{$e->getMessage()}');</script>";
   }
?>

   <?php require 'headerandnavbar.php'; ?>
   <?php
      $cachefile = "../writable/cache/" . "researchsites_main_body.php" . ".cache";
      $cachetime = 3600; // 1 hour (cache time in seconds)
      // If the cache file exists and is younger than the cache time, then include it
      if(file_exists($cachefile) && (filemtime($cachefile) + $cachetime > time()))
      {
         require($cachefile);
         //exit();
      }
      else
      {
         ob_start(); // Start the output buffer
         $html = <<<HEREDOC
                  <div class="main">
                  <h2>
                     List of Important Research Centres in India 
                  </h2>

                  <p>
                     The development of a country depends on the availability of research centres in various fields. There are several research centers in India in many diversified fields. Every centre plays its very crucial role in its key area. 

                     <br>
                     <br>

                     <b>Here is the list of Important Research Institute of various fields in India: </b>
                  </p>

                  <br>
                  <br>
                  <!-- Data from Database will be listed here -->
                  <div id="researchsites">
HEREDOC;
         echo $html;

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
                  $sql = "SELECT * FROM researchsites";

                  // perform query and store result in a variable
                  $result = $conn->query($sql);

                  if($result->num_rows > 0)
                  {
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
                  }
                  else
                  {
                     echo "No record found at the moment.";
                  }
               }
            }
         }
         catch(Exception $e)
         {
            echo "<script>alert('{$e->getMessage()}');</script>";
         }

         $html1 = <<<HEREDOC
         </div>
               </div>
HEREDOC;

echo $html1;

// Save the contents of the output buffer to the cached file
$fp = fopen($cachefile, "w");
fwrite($fp, ob_get_contents());
fclose($fp);
//ob_end_flush();
$researchsites_main_body = ob_get_clean(); // clean or empty the buffer 
echo $researchsites_main_body;
      }
   ?>

   <?php require 'footer.php'; ?>
   </body>
</html>
