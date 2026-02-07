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
        Congo, Democratic Republic of the (Congo-Kinshasa)
    </h3>
    <!-- Data from Database will be listed here -->
    <div id="science_in_Congo_Democratic_Republic_of_the_Congo-Kinshasa"></div>
</div>

<?php require '../app/Views/footer.php'; ?>
<script>
    // Congo_Democratic_Republic_of_the_Congo-Kinshasa Data 
function showCongo_Democratic_Republic_of_the_Congo_KinshasaData() {
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onload = function() {
      if(this.readyState == 4 && this.status == 200) {
         var showCongo_Democratic_Republic_of_the_Congo_KinshasaData = document.getElementById("science_in_Congo_Democratic_Republic_of_the_Congo-Kinshasa");
         if(showCongo_Democratic_Republic_of_the_Congo_KinshasaData)
         {
            showCongo_Democratic_Republic_of_the_Congo_KinshasaData.innerHTML = this.responseText;
         }
      }
   };
   xmlhttp.open("GET", "getcongo_democraticrepublicofthecongokinshasadata", true);
   xmlhttp.send();
}

   document.addEventListener("DOMContentLoaded", function() {
   showCongo_Democratic_Republic_of_the_Congo_KinshasaData();
});
</script>
    </body>
</html>