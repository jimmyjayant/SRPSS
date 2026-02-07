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
            <div class="part1">
                <h2>
                    List of Scientific Magazines in India 
                </h2>

                <p>
                    Here is the list of Indian Science Magazines:- 
                </p>

                <br>
                <br>

                <!-- Data from Database will be listed here -->
                <div id="magazines">
                
                </div>
            </div>
        
            <br>
            <br>
            <hr>
            <br>
            <br>

            <div class="part2">
                <h2>
                    List of Scientific Journals in India 
                </h2>
                
                <p>
                    Here is the list of Indian Science Journals:- 
                </p>

                <br>
                <br>

                <!-- Data from Database will be listed here -->
                <div id="journals">
            
                </div>
            </div>
        </div>

        <?php require 'footer.php'; ?>
        <script>
            // magazines.php javascript
            function showMagazinesData() {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onload = function() {
                if(this.readyState == 4 && this.status == 200) {
                    var showMagazinesData = document.getElementById("magazines");
                    if(showMagazinesData)
                    {
                        showMagazinesData.innerHTML = this.responseText;
                    }
                }
                };
                xmlhttp.open("GET", "getmagazinedata", true);
                xmlhttp.send();
            }

            document.addEventListener("DOMContentLoaded", function() {
            showMagazinesData();
            });

            function showJournalsData() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
            if(this.readyState == 4 && this.status == 200) {
                var showJournalsData = document.getElementById("journals");
                if(showJournalsData)
                {
                    showJournalsData.innerHTML = this.responseText;
                }
            }
            };
            xmlhttp.open("GET", "getjournaldata", true);
            xmlhttp.send();
            }

            document.addEventListener("DOMContentLoaded", function() {
            showJournalsData();
            });
        </script>
    </body>
</html>
