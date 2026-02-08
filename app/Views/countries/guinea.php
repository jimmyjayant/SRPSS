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
        Guinea
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Guinea"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Guinea Data 
function showGuineaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showGuineaData = document.getElementById("science_in_Guinea");
         if(showGuineaData)
         {
            showGuineaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getguineadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showGuineaData();
});
</script>
    </body>
</html>