<?php
require 'sessionstart.php';
require 'checkcookie.php';
?>

<?php 
require 'headerandnavbar.php';
?>

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
          
            </div>
        </div>

        <?php require 'footer.php'; ?>
    </body>
</html>