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
        Switzerland
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Switzerland"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Switzerland Data 
function showSwitzerlandData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSwitzerlandData = document.getElementById("science_in_Switzerland");
         if(showSwitzerlandData)
         {
            showSwitzerlandData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getswitzerlanddata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showSwitzerlandData();
});
</script>
    </body>
</html>