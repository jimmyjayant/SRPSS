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
            List of Indian Scientists 
         </h2>

         <p>
            Here is the list of Indian Scientists:- 
         </p>

         <br>
         <br>

         <!-- Data from Database will be listed here -->
         <div id="scientists">
          
          </div>
        </div>

        <?php require 'footer.php'; ?>
    </body>
</html>
