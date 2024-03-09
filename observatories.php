<?php
require 'sessionstart.php';
?>

<?php
require 'sessiontimeout.php';
?>

<?php 
require 'headerandnavbar.php';
?>

<div class="main">
    <h2>
    List of Scientific Observatory in India  
    </h2>

    <p>
    Here is the list of Indian Scientific Observatories:- 
    </p>

    <br>
    <br>

    <!-- Data from Database will be listed here -->
    <div id="observatory">
    </div>
</div>

<?php require 'footer.php'; ?>
    </body>
</html>