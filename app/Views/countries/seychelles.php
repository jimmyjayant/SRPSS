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
        Seychelles
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Seychelles"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Seychelles Data 
function showSeychellesData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSeychellesData = document.getElementById("science_in_Seychelles");
         if(showSeychellesData)
         {
            showSeychellesData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getseychellesdata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showSeychellesData();
});
</script>
    </body>
</html>