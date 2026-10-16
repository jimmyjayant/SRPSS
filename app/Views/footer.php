<?php
    // Page caching code
   $cachefile = "../writable/cache/" . "footer.php" . ".cache";
   $cachetime = 3600; // 1 hour (cache time in seconds)
   // If the cache file exists and is younger than the cache time, then include it
   if(file_exists($cachefile) && (filemtime($cachefile) + $cachetime > time()))
   {
      require($cachefile);
      exit();
   }
   else
   {
      ob_start(); // Start the output buffer
   }
?>

<div class="footer">
    <div>
        <a href="#">Privacy</a>
        <a href="#">Terms of Use</a>
        <a href="#">Trademarks</a>
        <a href="#">&copy;SRPSS <?= date("Y"); ?></a>
        <a href="feedback">Contact Us</a>
        <a href="sitemap">Site Map</a>
    </div>
    <div>
        <a href="https://www.facebook.com" target="_blank"><img src="images/facebook.png" width="20" height="20" alt="Facebook Logo"></a>
        <a href="https://www.x.com" target="_blank"><img src="images/x.png" width="20" height="20" alt="X Logo"></a>
        <a href="https://www.instagram.com" target="_blank"><img src="images/instagram.png" width="20" height="20" alt="Instagram Logo"></a>
    </div>
    <div>
        Copyright &copy; 2026 Jimmy Jayant
    </div>
    <div>
        <p><img src='images/india_img.png' alt="India">भारत में निर्मित</p>
    </div>
</div>

<?php
    // Save the contents of the output buffer to the cached file
    $fp = fopen($cachefile, "w");
    fwrite($fp, ob_get_contents());
    fclose($fp);
    ob_end_flush();
?>
