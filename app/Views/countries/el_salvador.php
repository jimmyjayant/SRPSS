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
        El Salvador
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_El_Salvador"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // El_Salvador Data 
function showEl_SalvadorData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showEl_SalvadorData = document.getElementById("science_in_El_Salvador");
         if(showEl_SalvadorData)
         {
            showEl_SalvadorData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getelsalvadordata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showEl_SalvadorData();
});
</script>
    </body>
</html>