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

    $css = ["css/index.css", "css/headerandnavbar.css", "css/footer.css"];

    require 'headerandnavbar.php'; 
?>

<div class="main"></div>

<?php require 'footer.php'; ?>
    </body>
</html>
