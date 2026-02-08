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
        South Sudan
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_South_Sudan"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // South_Sudan Data 
function showSouth_SudanData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSouth_SudanData = document.getElementById("science_in_South_Sudan");
         if(showSouth_SudanData)
         {
            showSouth_SudanData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsouthsudandata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showSouth_SudanData();
});
</script>
    </body>
</html>