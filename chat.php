<?php
 require 'sessionstart.php';
?>

<?php
// Access Denied for Web page DIRECT ACCESS 
if(!isset($_SESSION['username']))
{
    header("location: login.php");
    die();
}
?>

<?php
require 'sessiontimeout.php';
?>


<?php
  if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['send'])))
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

    require("databaseconnection.php");

    $sql = "INSERT INTO chat (username, chatmsg) 
    VALUES ('$currentuser','$chatmsg')";

    // Perform query
    $result = $conn->query($sql);

    if($result === FALSE) {
      $chatstatus = "<p style='color:red;'>Message Sent Failed.</p>";
    }

    // Close the connection
    $conn->close();
  }
?>

<?php 
 require 'headerandnavbar.php';
?>

<div class="main" style="padding:0;">
  <div class="part9">
    <div class="part91">
      <h2>
        Group Chat 
      </h2>
    </div>

    <div class="part92">
      <!-- Group Chat messages will be displayed here -->
      <div id="groupchat">
         
      </div>
    </div>
    <div class="part93">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
        <input type="text" name="chatmsg" id="chatmsg" size="100%" placeholder="Type your message here" required>
        <input type="submit" value="Send" name="send" id="send">
      </form>

      <?php
         if(isset($chatstatus))
         {
          echo $chatstatus;
         }
      ?>
    </div>
  </div>
  
</div>

  <?php require 'footer.php'; ?>

  <script>
    
    // chat.php javascript
    function viewChat() {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onload = function() {
          if(this.readyState == 4 && this.status == 200) {
            var viewChat = document.getElementById("groupchat");
            if(viewChat)
            {
                viewChat.innerHTML = this.responseText;
            }
          }
      };
      xmlhttp.open("GET", "getchatmsg.php", true);
      xmlhttp.send();
    }

    document.addEventListener("DOMContentLoaded", function() {
      viewChat();
    });

  </script>
</body>
</html>