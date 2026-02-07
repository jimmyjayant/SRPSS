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
         <h2>View the Research Papers</h2>
         <p>Here is the list of Indian Scientific Research Papers:-</p>

         <br>
         <br>

         <!-- Data from Database will be listed here -->
         <div id="viewpapers"></div>
        </div>
        <?php require 'footer.php'; ?>
        <script>
         // view.php javascript
         function viewPapers() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
               if(this.readyState == 4 && this.status == 200) {
                  var viewPapers = document.getElementById("viewpapers");
                  if(viewPapers)
                  {
                     viewPapers.innerHTML = this.responseText;
                  }
               }
            };
            xmlhttp.open("GET", "getpapersdata", true);
            xmlhttp.send();
         }

            document.addEventListener("DOMContentLoaded", function() {
            viewPapers();
         });
        </script>
    </body>
</html>
