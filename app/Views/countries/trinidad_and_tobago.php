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
        Trinidad and Tobago
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Trinidad_and_Tobago"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Trinidad_and_Tobago Data 
function showTrinidad_and_TobagoData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showTrinidad_and_TobagoData = document.getElementById("science_in_Trinidad_and_Tobago");
         if(showTrinidad_and_TobagoData)
         {
            showTrinidad_and_TobagoData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "gettrinidadandtobagodata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showTrinidad_and_TobagoData();
});
</script>
    </body>
</html>