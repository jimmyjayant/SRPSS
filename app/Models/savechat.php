<?php
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $chatmsg = test_input($_POST['chatmsg']);
    $currentuser = $_SESSION['username'];
    
    // Create connection using MySQLi Object-Oriented

    require '../app/Config/srpss_database_connection.php';

    $sql = "INSERT INTO chat (username, chatmsg) 
    VALUES ('$currentuser','$chatmsg')";

    // Perform query
    $result = $conn->query($sql);

    if($result === FALSE) 
    {
        echo "Message Storage Failed!";
    }
    else
    {
        echo "Message Stored Successfully.";
    }

    // Close the connection
    $conn->close();
  }
?>
