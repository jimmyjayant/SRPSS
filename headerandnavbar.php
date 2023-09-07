<!DOCTYPE html>
<html lang="en-in">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Jimmy Jayant">
        <meta name="keywords" content="science, research, papers, engineering, research paper">
        <meta name="description" content="Scientific Research Paper Submission System (SRPSS) online platform allows you to submit and view research papers">
        <link rel="icon" type="image/x-icon" href="Images/SRPSS.png">
        <link rel="stylesheet" href="style.css">
        <!-- Load an icon library -->
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
        <script src="script.js"></script>
        <title>
            Scientific Research Paper Submission System (SRPSS) 
        </title>
    </head>
    <body>
        <div class="header">
            <div class="logo">
                <a href="index.php" alt=" Website Logo">
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
                <!--<i class="fa fa-fw fa-user"></i>-->
                <!--<img src="images/login user.png" alt="Logged In User">-->
                
                <!--
                <div class="currentstatus" >
                    
                </div>
                -->
                
                <div class="container">
                    <div class="head"></div>
                    <div class="body"></div>
                </div>
                
                <div class="userstatus">
                        <a href="login.php" alt="Login" 
                            <?php 
                                if(isset($_SESSION['username']))
                                {
                                    echo "style='display:none;'";
                                }
                            ?>>
                            Login
                        </a>
                        <a href="register.php" alt="Register" 
                            <?php 
                                if(isset($_SESSION['username']))
                                {
                                    echo "style='display:none;'";
                                }
                            ?>>
                            Signup
                        </a>
                        <a href="#" alt="Current User" 
                            <?php
                                if(!isset($_SESSION['username']))
                                {
                                    echo "style='display:none;'";
                                }
                            ?>>
                            Hi! 
                            <?php 
                                if(isset($_SESSION['username']))
                                {
                                    echo $_SESSION['username'];
                                }
                            ?>
                        </a>
                        <a href="logout.php" alt="Logout" 
                            <?php
                                if(!(isset($_SESSION['username'])))
                                {
                                    echo "style='display:none;'";
                                }
                            ?>>
                            Logout
                        </a>
                </div>
            </div>
        </div>

        <div class="navbar" id="nav">
            <a href="index.php">Home</a>
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

        <div id="CreateDataStatus"></div>