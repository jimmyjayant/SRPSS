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
        South Korea
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_South_Korea"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // South_Korea Data 
function showSouth_KoreaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSouth_KoreaData = document.getElementById("science_in_South_Korea");
         if(showSouth_KoreaData)
         {
            showSouth_KoreaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getsouthkoreadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showSouth_KoreaData();
});
</script>
    </body>
</html>