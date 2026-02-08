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
        Vatican City
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Vatican_City"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Vatican_City Data 
function showVatican_CityData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showVatican_CityData = document.getElementById("science_in_Vatican_City");
         if(showVatican_CityData)
         {
            showVatican_CityData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getvaticancitydata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showVatican_CityData();
});
</script>
    </body>
</html>