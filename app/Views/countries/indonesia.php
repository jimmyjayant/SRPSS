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
        Indonesia
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Indonesia"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Indonesia Data 
function showIndonesiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showIndonesiaData = document.getElementById("science_in_Indonesia");
         if(showIndonesiaData)
         {
            showIndonesiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getindonesiadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showIndonesiaData();
});
</script>
    </body>
</html>