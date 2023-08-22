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
        <script src="script.js"></script>
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
            <div class="part1">
                <h2>
                    List of Scientific Magazines in India 
                </h2>

                <p>
                    Here is the list of Indian Science Magazines:- 
                </p>

                <br>
                <br>

                <!-- Data from Database will be listed here -->
                <div id="magazines">
                
                </div>
            </div>
        
            <br>
            <br>
            <hr>
            <br>
            <br>

            <div class="part2">
                <h2>
                    List of Scientific Journals in India 
                </h2>
                
                <p>
                    Here is the list of Indian Science Journals:- 
                </p>

                <br>
                <br>

                <!-- Data from Database will be listed here -->
                <div id="journals">
            
                </div>
            </div>
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