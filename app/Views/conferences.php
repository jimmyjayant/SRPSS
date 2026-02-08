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
$cachefile = "../writable/cache/" . "conferences_main_body.php" . ".cache";
$cachetime = 3600; // 1 hour (cache time in seconds)
// If the cache file exists and is younger than the cache time, then include it
if(file_exists($cachefile) && (filemtime($cachefile) + $cachetime > time()))
{
    require($cachefile);
    //exit();
}
else
{
    ob_start(); 
    $html = <<<HEREDOC
        <div class="main">
            <h2>
                List of Scientific Conferences in India 
            </h2>

            <p>
                Here is the list of Indian Scientific Conferences:- 
            </p>

            <br>
            <br>

            <!-- Data from Database will be listed here -->
            <div id="conferences">
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
            $sql = "SELECT * FROM conferences";

            // perform query and store result in a variable
            $result = $conn->query($sql);

            echo "<table>
            <tr>
            <th>S.N.</th>
            <th>Name</th>
            </tr>";

            while($row = $result->fetch_assoc()) {
               echo "<tr>";
               echo "<td>" . $row['id'] . "</td>";
               echo "<td>" . $row['conferencename'] . "</td>";
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
$conferences_main_body = ob_get_clean(); // clean or empty the buffer 
echo $conferences_main_body;
}
?>

        <?php require 'footer.php'; ?>
    </body>
</html>
