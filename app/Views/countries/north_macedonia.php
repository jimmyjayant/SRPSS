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
        North Macedonia
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_North_Macedonia"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // North_Macedonia Data 
function showNorth_MacedoniaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showNorth_MacedoniaData = document.getElementById("science_in_North_Macedonia");
         if(showNorth_MacedoniaData)
         {
            showNorth_MacedoniaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getnorthmacedoniadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showNorth_MacedoniaData();
});
</script>
    </body>
</html>