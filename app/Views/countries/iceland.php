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
        Iceland
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Iceland"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Iceland Data 
function showIcelandData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showIcelandData = document.getElementById("science_in_Iceland");
         if(showIcelandData)
         {
            showIcelandData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "geticelanddata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showIcelandData();
});
</script>
    </body>
</html>