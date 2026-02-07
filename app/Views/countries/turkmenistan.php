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
        Turkmenistan
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Turkmenistan"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Turkmenistan Data 
function showTurkmenistanData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showTurkmenistanData = document.getElementById("science_in_Turkmenistan");
         if(showTurkmenistanData)
         {
            showTurkmenistanData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getturkmenistandata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showTurkmenistanData();
});
</script>
    </body>
</html>