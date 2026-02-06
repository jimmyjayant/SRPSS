<?php require 'sessionstart.php'; ?>

<?php
    try
    {
        if(!file_exists('../app/Config/srpss_database_connection.php'))
        {
            throw new Exception("srpss_database_connection.php is missing.");
        }
        else
        {
            require '../app/Config/srpss_database_connection.php';
            if(isset($error))
            {
                echo "<script>alert($error);</script>";
                //exit();
            }
            else
            {
                // store query in a variable
                $sql = "SELECT usrnotification FROM usernotif WHERE firstname='{$_SESSION['username']}' AND lastname='{$_SESSION['username1']}' AND
                email= '{$_SESSION['email']}' ORDER BY timestmp DESC";

                // perform query and store result in a variable
                $result = $conn->query($sql);

                if($result->num_rows > 0)
                {
                    $i = 1;
                    while($row = $result->fetch_assoc())
                    {
                        echo "<p>";
                        echo "$i. " . "{$row['usrnotification']}";
                        echo "</p>";
                        $i++;
                    }
                }
                else
                {
                    echo "<p style='color:red;'>";
                    echo "No Notifications.";
                    echo "</p>";
                }

                // free the result
                $result->free_result();

                // close the connection
                $conn->close();
            }
        }
    }
    catch(Exception $e)
    {
        echo "<script>alert('{$e->getMessage()}');</script>";
    }
?>
