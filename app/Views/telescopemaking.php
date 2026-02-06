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

<div class="main">
    <h2>Telescope Making Workshop</h2>

    <p>Register yourself for the Telescope Making Workshop around the Country:-</p>

    <br>
    <br>

    <!-- Data from Database will be listed here -->
    <div id="telescopeworkshop"></div>
</div>


<?php require 'footer.php'; ?>
    </body>
</html>
