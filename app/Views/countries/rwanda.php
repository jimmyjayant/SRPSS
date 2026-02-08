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
        Rwanda
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Rwanda"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Rwanda Data 
function showRwandaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showRwandaData = document.getElementById("science_in_Rwanda");
         if(showRwandaData)
         {
            showRwandaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getrwandadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showRwandaData();
});
</script>
    </body>
</html>