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
        Nicaragua
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Nicaragua"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Nicaragua Data 
function showNicaraguaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showNicaraguaData = document.getElementById("science_in_Nicaragua");
         if(showNicaraguaData)
         {
            showNicaraguaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getnicaraguadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showNicaraguaData();
});
</script>
    </body>
</html>