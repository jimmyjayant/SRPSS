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
   //echo "<div style='position:relative;margin:2rem 0;'>";
   if($row['username'] == $_SESSION['username'])
   {
      echo "<p style='text-align:right;background:#55efc4;margin:1rem 0.5rem;border-radius:1rem;display:inline-block;width:50%;'>";
   }
   else 
   {
      echo "<p style='text-align:left;background:#55efc4;margin:1rem 0.5rem;border-radius:1rem;display:inline-block;width:50%;'>";
   }
   echo $row['chatmsg'];
   echo "<br>";
   echo "<span style='color:white;font-size:1.5rem;'>" . $row['username']. ", " . $row['dt'] . "</span>";
   echo "</p><br>";
  // echo "</div>";
}



// close the connection
$conn->close();
?>