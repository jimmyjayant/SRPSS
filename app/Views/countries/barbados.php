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
        Barbados
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Barbados"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Barbados Data 
function showBarbadosData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBarbadosData = document.getElementById("science_in_Barbados");
         if(showBarbadosData)
         {
            showBarbadosData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getbarbadosdata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showBarbadosData();
});
</script>
    </body>
</html>