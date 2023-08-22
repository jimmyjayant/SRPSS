<!DOCTYPE html>
<html lang="en-in">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Jimmy Jayant">
        <meta name="keywords" content="science, research, papers, engineering, research paper">
        <meta name="description" content="Scientific Research Paper Submission System (SRPSS) online platform allows you to submit and view research papers">
        <link rel="stylesheet" href="style.css">
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
                <img src="images/login user.png" alt="Logged In User">
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
                Feedback Form 
            </h2>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" target="_self">
                <label for="name">Name</label>
                <br>
                <input type="text" placeholder="Enter Your Name here" id="name" name="name" maxlength="50" required>

                <br>
                <br>

                <label for="subject">Subject</label>
                <br>
                <input type="text" placeholder="Enter the Subject here" id="subject" name="subject" maxlength="100" required>

                <br>
                <br>

                <label for="mobile">Mobile Number</label>
                <br>
                <input type="tel" id="mobile" name="mobile" placeholder="+91-xxxxxxxxxx (Omit +91)" pattern="[0-9]{10}" required>

                <br>
                <br>

                <label for="email">Email</label>
                <br>
                <input type="email" placeholder="Enter your email here" id="email" name="email" validate required>

                <br>
                <br>

                <label for="message">Message</label>
                <br>
                <textarea id="message" name="message" rows="10" cols="50" required></textarea>

                <br>
                <br>
                
                <input type="submit" value="Submit" name="submit">

                <input type="reset" value="Reset">
            </form>

            <?php

            if(($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST["submit"]))) {
                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }


                $name = test_input($_POST['name']);
                $subject = test_input($_POST['subject']);
                $mobile = test_input($_POST['mobile']);
                $email = test_input($_POST['email']);
                $message = test_input($_POST['message']);    
                

            

                // Connect to 'srpss' database and input necessary form information to 'feedback' table using MySQLi Object-Oriented method:- 

                include('databaseconnection.php');

                // sql to insert form data before checking if records already exists
                $sql = "INSERT INTO feedback (fname, topic, contact, email, mess)
                VALUES ('$name', '$subject', '$mobile', '$email', '$message')";


                // Perform query
                $result = $conn->query($sql);

                if($result === TRUE) {
                    echo "<p style='color:green;'>Your feedback has been submitted.</p>";
                }
                else {
                    echo "<p style='color:red;'>Please enter UNIQUE feedback.</p>";
                }

                // Close the connection
                $conn->close();
            }
            ?>
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
