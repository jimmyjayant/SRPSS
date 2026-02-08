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
        Angola
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Angola"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Angola Data 
function showAngolaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showAngolaData = document.getElementById("science_in_Angola");
         if(showAngolaData)
         {
            showAngolaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getangoladata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showAngolaData();
});
</script>
    </body>
</html>