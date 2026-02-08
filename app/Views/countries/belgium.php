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
        Belgium
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Belgium"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Belgium Data 
function showBelgiumData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBelgiumData = document.getElementById("science_in_Belgium");
         if(showBelgiumData)
         {
            showBelgiumData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getbelgiumdata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showBelgiumData();
});
</script>
    </body>
</html>