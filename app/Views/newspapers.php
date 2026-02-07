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
            List of Scientific Newspapers in India 
          </h2>

          <p>
            Here is the list of Indian Scientific Newspapers:- 
          </p>

          <br>
          <br>

          <!-- Data from Database will be listed here -->
          <div id="newspapers"></div>
        </div>

        <?php require 'footer.php'; ?>
        <script>
          // newspapers.php javascript
          function showNewspapersData() {
              var xmlhttp = new XMLHttpRequest();
              xmlhttp.onload = function() {
                if(this.readyState == 4 && this.status == 200) {
                  var showNewspapersData = document.getElementById("newspapers");
                  if(showNewspapersData)
                  {
                      showNewspapersData.innerHTML = this.responseText;
                  }
                }
              };
              xmlhttp.open("GET", "getnewspaperdata", true);
              xmlhttp.send();
            }

            document.addEventListener("DOMContentLoaded", function() {
            showNewspapersData();
            });
        </script>
    </body>
</html>
