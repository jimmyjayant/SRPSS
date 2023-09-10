<?php
require 'sessionstart.php';
?>

<?php
    if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['submit'])))
    {
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $email = test_input($_POST['email']);
        $user_password = test_input($_POST['password']);

        // Create connection using MySQLi Object-Oriented

        require('databaseconnection.php');

        $sql = "SELECT * FROM researchers WHERE email='$email' AND pass='$user_password'";

        $result = $conn->query($sql);
        
        if($result->num_rows > 0)
        {
            $row = $result->fetch_assoc();
            $_SESSION['username'] = $row['firstname'];
            
            if($_SESSION['username'] == "admin")
            {
                header("Location: admin.php", true, 301);
                exit();
            }
            else
            {
                header("Location: index.php", true, 301);
                exit();
            }
        }
        else 
        {
            $status = "<p style='color:red;'>Your Email or Password is Invalid.</p>";
        }

        $result->free_result();

        // Close the connection
        $conn->close();
    }
?>

<?php 
 require 'headerandnavbar.php';
?>

    <div class="main">
        <h2>
            Log In 
        </h2>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
            <label for="email">Email</label>
            <br>
            <input type="email" id="email" name="email" placeholder="Enter your email here" validate required>

            <br>
            <br>
            
            <label for="password">Password</label>
            <br>
            <input type="password" id="password" name="password" placeholder="Enter your password here" minlength="8" maxlength="30" required>

            <br>
            <br>

            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Reset">
        </form> 

        <?php
            if(isset($status))
            {
                echo $status;
            }
        ?>
             
    </div>

        <?php require 'footer.php'; ?>
    </body>
</html>
