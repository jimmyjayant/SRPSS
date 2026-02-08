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
        Costa Rica
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Costa_Rica"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Costa_Rica Data 
function showCosta_RicaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showCosta_RicaData = document.getElementById("science_in_Costa_Rica");
         if(showCosta_RicaData)
         {
            showCosta_RicaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getcostaricadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showCosta_RicaData();
});
</script>
    </body>
</html>