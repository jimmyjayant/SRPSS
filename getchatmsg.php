<?php
require 'sessionstart.php';
?>

<?php
include('databaseconnection.php');

// store query in a variable
$sql = "SELECT * FROM chat";

// perform query and store result in a variable
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
   echo "<div class='chat'>";
   if($row['username'] == $_SESSION['username'])
   {
      echo "<div class='chatmsg' style='float:left;text-align:left;'>";
   }
   else 
   {
      echo "<div class='chatmsg' style='float:right;text-align:right;'>";
   }
   echo $row['chatmsg'];
   echo "<br>";
   echo "<span style='color:white;font-size:1.5rem;'>" . $row['username']. ", " . $row['dt'] . "</span>";
   echo "</div>";
   echo "</div>";   
}

// close the connection
$conn->close();
?>