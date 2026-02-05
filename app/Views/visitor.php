<?php
// track visitors of the website
require '../app/Models/../app/Config/srpss_database_connection.php';

if(isset($_SESSION['username']))
{
    $status = "user";
    $email = "{$_SESSION['email']}";
}
else
{
    $status = "visitor";
    $email = NULL;
}

$remotehost = isset($_SERVER['REMOTE_HOST']) ? $_SERVER['REMOTE_HOST'] : gethostbyaddr($_SERVER['REMOTE_ADDR']);

// store query in a variable
$sql = "INSERT INTO visitors (device, address, port, status, email) VALUES ('$remotehost', '{$_SERVER['REMOTE_ADDR']}', '{$_SERVER['REMOTE_PORT']}', '$status', '$email')";

$result = $conn->query($sql);

if($result === FALSE)
{
  echo "Error:- " . $sql . "<br>" . $conn->error;
}

// close the connection 
$conn->close();
?>
