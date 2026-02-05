<?php
    // track visitors of the website
    try
    {
        if(!file_exists('../app/Config/srpss_database_connection.php'))
        {
            throw new Exception('srpss_database_connection.php is missing.');
        }
        else
        {
            require '../app/Config/srpss_database_connection.php';
            if(isset($error))
            {
                echo "<script>console.log('error variable is set.');</script>";
                echo "<script>alert('{$error}');</script>";
                //exit();
            }
            else
            {
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
                    //echo "Error:- " . $sql . "<br>" . $conn->error;
                    throw new Exception('Database Interaction Error!');
                }

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
