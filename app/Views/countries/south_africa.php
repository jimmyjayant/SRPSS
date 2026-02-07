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
        South Africa
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_South_Africa"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // South_Africa Data 
function showSouth_AfricaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSouth_AfricaData = document.getElementById("science_in_South_Africa");
         if(showSouth_AfricaData)
         {
            showSouth_AfricaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsouthafricadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showSouth_AfricaData();
});
</script>
    </body>
</html>