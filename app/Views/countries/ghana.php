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
        Ghana
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Ghana"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Ghana Data 
function showGhanaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showGhanaData = document.getElementById("science_in_Ghana");
         if(showGhanaData)
         {
            showGhanaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getghanadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showGhanaData();
});
</script>
    </body>
</html>