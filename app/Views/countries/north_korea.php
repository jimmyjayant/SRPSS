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
        North Korea
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_North_Korea"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // North_Korea Data 
function showNorth_KoreaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showNorth_KoreaData = document.getElementById("science_in_North_Korea");
         if(showNorth_KoreaData)
         {
            showNorth_KoreaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getnorthkoreadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showNorth_KoreaData();
});
</script>
    </body>
</html>