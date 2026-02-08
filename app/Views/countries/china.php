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
        China
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_China"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // China Data 
function showChinaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showChinaData = document.getElementById("science_in_China");
         if(showChinaData)
         {
            showChinaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getchinadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showChinaData();
});
</script>
    </body>
</html>