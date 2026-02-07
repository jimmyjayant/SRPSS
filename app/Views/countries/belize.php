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
        Belize
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Belize"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Belize Data 
function showBelizeData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBelizeData = document.getElementById("science_in_Belize");
         if(showBelizeData)
         {
            showBelizeData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getbelizedata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showBelizeData();
});
</script>
    </body>
</html>