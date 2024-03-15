<div class="footer">
            <div>
            <a href="#">Privacy</a>
            <a href="#">Terms of Use</a>
            <a href="#">Trademarks</a>
            <a href="#">&copy;SRPSS <?php echo date("Y"); ?></a>
            <a href="feedback.php">
                <?php
                if(isset($_SESSION['username']))
                {
                    echo "Feedback";
                } 
                else
                {
                    echo "Contact Us";
                }
                ?>
            </a>
            <a href="sitemap.php">Site Map</a>
            </div>
            <div>
            <a href="https://www.facebook.com" target="_blank"><img src="Images/facebook.png" width="20" height="20" alt="Facebook Logo"></a>
            <a href="https://www.twitter.com" target="_blank"><img src="Images/twitter.png" width="20" height="20" alt="Twitter Logo"></a>
            <a href="https://www.instagram.com" target="_blank"><img src="Images/instagram.png" width="20" height="20" alt="Instagram Logo"></a>
            </div>
        </div>