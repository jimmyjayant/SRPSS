<?php
// Start the session
session_start();
?>


<?php 
require 'headerandnavbar.php';
?>

        <div class="main">
          <h2>
            List of Indian Scientific YouTube Channels 
          </h2>

          <p>
            Here is the list of Indian Scientific YouTube Channels:- 
          </p>

          <br>
          <br>

          <!-- Data from Database will be listed here -->
          <div id="ytchannels">
          
          </div>

          
        </div>

        <?php require 'footer.php'; ?>
    </body>
</html>