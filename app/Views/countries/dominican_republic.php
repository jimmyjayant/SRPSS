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
        Dominican Republic
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Dominican_Republic"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Dominican_Republic Data 
function showDominican_RepublicData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showDominican_RepublicData = document.getElementById("science_in_Dominican_Republic");
         if(showDominican_RepublicData)
         {
            showDominican_RepublicData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getdominicanrepublicdata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showDominican_RepublicData();
});
</script>
    </body>
</html>