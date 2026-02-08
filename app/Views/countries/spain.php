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
        Spain
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Spain"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Spain Data 
function showSpainData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showSpainData = document.getElementById("science_in_Spain");
         if(showSpainData)
         {
            showSpainData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getspaindata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showSpainData();
});
</script>
    </body>
</html>