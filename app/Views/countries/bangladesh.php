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
        Bangladesh
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Bangladesh"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Bangladesh Data 
function showBangladeshData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBangladeshData = document.getElementById("science_in_Bangladesh");
         if(showBangladeshData)
         {
            showBangladeshData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getbangladeshdata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showBangladeshData();
});
</script>
    </body>
</html>