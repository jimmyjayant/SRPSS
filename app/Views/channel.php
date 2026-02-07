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
          <h2>
            List of Indian Scientific YouTube Channels 
          </h2>

          <p>
            Here is the list of Indian Scientific YouTube Channels:- 
          </p>

          <br>
          <br>

          <!-- Data from Database will be listed here -->
          <div id="ytchannels"></div>
        </div>

        <?php require 'footer.php'; ?>
        <script>
            // channel.php javascript
            function showYouTubeChannelsData() {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onload = function() {
                  if(this.readyState == 4 && this.status == 200) {
                    var showYouTubeChannelsData = document.getElementById("ytchannels");
                    if(showYouTubeChannelsData)
                    {
                      showYouTubeChannelsData.innerHTML = this.responseText;
                    }
                  }
                };
                xmlhttp.open("GET", "getytchanneldata", true);
                xmlhttp.send();
              }

              document.addEventListener("DOMContentLoaded", function() {
              showYouTubeChannelsData();
              });
        </script>
    </body>
</html>
