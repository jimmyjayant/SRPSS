<?php
// Start the session
session_start();
?>

<?php
// Remove all the session variables
session_unset();

// Destroy the session
session_destroy();

header('location: index.php');
?>