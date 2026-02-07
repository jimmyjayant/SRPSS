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
        Antigua and Barbuda
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Antigua_and_Barbuda"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Antigua_and_Barbuda Data 
function showAntigua_and_BarbudaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showAntigua_and_BarbudaData = document.getElementById("science_in_Antigua_and_Barbuda");
         if(showAntigua_and_BarbudaData)
         {
            showAntigua_and_BarbudaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getantiguaandbarbudadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showAntigua_and_BarbudaData();
});

</script>
    </body>
</html>