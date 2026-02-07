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
        Serbia
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Serbia"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Serbia Data 
function showSerbiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSerbiaData = document.getElementById("science_in_Serbia");
         if(showSerbiaData)
         {
            showSerbiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getserbiadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showSerbiaData();
});
</script>
    </body>
</html>