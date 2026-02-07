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
        Tunisia
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Tunisia"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Tunisia Data 
function showTunisiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showTunisiaData = document.getElementById("science_in_Tunisia");
         if(showTunisiaData)
         {
            showTunisiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "gettunisiadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showTunisiaData();
});
</script>
    </body>
</html>