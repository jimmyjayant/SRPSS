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
        
        
        $oldpass = test_input($_POST['oldpass']);
        $newpass = test_input($_POST['newpass']);

        // Create connection using MySQLi Object-Oriented

        require('databaseconnection.php');

        $email = $_SESSION['email'];

        $sql = "SELECT * FROM researchers WHERE email='$email' AND pass='$oldpass';";

        $result = $conn->query($sql);
        
        if($result->num_rows > 0)
        {
            $sql1 = "UPDATE researchers SET pass='$newpass' WHERE email='$email'";
            $result1 = $conn->query($sql1);
            
            if($result1)
            {
                $status = "<p style='color:green;'>Your Password is changed Successfully.</p>";
            }
            else 
            {
                $status = "<p style='color:red;'>Error Changing Password.</p>";
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
            Change Password  
        </h2>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
            <!--<label for="email">Email</label>
            <br>
            <input type="email" id="email" name="email" placeholder="Enter your email here" validate required>

            <br>
            <br>
-->
            <label for="oldpass">Old Password</label>
            <br>
            <input type="password" id="oldpass" name="oldpass" placeholder="Enter your old password" minlength="8" maxlength="30" required>

            <br>
            <br>
            
            <label for="newpass">New Password</label>
            <br>
            <input type="password" id="newpass" name="newpass" placeholder="Enter your new password" minlength="8" maxlength="30" required>

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