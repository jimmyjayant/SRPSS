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
        United States
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_United_States"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // United_States Data 
function showUnited_StatesData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showUnited_StatesData = document.getElementById("science_in_United_States");
         if(showUnited_StatesData)
         {
            showUnited_StatesData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getunitedstatesdata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showUnited_StatesData();
});
</script>
    </body>
</html>