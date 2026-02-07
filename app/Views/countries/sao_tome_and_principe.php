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
        Sao Tome and Principe
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Sao_Tome_and_Principe"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Sao_Tome_and_Principe Data 
function showSao_Tome_and_PrincipeData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSao_Tome_and_PrincipeData = document.getElementById("science_in_Sao_Tome_and_Principe");
         if(showSao_Tome_and_PrincipeData)
         {
            showSao_Tome_and_PrincipeData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsaotomeandprincipedata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showSao_Tome_and_PrincipeData();
});
</script>
    </body>
</html>