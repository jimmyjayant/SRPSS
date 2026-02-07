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
        Fiji
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Fiji"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Fiji Data 
function showFijiData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showFijiData = document.getElementById("science_in_Fiji");
         if(showFijiData)
         {
            showFijiData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getfijidata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showFijiData();
});
</script>
    </body>
</html>