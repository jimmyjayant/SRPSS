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
        Togo
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Togo"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Togo Data 
function showTogoData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showTogoData = document.getElementById("science_in_Togo");
         if(showTogoData)
         {
            showTogoData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "gettogodata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showTogoData();
});
</script>
    </body>
</html>