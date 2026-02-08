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
        New Zealand
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_New_Zealand"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // New_Zealand Data 
function showNew_ZealandData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showNew_ZealandData = document.getElementById("science_in_New_Zealand");
         if(showNew_ZealandData)
         {
            showNew_ZealandData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getnewzealanddata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showNew_ZealandData();
});
</script>
    </body>
</html>