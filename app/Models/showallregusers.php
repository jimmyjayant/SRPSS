<?php require 'sessionstart.php'; ?>

<?php
    // Access Denied for Web page DIRECT ACCESS 
    if(!isset($_SESSION['username']))
    {
        header("location: login");
        die();
    }
?>

<?php
    // Create connection using MySQLi Object-Oriented
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
                $sql = "SELECT * FROM researchers";

                // perform query and store result in a variable
                $result = $conn->query($sql);

                if($result->num_rows > 0)
                {
                    echo "<select>";
                    while($row = $result->fetch_assoc())
                    {
                        if($row['firstname'] == "admin")
                        continue;
                        echo "<option value='{$row['email']}'>";
                        echo "{$row['firstname']}" . " " . "{$row['lastname']}";
                        echo "</option>";
                    }
                    echo "</select>";
                }
                else 
                {
                echo "<p style='color:red;'>No Registered Users found.</p>";
                }

                $result->free_result();

                // Close the connection
                $conn->close();
            }
        }
    }
    catch(Exception $e)
    {
        echo "<script>alert('{$e->getMessage()}');</script>";
    }
?>
