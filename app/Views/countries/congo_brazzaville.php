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
        Congo (Congo-Brazzaville)
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Congo_Congo-Brazzaville"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Congo_Congo-Brazzaville Data 
function showCongo_Congo_BrazzavilleData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showCongo_Congo_BrazzavilleData = document.getElementById("science_in_Congo_Congo-Brazzaville");
         if(showCongo_Congo_BrazzavilleData)
         {
            showCongo_Congo_BrazzavilleData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getcongo(congo-brazzaville)data", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showCongo_Congo_BrazzavilleData();
});
</script>
    </body>
</html>