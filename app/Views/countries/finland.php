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
        Finland
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Finland"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Finland Data 
function showFinlandData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showFinlandData = document.getElementById("science_in_Finland");
         if(showFinlandData)
         {
            showFinlandData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getfinlanddata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showFinlandData();
});
</script>
    </body>
</html>