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
        Nigeria
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Nigeria"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Nigeria Data 
function showNigeriaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showNigeriaData = document.getElementById("science_in_Nigeria");
         if(showNigeriaData)
         {
            showNigeriaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getnigeriadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showNigeriaData();
});
</script>
    </body>
</html>