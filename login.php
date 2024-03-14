<?php
require 'sessionstart.php';
?>

<?php
// Check if can login again
if(isset($_SESSION['attempt_again']))
{
    $now = time();
    if($now >= $_SESSION['attempt_again'])
    {
        $_SESSION['attempt'] = NULL;
        $_SESSION['attempt_again'] = NULL;
    }
} 
?>

<?php
    if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['submit'])))
    {
        function test_input($data) 
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $email = test_input($_POST['email']);
        $user_password = test_input($_POST['password']);

        

        // set login attempts if not set
        if(!isset($_SESSION['attempt']))
        {
            $_SESSION['attempt'] = 0;
        }

        // check if 3 attempts are done
        if($_SESSION['attempt'] == 3)
        {
            $_SESSION['error'] = "<p style='color:red;'>Attempt Limit Reach. Please try again after 5 mins.</p>";
        }
        else
        {
            // Create connection using MySQLi Object-Oriented

            require('databaseconnection.php');

            // store query in a variable
            $sql = "SELECT * FROM researchers WHERE email='$email'";

            // perform query and store result in a variable
            $result = $conn->query($sql);

            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                // verify password
                // password_verify() function will work only if the password in database is stored as hash
                // it will not work on plaintext stored password in database 
                if(password_verify($user_password, $row['pass']))
                {
                    // action after a successful attempt
                    $_SESSION['attempt'] = NULL;
                    // store current session id of a particular user
                    session_regenerate_id();
                    $_SESSION['sessionid'] = session_id();
                    
                    $_SESSION['username'] = $row['firstname'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['username1'] = $row['lastname'];
                    $_SESSION['mobno'] = $row['contact'];

                    if(isset($_SESSION['sessionid']) && isset($_SESSION['email']))
                    {
                        // store query in a variable
                        $sql1 = "UPDATE researchers 
                                SET usersessionid = '{$_SESSION['sessionid']}'
                                WHERE email = '{$_SESSION['email']}'";

                        $result1 = $conn->query($sql1);
                    }

                    // redirects the user to respective pages
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
                    $_SESSION['error'] = "<p style='color:red;'>Password Incorrect!</p>";

                    // this is where we put our 3 attempt limit
                    $_SESSION['attempt'] += 1;

                    // set time limit to login if third attempt is reach
                    if($_SESSION['attempt'] == 3)
                    {
                        // if attempt limit is reached, then set 4th attempt after 5 mins. 
                        $_SESSION['attempt_again'] = time() + (5*60);
                    }
                }
                }
            }
            else
            {
                $_SESSION['error'] = "<p style='color:red;'>No account with that email.</p>";
            }
        }        
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
            if(isset($_SESSION['error']))
            {
                echo $_SESSION['error'];
                $_SESSION['error'] = NULL;
            }
        ?>
             
    </div>

        <?php require 'footer.php'; ?>
    </body>
</html>
