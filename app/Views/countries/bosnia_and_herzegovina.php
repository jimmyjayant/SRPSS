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
        Bosnia and Herzegovina
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Bosnia_and_Herzegovina"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Bosnia_and_Herzegovina Data 
function showBosnia_and_HerzegovinaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showBosnia_and_HerzegovinaData = document.getElementById("science_in_Bosnia_and_Herzegovina");
         if(showBosnia_and_HerzegovinaData)
         {
            showBosnia_and_HerzegovinaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getbosniaandherzegovinadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showBosnia_and_HerzegovinaData();
});
</script>
    </body>
</html>