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
        Bhutan
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Bhutan"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Bhutan Data 
function showBhutanData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBhutanData = document.getElementById("science_in_Bhutan");
         if(showBhutanData)
         {
            showBhutanData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getbhutandata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showBhutanData();
});
</script>
    </body>
</html>