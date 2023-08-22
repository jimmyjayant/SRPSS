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
            $password = test_input($_POST['password']);
        

        

        // Create connection using MySQLi Object-Oriented

        include('databaseconnection.php');

        $sql = "SELECT * FROM researchers WHERE email='$email' AND pass='$password'";

        $result = $conn->query($sql);
        
        if($result->num_rows > 0)
        {
            $row = $result->fetch_assoc();
            $username = $row['firstname'];

            echo "<p style='color:green;'> Hello <span style='color:#4834d4;'>" . $username . " </span>Login Successful.</p>";
        }
        else 
        {
            echo "<p style='color:red;'>Your Email or Password is Invalid.</p>";
        }

        $result->free_result();

        // Close the connection
        $conn->close();

        if($username == "admin")
        {
            header("Location: admin.php", true, 301);
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en-in">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Jimmy Jayant">
        <meta name="keywords" content="science, research, papers, engineering, research paper">
        <meta name="description" content="Scientific Research Paper Submission System (SRPSS) online platform allows you to submit and view research papers">
        <link rel="stylesheet" href="style.css">
        <!-- Load an icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>
            Scientific Research Paper Submission System (SRPSS) 
        </title>
    </head>
    <body>
    <div class="header">
            <div class="logo">
                <a href="home.php" alt=" Website Logo">
                  SRPSS 
                  <!--<img src="images/srpss.png" alt="SRPSS Logo">-->
                </a>
            </div>

            <div class="heading">
                <h1>
                  Scientific Research Paper Submission System (SRPSS)  
                </h1>
            </div>
            
            <div class="login">
                <i class="fa fa-fw fa-user"></i>
                <!--<img src="images/login user.png" alt="Logged In User">-->
                <div class="currentstatus">
                    <a href="login.php" alt="Login">Login</a>
                    <a href="register.php" alt="Register">Signup</a>
                </div>
            </div>
        </div>

        <div class="navbar">
            <a href="home.php">Home</a>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
            <a href="researchsites.php">Research Sites</a>
            <a href="submit.php">Submit</a>
            <a href="view.php">View</a>
            <div class="dropdown">
              <a href="culture.php" class="dropbtn">Culture</a>
                 <div class="dropdown-content">
                    <a href="magazines.php">Magazines</a>
                    <a href="newspapers.php">Newspapers</a>
                    <a href="conferences.php">Conferences</a>
                    <a href="channel.php">Youtube Channel</a>
                    <a href="scientist.php">Scientist</a>
                    <a href="movies.php">Movies</a>
                 </div>
            </div>
        </div>

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
        </div>

        <div class="footer">
            <div>
            <a href="">Privacy</a>
            <a href="">Terms of Use</a>
            <a href="">Trademarks</a>
            <a href="">&copy;SRPSS 2023</a>
            <a href="feedback.php">Feedback</a>
            </div>
            <div>
            <a href="https://www.facebook.com" target="_blank"><img src="Images/facebook.png" width="20" height="20" alt="Facebook Logo"></a>
            <a href="https://www.twitter.com" target="_blank"><img src="Images/twitter.png" width="20" height="20" alt="Twitter Logo"></a>
            <a href="https://www.instagram.com" target="_blank"><img src="Images/instagram.png" width="20" height="20" alt="Instagram Logo"></a>
            </div>
        </div>
    </body>
</html>
