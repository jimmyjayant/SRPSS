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
        Kenya
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Kenya"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Kenya Data 
function showKenyaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showKenyaData = document.getElementById("science_in_Kenya");
         if(showKenyaData)
         {
            showKenyaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getkenyadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showKenyaData();
});
</script>
    </body>
</html>