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
            List of Important Research Centres in India 
         </h2>

         <p>
            The development of a country depends on the availability of research centres in various fields. There are several research centers in India in many diversified fields. Every centre plays its very crucial role in its key area. 

            <br>
            <br>

            <b>Here is the list of Important Research Institute of various fields in India: </b>
         </p>

         <br>
         <br>
         <!-- Data from Database will be listed here -->
         <div id="researchsites">
          
         </div>


        </div>

        <?php require 'footer.php'; ?>
        <script>
         // researchsites.php javascript
         function showResearchSitesData() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
               if(this.readyState == 4 && this.status == 200) {
                  var showResearchSitesData = document.getElementById("researchsites");
                  if(showResearchSitesData)
                  {
                     showResearchSitesData.innerHTML = this.responseText;
                  }
               }
            };
            xmlhttp.open("GET", "getresearchsitedata", true);
            xmlhttp.send();
         }

            document.addEventListener("DOMContentLoaded", function() {
            showResearchSitesData();
         });
        </script>
    </body>
</html>
