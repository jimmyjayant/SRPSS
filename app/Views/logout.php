<?php
require 'sessionstart.php';
?>

<?php
// Remove all the session variables
session_unset();

// Destroy the session
session_destroy();

// Delete the cookie
setcookie("currentuser", "", time() - 3600, "/");

// Redirect the user to Main webpage
header('location: index');
?>
