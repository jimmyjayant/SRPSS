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
        Morocco
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Morocco"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Morocco Data 
function showMoroccoData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showMoroccoData = document.getElementById("science_in_Morocco");
         if(showMoroccoData)
         {
            showMoroccoData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getmoroccodata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showMoroccoData();
});
</script>
    </body>
</html>