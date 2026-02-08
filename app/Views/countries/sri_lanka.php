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
        Sri Lanka
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Sri_Lanka"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Sri_Lanka Data 
function showSri_LankaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSri_LankaData = document.getElementById("science_in_Sri_Lanka");
         if(showSri_LankaData)
         {
            showSri_LankaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsrilankadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showSri_LankaData();
});
</script>
    </body>
</html>