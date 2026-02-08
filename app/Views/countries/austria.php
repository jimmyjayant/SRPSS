<?php
    require '../app/Views/sessionstart.php';
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

<?php require '../app/Views/headerandnavbar.php'; ?>

<div class="main">
    <h3>
        Austria
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Austria"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Austria Data 
function showAustriaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showAustriaData = document.getElementById("science_in_Austria");
         if(showAustriaData)
         {
            showAustriaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getaustriadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showAustriaData();
});
</script>
    </body>
</html>