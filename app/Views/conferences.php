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

require '../app/Models/getconferencedata.php';

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
