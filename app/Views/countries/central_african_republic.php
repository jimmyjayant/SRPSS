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
        Central African Republic
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Central_African_Republic"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Central_African_Republic Data 
function showCentral_African_RepublicData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showCentral_African_RepublicData = document.getElementById("science_in_Central_African_Republic");
         if(showCentral_African_RepublicData)
         {
            showCentral_African_RepublicData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getcentralafricanrepublicdata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showCentral_African_RepublicData();
});
</script>
    </body>
</html>