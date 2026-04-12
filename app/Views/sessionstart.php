<?php
  ini_set('session.use_only_cookies', '1');
  ini_set('session.use_strict_mode', '1');
  ini_set('session.cookie_httponly', '1');
  ini_set('session.cookie_samesite', 'Strict');
  // start new session or resume existing one
  if(session_status() !== PHP_SESSION_ACTIVE)
  {
    session_start();
  }

  // Update the current session id with a new one and makes the session even more stronger 
  session_regenerate_id(true);

  // If session array key 'csrf_token' does not exist, then
  if(empty($_SESSION['csrf_token']))
  {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
  }
?>
