<?php
 require 'sessionstart.php';
 require '../app/Models/checkcookie.php';
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

      <div id="form">
          <legend>Please enter your message:-</legend>
          <input type="text" id="msg">
          <br>
          <br>
          <input type="button" id="btn" value="Send">
          <input type="button" value="Reset" onclick="reset()">
      </div>

      <?php /*
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
        <input type="text" name="chatmsg" id="chatmsg" size="100%" placeholder="Type your message here" required>
        <br>
        <br>
        <input type="submit" value="Send" name="send" id="send">
      </form>*/
      ?>
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

    var conn = new WebSocket('ws://localhost:8080');
    conn.onopen = function(e) {
      console.log("Connection established!");
    };

    var message = document.getElementById("msg");
    var submit_message = document.getElementById("btn");

    submit_message.addEventListener("click", submitmsg);

    function saveChat() {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onload = function() {
        if(this.readyState == 4 && this.status == 200) {
          console.log(this.responseText);            
        }
      };
      xmlhttp.open("POST", "savechat.php", true);
      xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xmlhttp.setRequestHeader("X-Requested-With", "XMLHttpRequest");
      xmlhttp.send("chatmsg=" + message.value);
    }

    function submitmsg()
    {
      if(message.value > 1000)
      {
        alert("Message Cannot be more than 1000 characters!");
      }
      else
      {
        conn.send(message.value);
        var newChatmsg = document.createElement("div");
        var Chat = document.createElement("div");
        newChatmsg.appendChild(Chat);
        Chat.innerHTML = message.value;
        Chat.classList.add("chatmsg");/*
        Chat.style.backgroundColor = "aqua";*/
        newChatmsg.style.textAlign = "left";
        var chatmessage = document.getElementById("groupchat");
        chatmessage.appendChild(newChatmsg);
        saveChat();
      }
    }

    conn.onmessage = function(e) {
      console.log(e.data);
      var newChatmsg = document.createElement("div");
      var Chat = document.createElement("div");
      newChatmsg.appendChild(Chat);
      Chat.innerHTML = e.data;
      Chat.classList.add("chatmsg");/*
      Chat.style.backgroundColor = "skyblue";*/
      newChatmsg.style.textAlign = "right";
      var chatmessage = document.getElementById("groupchat");
      chatmessage.appendChild(newChatmsg);
    };

    function reset()
    {
      var message_to_be_sent = document.getElementById("msg");
      message_to_be_sent.value = "";
    }

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