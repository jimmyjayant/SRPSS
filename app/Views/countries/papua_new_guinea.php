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
        Papua New Guinea
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Papua_New_Guinea"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Papua_New_Guinea Data 
function showPapua_New_GuineaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showPapua_New_GuineaData = document.getElementById("science_in_Papua_New_Guinea");
         if(showPapua_New_GuineaData)
         {
            showPapua_New_GuineaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getpapuanewguineadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showPapua_New_GuineaData();
});
</script>
    </body>
</html>