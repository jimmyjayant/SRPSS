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
        Maldives
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Maldives"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Maldives Data 
function showMaldivesData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showMaldivesData = document.getElementById("science_in_Maldives");
         if(showMaldivesData)
         {
            showMaldivesData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getmaldivesdata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showMaldivesData();
});
</script>
    </body>
</html>