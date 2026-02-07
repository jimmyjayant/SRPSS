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
        Uzbekistan
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Uzbekistan"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Uzbekistan Data 
function showUzbekistanData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showUzbekistanData = document.getElementById("science_in_Uzbekistan");
         if(showUzbekistanData)
         {
            showUzbekistanData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getuzbekistandata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showUzbekistanData();
});
</script>
    </body>
</html>