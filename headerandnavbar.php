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
                </a>
            </div>

            <div class="heading">
                <h1>
                  Scientific Research Paper Submission System (SRPSS)  
                </h1>
            </div>
            
            <div class="login">                
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
                        <a href="changepassword.php" alt="Change Password" 
                        <?php 
                        if(!isset($_SESSION['username']))
                        {
                            echo "style='display:none;'";
                        }
                        ?>>
                        Change Password 
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
            <a href="register.php"
            <?php
            if(isset($_SESSION['username']))
            {
                echo "style='display:none;'";
            }
            ?>>Register</a>
            <a href="login.php"
            <?php
            if(isset($_SESSION['username']))
            {
                echo "style='display:none;'";
            }
            ?>>Login</a>
            <a href="researchsites.php">Research Sites</a>
            <a href="submit.php" 
            <?php
            if(!isset($_SESSION['username']))
            {
                echo "style='display:none;'";
            }
            ?>>Submit</a>
            <a href="view.php">View</a>
            <a href="chat.php"
            <?php
            if(!isset($_SESSION['username']))
            {
                echo "style='display:none;'";
            }
            ?>>Chat</a>
            <a href="admin.php"
            <?php
            if(!(isset($_SESSION['username']) && ($_SESSION['username'] == "admin")))
            {
                echo "style='display:none;'";
            }
            ?>>Admin Panel</a>
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