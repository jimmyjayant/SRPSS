<?php
  ini_set('session.use_only_cookies', '1');
  ini_set('session.use_strict_mode', '1');
  ini_set('session.cookie_httponly', '1');
  
  // Start the session
  session_start();

  // Update the current session id with a new one and makes the session even more stronger 
  session_regenerate_id(true);
?>