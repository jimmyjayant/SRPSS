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
   <?php
      $cachefile = "../writable/cache/" . "researchsites_main_body.php" . ".cache";
      $cachetime = 3600; // 1 hour (cache time in seconds)
      // If the cache file exists and is younger than the cache time, then include it
      if(file_exists($cachefile) && (filemtime($cachefile) + $cachetime > time()))
      {
         require($cachefile);
         //exit();
      }
      else
      {
         ob_start(); // Start the output buffer
         $html = <<<HEREDOC
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
HEREDOC;
         echo $html;

require '../app/Models/getresearchsitedata.php';

         $html1 = <<<HEREDOC
         </div>
               </div>
HEREDOC;

echo $html1;

// Save the contents of the output buffer to the cached file
$fp = fopen($cachefile, "w");
fwrite($fp, ob_get_contents());
fclose($fp);
//ob_end_flush();
$researchsites_main_body = ob_get_clean(); // clean or empty the buffer 
echo $researchsites_main_body;
   }
?>

   <?php require 'footer.php'; ?>
   </body>
</html>
