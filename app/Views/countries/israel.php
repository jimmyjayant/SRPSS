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
        Israel
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Israel"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Israel Data 
function showIsraelData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showIsraelData = document.getElementById("science_in_Israel");
         if(showIsraelData)
         {
            showIsraelData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getisraeldata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showIsraelData();
});
</script>
    </body>
</html>