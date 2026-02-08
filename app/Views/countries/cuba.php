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
        Cuba
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Cuba"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Cuba Data 
function showCubaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showCubaData = document.getElementById("science_in_Cuba");
         if(showCubaData)
         {
            showCubaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getcubadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showCubaData();
});
</script>
    </body>
</html>