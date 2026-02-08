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
        Hungary
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Hungary"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Hungary Data 
function showHungaryData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showHungaryData = document.getElementById("science_in_Hungary");
         if(showHungaryData)
         {
            showHungaryData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "gethungarydata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showHungaryData();
});
</script>
    </body>
</html>