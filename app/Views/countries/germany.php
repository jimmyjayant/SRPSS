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
        Germany
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Germany"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Germany Data 
function showGermanyData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showGermanyData = document.getElementById("science_in_Germany");
         if(showGermanyData)
         {
            showGermanyData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getgermanydata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showGermanyData();
});
</script>
    </body>
</html>