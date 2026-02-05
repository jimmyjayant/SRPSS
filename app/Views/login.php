<?php
require 'sessionstart.php';
require '../app/Models/checkcookie.php';
?>

<?php
// Access Denied for Web page DIRECT ACCESS 
if(isset($_SESSION['username']))
{
    header("location: index");
    die();
}
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
    if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['login_submit'])))
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

            require '../app/Models/../app/Config/srpss_database_connection.php';

            // store query in a variable
            $sql = "SELECT * FROM researchers WHERE email='$email'";

            // perform query and store result in a variable
            $result = $conn->query($sql);

            if($result->num_rows > 0)
            {
                echo "<script>console.log('success');</script>";

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

                    $current_user_cookie = "currentuser";

                    setcookie($current_user_cookie, $_SESSION['sessionid'], time() + (7 * 24 * 60 * 60), "/");

                    $_SESSION['username'] = $row['firstname'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['username1'] = $row['lastname'];
                    $_SESSION['mobno'] = $row['contact'];
                    
                    $_SESSION['sessionactive'] = true;

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
                        header("Location: admin", true, 301);
                        exit();
                    }
                    else
                    {
                        header("Location: index", true, 301);
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

        <form action="<?php echo 'login'/*htmlspecialchars($_SERVER['PHP_SELF'])*/; ?>" method="post" target="_self">
            <div class="row">
                <div class="col25">
                    <label for="email">Email</label>
                </div>
                <div class="col75">
                    <input type="email" id="email" name="email" placeholder="Enter your email here" validate required>
                </div>
            </div>

            <div class="row">
                <div class="col25">
                    <label for="password">Password</label>
                </div>
                <div class="col75">
                    <input type="password" id="password" name="password" placeholder="Enter your password here" minlength="8" maxlength="30" required>
                </div>
            </div>

            <input type="submit" value="Submit" name="login_submit">
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
