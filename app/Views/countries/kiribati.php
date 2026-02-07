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
        Kiribati
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Kiribati"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Kiribati Data 
function showKiribatiData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showKiribatiData = document.getElementById("science_in_Kiribati");
         if(showKiribatiData)
         {
            showKiribatiData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getkiribatidata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showKiribatiData();
});
</script>
    </body>
</html>