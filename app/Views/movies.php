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
                    List of Scientific Movies in India  
                </h2>

                <p>
                    Here is the list of Indian Scientific Movies:- 
                </p>

                <br>
                <br>

                <!-- Data from Database will be listed here -->
                <div id="movies"></div>         
            </div>

            <br>
            <br>
            <hr>
            <br>
            <br>

            <div class="part2">
                <h2>
                    List of Scientific Web Series in India  
                 </h2>
        
                 <p>
                    Here is the list of Indian Scientific Web Series:- 
                 </p>
        
                 <br>
                 <br>

                 <!-- Data from Database will be listed here -->
                 <div id="webseries">
                 </div>
            </div>
        </div>

        <?php require 'footer.php'; ?>
        <script>
            // movies.php javascript
            function showMoviesData() {
                var xmlhttp1 = new XMLHttpRequest();
                xmlhttp1.onload = function() {
                if(this.readyState == 4 && this.status == 200) {
                    var showMoviesData = document.getElementById("movies");
                    if(showMoviesData) 
                    {
                        showMoviesData.innerHTML = this.responseText;
                    }
                }
                };
                xmlhttp1.open("GET", "getmoviedata", true);
                xmlhttp1.send();
            }

            document.addEventListener("DOMContentLoaded", function() {
            showMoviesData();
            });

            function showWebSeriesData() {
            var xmlhttp2 = new XMLHttpRequest();
            xmlhttp2.onload = function() {
            if(this.readyState == 4 && this.status == 200) {
                var showWebSeriesData = document.getElementById("webseries");
                if(showWebSeriesData)
                {
                    showWebSeriesData.innerHTML = this.responseText;
                }
            }
            };
            xmlhttp2.open("GET", "getwebseriesdata", true);
            xmlhttp2.send();
            }

            document.addEventListener("DOMContentLoaded", function() {
            showWebSeriesData();
            });
        </script>
    </body>
</html>
