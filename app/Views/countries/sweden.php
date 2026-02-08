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
        Sweden
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Sweden"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Sweden Data 
function showSwedenData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSwedenData = document.getElementById("science_in_Sweden");
         if(showSwedenData)
         {
            showSwedenData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getswedendata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showSwedenData();
});
</script>
    </body>
</html>