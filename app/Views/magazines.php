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
$cachefile = "../writable/cache/" . "magazines_main_body.php" . ".cache";
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
    <div class="part1">
        <h2>
            List of Scientific Magazines in India 
        </h2>

        <p>
            Here is the list of Indian Science Magazines:- 
        </p>

        <br>
        <br>

        <!-- Data from Database will be listed here -->
        <div id="magazines">
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

    <br>
    <br>
    <hr>
    <br>
    <br>

    <div class="part2">
        <h2>
            List of Scientific Journals in India 
        </h2>
        
        <p>
            Here is the list of Indian Science Journals:- 
        </p>

        <br>
        <br>

        <!-- Data from Database will be listed here -->
        <div id="journals">
HEREDOC;
echo $html1;

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
    $sql = "SELECT * FROM journals";

    // perform query and store result in a variable
    $result = $conn->query($sql);

    echo "<table>
    <tr>
    <th>S.N.</th>
    <th>Journal Name</th>
    </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['journalname'] . "</td>";
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

$html2 = <<<HEREDOC
</div>
    </div>
</div>
HEREDOC;

echo $html2;

// Save the contents of the output buffer to the cached file
$fp = fopen($cachefile, "w");
fwrite($fp, ob_get_contents());
fclose($fp);
//ob_end_flush();
$magazines_main_body = ob_get_clean(); // clean or empty the buffer 
echo $magazines_main_body;
}
?>
        <?php require 'footer.php'; ?>
        
    </body>
</html>
