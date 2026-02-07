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
        Niger
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Niger"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Niger Data 
function showNigerData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showNigerData = document.getElementById("science_in_Niger");
         if(showNigerData)
         {
            showNigerData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getnigerdata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showNigerData();
});
</script>
    </body>
</html>