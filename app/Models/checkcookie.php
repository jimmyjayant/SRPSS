<?php 
/* This php script will check for the existence of cookies in the user's browser. The main purpose of the script is to automatically logged in the user after they have closed their browser and open it again. So, that they don't have to login again. This feature will remain active for a week. After that, this feature will expire and the user have to manually login to the website. */

if(!isset($_SESSION['username']))
{
    if(count($_COOKIE) > 0)
    {
        echo "<script>console.log('cookie count is greater than 0.');</script>";
        if(isset($_COOKIE['currentuser']))
        {
            echo "<script>console.log('currentuser cookie exists.');</script>";
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
                        $sql = "SELECT * FROM researchers WHERE usersessionid='{$_COOKIE['currentuser']}'";

                        // perform query and store result in a variable
                        $result = $conn->query($sql);

                        if($result->num_rows > 0)
                        {
                            while($row = $result->fetch_assoc())
                            {
                                $_SESSION['sessionid'] = $_COOKIE['currentuser'];
                                $_SESSION['username'] = $row['firstname'];
                                $_SESSION['email'] = $row['email'];
                                $_SESSION['username1'] = $row['lastname'];
                                $_SESSION['mobno'] = $row['contact'];
                                
                                $_SESSION['sessionactive'] = true;
                            }
                        }

                        // Close the connection 
                        $conn->close();
                    }
                }
            }
            catch(Exception $e)
            {
                echo "<script>alert('{$e->getMessage()}');</script>";
            }
        }
    }
}
?>
