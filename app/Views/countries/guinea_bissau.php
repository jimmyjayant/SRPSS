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
        Guinea-Bissau
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Guinea-Bissau"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Guinea-Bissau Data 
function showGuinea_BissauData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showGuinea_BissauData = document.getElementById("science_in_Guinea-Bissau");
         if(showGuinea_BissauData)
         {
            showGuinea_BissauData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getguinea-bissaudata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showGuinea_BissauData();
});
</script>
    </body>
</html>