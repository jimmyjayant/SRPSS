<?php
// Start the session
session_start();
?>

<?php 
require 'headerandnavbar.php';
?>

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
            
                </div>
            </div>
        </div>

        <?php require 'footer.php'; ?>
    </body>
</html>