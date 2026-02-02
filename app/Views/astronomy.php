<?php
require 'sessionstart.php';
require '../app/Models/checkcookie.php';
?>

<?php 
require 'headerandnavbar.php';
?>

<div class="main">
    <div class="part11">
        <div class="part111">
            <h2>
                Astronomy   
            </h2>

            <p>
                Check out the Astronomy Section 

                <br>
                <br>

                <img src="images/astronomy.webp" alt="Astronomy" style="aspect-ratio:16/9;">
            </p>
        </div>

        <div class="part112">
            <div class="part1121">
                <h2>
                    Telescope Making  
                </h2>

                <p>
                    Check out the Telescope Making Course  

                    <br>
                    <br>

                    <a href="<?= BASE_URL . 'telescopemaking' ?>">Telescope Course</a>

                    <br>
                    <br>

                    <img src="images/telescopemaking.jpg" width="300px" alt="Telescope Making" style="aspect-ratio:1/1;">
                </p>
            </div>

            <div class="part1122">
                <h2>
                    Star Party  
                </h2>

                <p>
                    Join the Star Party  

                    <br>
                    <br>
                    <a href="<?= BASE_URL . 'starparty' ?>">Star Party</a>

                    <br>
                    <br>
                    
                    <img src="images/starparty.jpg" width="300px" alt="Star Party" style="aspect-ratio:1/1;">
                </p>
            </div>

            <div class="part1123">
                <h2>
                    Astrophotography   
                </h2>

                <p>
                    Checkout the Astrophotography Section  

                    <br>
                    <br>
                    <a href="<?= BASE_URL . 'astrophotography' ?>">Astrophotography</a>

                    <br>
                    <br>
                    
                    <img src="images/astrophotography.jpg" width="300px" alt="Astrophotography" style="aspect-ratio:1/1;">
                </p>
            </div>
        </div>    
    </div>
</div>

<?php require 'footer.php'; ?>
    </body>
</html>
