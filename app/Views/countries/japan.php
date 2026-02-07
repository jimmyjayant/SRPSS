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
        Japan
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Japan"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Japan Data 
function showJapanData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showJapanData = document.getElementById("science_in_Japan");
         if(showJapanData)
         {
            showJapanData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getjapandata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showJapanData();
});
</script>
    </body>
</html>