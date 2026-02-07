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
       Cabo Verde
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Cabo_Verde"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Cabo_Verde Data 
function showCabo_VerdeData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showCabo_VerdeData = document.getElementById("science_in_Cabo_Verde");
         if(showCabo_VerdeData)
         {
            showCabo_VerdeData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getcaboverdedata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showCabo_VerdeData();
});
</script>
    </body>
</html>