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
        Solomon Islands
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Solomon_Islands"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Solomon_Islands Data 
function showSolomon_IslandsData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSolomon_IslandsData = document.getElementById("science_in_Solomon_Islands");
         if(showSolomon_IslandsData)
         {
            showSolomon_IslandsData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsolomonislandsdata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showSolomon_IslandsData();
});
</script>
    </body>
</html>