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
        Ireland
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Ireland"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Ireland Data 
function showIrelandData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showIrelandData = document.getElementById("science_in_Ireland");
         if(showIrelandData)
         {
            showIrelandData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getirelanddata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showIrelandData();
});
</script>
    </body>
</html>