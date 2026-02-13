<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_FILES['upload']['name'])) 
    {
        function test_input($data) 
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $category = ($_POST['category']);
        $papername = test_input($_POST['papername']);
        $loggeduser = $_SESSION['username'];
        $loggeduseremail = $_SESSION['email'];

        if(isset($_FILES['upload']['name']))
        {
            $file_name = $_FILES['upload']['name'];
            $file_tmp = $_FILES['upload']['tmp_name'];

            move_uploaded_file($file_tmp,"../writable/uploads/researchpapers/" . $file_name);

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
                        $sql = "INSERT INTO researchpapers(loggeduser, email, category, topic, paper)
                        VALUES ('$loggeduser', '$loggeduseremail', '$category', '$papername', '$file_name')";

                        $result = $conn->query($sql);
                        
                        if($result === TRUE)
                        {
                            echo "<p style='color:green;'>Your research paper has been successfully submitted.</p>";
                        }
                        else 
                        {
                            echo "<p style='color:red;'>Error submitting research paper.</p>";
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
?>
