<?php
    require 'sessionstart.php';

    // Access Denied for Web page DIRECT ACCESS 
    if(!isset($_SESSION['username']))
    {
        die();
    }
    else
    {
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
                    echo "<script>alert($error);</script>";
                    //exit();
                }
                else
                {
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
            }
        }
        catch(Exception $e)
        {
            echo "<script>alert('{$e->getMessage()}');</script>";
        }
    }
?>
