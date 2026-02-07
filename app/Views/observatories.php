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
    List of Scientific Observatory in India  
    </h2>

    <p>
    Here is the list of Indian Scientific Observatories:- 
    </p>

    <br>
    <br>

    <!-- Data from Database will be listed here -->
    <div id="observatory"></div>
</div>

<?php require 'footer.php'; ?>
<script>
// observatories.php
function showObservatoryData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showObservatoryData = document.getElementById("observatory");
         if(showObservatoryData)
         {
            showObservatoryData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getobservatories", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showObservatoryData();
});
</script>
    </body>
</html>
