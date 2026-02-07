<?php
    require 'sessionstart.php';
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

<?php require 'headerandnavbar.php'; ?>

        <div class="main">
            <h2>
                List of Scientific Conferences in India 
            </h2>

            <p>
                Here is the list of Indian Scientific Conferences:- 
            </p>

            <br>
            <br>

            <!-- Data from Database will be listed here -->
            <div id="conferences"></div>
        </div>

        <?php require 'footer.php'; ?>
        <script>
            // conferences.php javascript
            function showConferencesData() {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onload = function() {
                if(this.readyState == 4 && this.status == 200) {
                    var showConferencesData = document.getElementById("conferences");
                    if(showConferencesData)
                    {
                        showConferencesData.innerHTML = this.responseText;
                    }
                }
                };
                xmlhttp.open("GET", "getconferencedata", true);
                xmlhttp.send();
            }

            document.addEventListener("DOMContentLoaded", function() {
            showConferencesData();
            });
        </script>
    </body>
</html>
