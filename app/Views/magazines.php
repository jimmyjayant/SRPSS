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

require '../app/Models/getmagazinedata.php';

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

require '../app/Models/getjournaldata.php';

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
