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
        Gambia
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Gambia"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Gambia Data 
function showGambiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showGambiaData = document.getElementById("science_in_Gambia");
         if(showGambiaData)
         {
            showGambiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getgambiadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showGambiaData();
});
</script>
    </body>
</html>