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
        United Arab Emirates
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_United_Arab_Emirates"><div class="world_preloader"></div></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // United_Arab_Emirates Data 
function showUnited_Arab_EmiratesData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showUnited_Arab_EmiratesData = document.getElementById("science_in_United_Arab_Emirates");
         if(showUnited_Arab_EmiratesData)
         {
            showUnited_Arab_EmiratesData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getunitedarabemiratesdata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showUnited_Arab_EmiratesData();
});
</script>
    </body>
</html>