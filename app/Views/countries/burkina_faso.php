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
        Burkina Faso
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Burkina_Faso"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Burkina_Faso Data 
function showBurkina_FasoData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBurkina_FasoData = document.getElementById("science_in_Burkina_Faso");
         if(showBurkina_FasoData)
         {
            showBurkina_FasoData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getburkinafasodata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showBurkina_FasoData();
});
</script>
    </body>
</html>