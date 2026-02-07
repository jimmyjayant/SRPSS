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
        Colombia
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Colombia"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Colombia Data 
function showColombiaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showColombiaData = document.getElementById("science_in_Colombia");
         if(showColombiaData)
         {
            showColombiaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getcolombiadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showColombiaData();
});
</script>
    </body>
</html>