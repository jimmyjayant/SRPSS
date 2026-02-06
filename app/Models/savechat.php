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

    try
    {
      if(!file_exists('../app/Config/srpss_database_connection.php'))
      {
          throw new Exception("srpss_database_connection.php is missing.");
      }
      else
      {
          require '../app/Config/srpss_database_connection.php';
      }
    }
    catch(Exception $e)
    {
      echo "<script>alert('{$e->getMessage()}');</script>";
    }

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
