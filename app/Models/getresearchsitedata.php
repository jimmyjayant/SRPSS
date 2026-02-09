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
            $sql = "SELECT * FROM researchsites";

            // perform query and store result in a variable
            $result = $conn->query($sql);

            if($result->num_rows > 0)
            {
                echo "<table>
                <tr>
                <th>S.N.</th>
                <th>Name of Institute</th>
                <th>Head Quarter</th>
                </tr>";

                while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['sitename'] . "</td>";
                echo "<td>" . $row['headquarter'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";

                // close the connection
                $conn->close();
            }
            else
            {
                echo "No record found at the moment.";
            }
        }
    }
    }
    catch(Exception $e)
    {
    echo "<script>alert('{$e->getMessage()}');</script>";
    }
?>
