<?php
    require '../app/Views/sessionstart.php';
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

<?php require '../app/Views/headerandnavbar.php'; ?>

<div class="main">
    <h3>
        Congo (Congo-Brazzaville)
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Congo_Congo-Brazzaville"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
    </body>
</html>