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
        Equatorial Guinea
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Equatorial_Guinea"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Equatorial_Guinea Data 
function showEquatorial_GuineaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showEquatorial_GuineaData = document.getElementById("science_in_Equatorial_Guinea");
         if(showEquatorial_GuineaData)
         {
            showEquatorial_GuineaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getequatorialguineadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showEquatorial_GuineaData();
});
</script>
    </body>
</html>