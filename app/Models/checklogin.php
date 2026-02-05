<?php
require 'sessionstart.php';

// Access Denied for Web page DIRECT ACCESS 
if(!isset($_SESSION['username']))
{
    die();
}
else
{
    require 'srpss_database_connection.php';

    // store query in a variable
    $query = "SELECT usersessionid FROM researchers WHERE email = '{$_SESSION['email']}'";

    $result = $conn->query($query);

    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            if($_SESSION['sessionid'] != $row['usersessionid'])
            {
                echo "logout";
            }
        }
    }
}
?>
