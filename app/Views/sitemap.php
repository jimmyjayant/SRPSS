<?php
    require 'sessionstart.php';
    try
    {
        if(!file_exists('../app/Models/checkcookie.php'))
        {
            throw new Exception("checkcookie.php is missing.");
        }
        else
        {
            require '../app/Models/checkcookie.php';
        }
    }
    catch(Exception $e)
    {
        echo "<script>alert('{$e->getMessage()}');</script>";
    }
?>

<?php require 'headerandnavbar.php'; ?>

<div class="main">
    <div class="part10">
        <h2>The Site Map</h2>

    <div class="part101">
    <div class="logout">
    <ul>
        <li>
            <b>When Logout</b>
            <ul>
                <li><a href="index">Home</a></li>
                <li><a href="register">Register</a></li>
                <li><a href="login">Login</a></li>
                <li><a href="researchsites">Research Sites</a></li>
                <li><a href="view">View</a></li>
                <li>
                    <a href="culture">
                    Culture
                    </a>
                    <ul>
                        <li><a href="magazines">Magazines</a></li>
                        <li><a href="newspapers">Newspapers</a></li>
                        <li><a href="conferences">Conferences</a></li>
                        <li><a href="channel">YouTube Channel</a></li>
                        <li><a href="scientist">Scientist</a></li>
                        <li><a href="movies">Movies</a></li>
                        <li><a href="awards">Awards</a></li>
                        <li><a href="observatories">Observatories</a></li>
                        <li><a href="scienceexhibition">Science Exhibition</a></li>
                        <li><a href="sciencefair">Science Fair</a></li>
                        <li><a href="astronomy">Astronomy</a>
                            <ul>
                                <li><a href="telescopemaking">Telescope Making</a></li>
                                <li><a href="starparty">Star Party</a></li>
                                <li><a href="astrophotography">Astrophotography</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="world">World</a></li>
                <li>
                    User Logo 
                    <ul>
                        <li><a href="login">Login</a></li>
                        <li><a href="register">Signup</a></li>
                    </ul>
                </li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Trademarks</a></li>
                <li><a href="#">&copy;SRPSS 2024</a></li>
                <li><a href="feedback">
                <?php
                if(isset($_SESSION['username']))
                {
                    echo "Feedback";
                } 
                else
                {
                    echo "Contact Us";
                }
                ?>
                </a></li>
                <li><a href="sitemap">Site Map</a></li>
                
            </ul>
        </li>
    </ul>
    </div>

    <?php
        // Provide access to admin sitemap only when admin is logged in
        if(isset($_SESSION['username']) && ($_SESSION['username'] == "admin"))
        {
            require 'admin_sitemap_section.php';
        }
    ?>
    

    <div class="userlogin">
     <ul>
        <li>
            <b>When User Login</b>
            <ul>
                <li><a href="index">Home (Submit visible)</a></li>
                <li><a href="researchsites">Research Sites</a></li>
                <li><a href="
                <?php
                    if(isset($_SESSION['username']))
                    {
                        echo "submit";
                    }
                    else 
                    {
                        echo "login";
                    }
                    ?>
                ">Submit</a></li>
                <li><a href="view">View</a></li>
                <li><a href="
                <?php
                    if(isset($_SESSION['username']))
                    {
                        echo "chat";
                    }
                    else 
                    {
                        echo "login";
                    }
                    ?>
                ">Chat</a></li>
                <li>
                <a href="culture">
                    Culture
                </a>
                        <ul>
                            <li><a href="magazines">Magazines</a></li>
                            <li><a href="newspapers">Newspapers</a></li>
                            <li><a href="conferences">Conferences</a></li>
                            <li><a href="channel">YouTube Channel</a></li>
                            <li><a href="scientist">Scientist</a></li>
                            <li><a href="movies">Movies</a></li>
                            <li><a href="awards">Awards</a></li>
                            <li><a href="observatories">Observatories</a></li>
                            <li><a href="scienceexhibition">Science Exhibition</a></li>
                            <li><a href="sciencefair">Science Fair</a></li>
                            <li><a href="astronomy">Astronomy</a>
                                <ul>
                                    <li><a href="telescopemaking">Telescope Making</a></li>
                                    <li><a href="starparty">Star Party</a></li>
                                    <li><a href="astrophotography">Astrophotography</a></li>
                                </ul>
                            </li>
                        </ul>
                </li>
                <li><a href="world">World</a></li>
                <li>
                    User Logo 
                    <ul>
                        <li><a href="
                        <?php
                            if(isset($_SESSION['username']))
                            {
                                echo "dashboard";
                            }
                            else
                            {
                                echo "login";
                            }
                            ?>
                        ">Dashboard</a>
                        <ul>
                            <li><a href="
                            <?php
                            if(isset($_SESSION['username']))
                            {
                                echo "dashboard";
                            }
                            else
                            {
                                echo "login";
                            }
                            ?>
                            ">User Notifications</a></li>
                            <li><a href="
                            <?php
                            if(isset($_SESSION['username']))
                            {
                                echo "dashboard";
                            }
                            else
                            {
                                echo "login";
                            }
                            ?>
                            ">Submitted Research Papers</a></li>
                            <li><a href="
                            <?php
                            if(isset($_SESSION['username']))
                            {
                                echo "dashboard";
                            }
                            else
                            {
                                echo "login";
                            }
                            ?>
                            ">Feedback</a></li>
                        </ul>
                        </li>
                        <li><a href="
                        <?php
                            if(isset($_SESSION['username']))
                            {
                                echo "changepassword";
                            }
                            else
                            {
                                echo "login";
                            }
                            ?>
                        ">Change Password</a></li>
                        <li><a 
                            <?php
                            if(isset($_SESSION['username']))
                            {
                                echo "onclick='logout()' style='cursor:pointer;'";
                            }
                            else
                            {
                                echo "href='login' style='cursor:pointer;'";
                            }
                            ?>
                        >Logout</a></li>
                    </ul>
                </li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Trademarks</a></li>
                <li><a href="#">&copy;SRPSS 2024</a></li>
                <li><a href="feedback">Feedback</a></li>
                <li><a href="sitemap">Site Map</a></li>
            </ul>
        </li>
     </ul>
    </div>
    </div>

    </div>
</div>

        <?php require 'footer.php'; ?>
    </body>
</html>
