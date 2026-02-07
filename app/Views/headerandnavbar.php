<!DOCTYPE html>
<html lang="en-in">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Jimmy Jayant">
        <meta name="keywords" content="science, research, papers, engineering, research paper">
        <meta name="description" content="Scientific Research Paper Submission System (SRPSS) online platform allows you to submit and view research papers">
        <link rel="icon" type="image/x-icon" href="images/SRPSS.png">
        <link rel="stylesheet" href="css/style.css">
        <script src="script/script.js"></script>
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
                    window.location.href = "logout";
                }
                }
                // function to display countdown timer in horizontal navbar 
                var x = setInterval(function() { timer(); }, 1000);

                
                // function to prevent concurrent logins 
                var y = setInterval(function() {checklogin(); }, 10000);
            }
        </script>
        <title>Scientific Research Paper Submission System (SRPSS)</title>
    </head>
    <body>
        <div class="header">
            <a class="hamburgermenu" href="#nav">
                <div></div>
                <div></div>
                <div></div>
            </a>

            <div class="logo">
                <a href="index" alt=" Website Logo">SRPSS</a>
            </div>

            <div class="heading">
                <h1>Scientific Research Paper Submission System (SRPSS)</h1>
            </div>
            
            <div class="login">                
                <div class="container">
                    <div class="head"></div>
                    <div class="body"></div>
                </div>
                
                <div class="userstatus">
                    <?php 
                        if(!isset($_SESSION['username']))
                        {
                            echo "<a href='login' alt='Login'>Login</a>";
                            echo "<a href='register' alt='Register'>Signup</a>";
                        }
                        else
                        {
                            echo "<a alt='Current User'>Hi! {$_SESSION['username']}</a>";
                            echo "<a href='dashboard' alt='User Dashboard'>Dashboard</a>";
                            echo "<a href='changepassword' alt='Change Password'>Change Password</a>";
                            echo "<a alt='Logout' onclick='logout()' style='cursor:pointer;'>Logout</a>";
                        }
                    ?>                            
                </div>
            </div>
        </div>

        <div class="navbar" id="nav">
            <a href="#" id="closex"><span>&times;</span></a>
            <a href="index">Home</a>
            <?php
                if(!isset($_SESSION['username']))
                {
                    echo "<a href='register'>Register</a>";
                    echo "<a href='login'>Login</a>";
                }
                else
                {
                    echo "<a href='submit'>Submit</a>";
                    echo "<a href='chat'>Chat</a>";
                    if(!($_SESSION['username'] == "admin"))
                    {
                        echo "<a href='admin'>Admin Panel</a>";
                    }
                }
            ?>
            <a href="researchsites">Research Sites</a>
            <a href="view">View</a>
            <div class="dropdown">
              <a href="#" class="dropbtn">Culture</a>
                 <div class="dropdown-content">
                    <a href="magazines">Magazines</a>
                    <a href="newspapers">Newspapers</a>
                    <a href="conferences">Conferences</a>
                    <a href="channel">Youtube Channel</a>
                    <a href="scientist">Scientist</a>
                    <a href="movies">Movies</a>
                    <a href="awards">Awards</a>
                    <a href="observatories">Observatories</a>
                    <a href="scienceexhibition">Science Exhibition</a>
                    <a href="sciencefair">Science Fair</a>
                    <a href="astronomy">Astronomy</a>
                 </div>
            </div>
            <a href="world"><img src="images/transparent globe.png" alt="Scientific Websites from around the World" style="width:1rem;height:1rem;padding:0;"></a>
            <?php
                if(isset($_SESSION['sessionactive']))
                {
                    echo "<a href='#' alt='User Session Timer' id='timer'></a>";
                }
            ?>
        </div>
