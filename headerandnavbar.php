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
        <script>
            var starttimer = <?php 
            if(isset($_SESSION['sessionactive']))
            {
                echo $_SESSION['sessionactive']; 
            }
            else
            {
                echo (int)false;
            }
            ?>;

            if(starttimer)
            {
                var expiretime = localStorage.getItem("expire");

                if (!expiretime) {
                    // If expiretime is not set in localStorage, set it now
                    var countDowntime = new Date().getTime() + (10 * 60 * 1000);
                    localStorage.setItem("expire", countDowntime);
                    expiretime = countDowntime;
                }

                // countdown timer when user logged in
                function timer()
                {
                var now = new Date().getTime();

                var distance = expiretime - now;

                var minutes = Math.floor(distance / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
                var timerelement = document.getElementById('timer');

                if(timerelement)
                {
                    timerelement.innerHTML = minutes + "m " + seconds + "s";
                }

                if(distance < 0)
                {
                    clearInterval(x);
                    clearInterval(y);
                    timerelement.innerHTML = "EXPIRED";
                    localStorage.clear();
                    window.location.href = "logout.php";
                }
                }
                // function to display countdown timer in horizontal navbar 
                var x = setInterval(function() { timer(); }, 1000);

                
                // function to prevent concurrent logins 
                var y = setInterval(function() {checklogin(); }, 10000);
            }
        </script>
        <title>
            Scientific Research Paper Submission System (SRPSS) 
        </title>
    </head>
    <body>
        <div class="header">
            <div class="hamburgermenu" onclick="nav()">
                <div></div>
                <div></div>
                <div></div>
            </div>

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
                        <a href="dashboard.php" alt="User Dashboard"
                            <?php
                                if(!isset($_SESSION['username']) || ($_SESSION['username'] === "admin"))
                                {
                                    echo "style='display:none;'";
                                }
                            ?>>
                            Dashboard
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
                        <a alt="Logout" 
                            <?php
                                if(!(isset($_SESSION['username'])))
                                {
                                    echo "style='display:none;'";
                                }
                            ?> onclick="logout()" style='cursor:pointer;'>
                            Logout
                        </a>
                </div>
            </div>
        </div>

        <div class="navbar" id="nav">
            <a href="#" onclick="closenav()" id="closex"><span>&times;</span></a>
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
              <a href="#" class="dropbtn">Culture</a>
                 <div class="dropdown-content">
                    <a href="magazines.php">Magazines</a>
                    <a href="newspapers.php">Newspapers</a>
                    <a href="conferences.php">Conferences</a>
                    <a href="channel.php">Youtube Channel</a>
                    <a href="scientist.php">Scientist</a>
                    <a href="movies.php">Movies</a>
                    <a href="awards.php">Awards</a>
                    <a href="observatories.php">Observatories</a>
                    <a href="scienceexhibition.php">Science Exhibition</a>
                    <a href="sciencefair.php">Science Fair</a>
                    <a href="astronomy.php">Astronomy</a>
                 </div>
            </div>
            <a href="world.php"><img src="Images/transparent globe.png" alt="Scientific Websites from around the World" style="width:1rem;height:1rem;padding:0;"></a>
            <a href="#" alt="User Session Timer" 
            <?php
            if(isset($_SESSION['sessionactive']))
            {
                echo "id='timer'";
            }
            else
            {
                echo "style='display:none;'";
            }
            ?>></a>
        </div>

        <div id="CreateDataStatus"></div>