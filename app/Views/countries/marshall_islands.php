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
        Marshall Islands
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Marshall_Islands"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Marshall_Islands Data 
function showMarshall_IslandsData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showMarshall_IslandsData = document.getElementById("science_in_Marshall_Islands");
         if(showMarshall_IslandsData)
         {
            showMarshall_IslandsData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getmarshallislandsdata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showMarshall_IslandsData();
});
</script>
    </body>
</html>