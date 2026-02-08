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
        Nepal
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Nepal"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Nepal Data 
function showNepalData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showNepalData = document.getElementById("science_in_Nepal");
         if(showNepalData)
         {
            showNepalData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getnepaldata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showNepalData();
});
</script>
    </body>
</html>