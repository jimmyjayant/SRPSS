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
        Lithuania
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Lithuania"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Lithuania Data 
function showLithuaniaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showLithuaniaData = document.getElementById("science_in_Lithuania");
         if(showLithuaniaData)
         {
            showLithuaniaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getlithuaniadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showLithuaniaData();
});
</script>
    </body>
</html>