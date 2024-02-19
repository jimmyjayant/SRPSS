<?php
require 'sessionstart.php';
?>

<?php 
require 'headerandnavbar.php';
?>

<div class="main">
    <div class="part10">
    <h2>
        The Site Map 
    </h2>

    <div class="part101">
    <div class="logout">
    <ul>
        <li>
            <b>When Logout</b>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="researchsites.php">Research Sites</a></li>
                <li><a href="view.php">View</a></li>
                <li>
                    <a href="culture.php">
                    Culture
                    </a>
                    <ul>
                        <li><a href="magazines.php">Magazines</a></li>
                        <li><a href="newspapers.php">Newspapers</a></li>
                        <li><a href="conferences.php">Conferences</a></li>
                        <li><a href="channel.php">YouTube Channel</a></li>
                        <li><a href="scientist.php">Scientist</a></li>
                        <li><a href="movies.php">Movies</a></li>
                        <li><a href="awards.php">Awards</a></li>
                        <li><a href="observatories.php">Observatories</a></li>
                        <li><a href="scienceexhibition.php">Science Exhibition</a></li>
                        <li><a href="astronomy.php">Astronomy</a></li>
                    </ul>
                </li>
                <li>
                    User Logo 
                    <ul>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Signup</a></li>
                    </ul>
                </li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Trademarks</a></li>
                <li><a href="#">&copy;SRPSS 2024</a></li>
                <li><a href="feedback.php">
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
                <li><a href="sitemap.php">Site Map</a></li>
                
            </ul>
        </li>
    </ul>
    </div>

    <div class="adminlogin">
        <ul>
            <li>
                <b>When Admin Login</b>
                <ul>
                    <li><a href="index.php">Home (Submit visible)</a></li>
                    <li><a href="researchsites.php">Research Sites</a></li>
                    <li><a href="
                    <?php
                    if(isset($_SESSION['username']))
                    {
                        echo "submit.php";
                    }
                    else 
                    {
                        echo "login.php";
                    }
                    ?>
                    ">Submit</a></li>
                    <li><a href="view.php">View</a></li>
                    <li><a href="
                    <?php
                    if(isset($_SESSION['username']))
                    {
                        echo "chat.php";
                    }
                    else 
                    {
                        echo "login.php";
                    }
                    ?>
                    ">Chat</a></li>
                    <li>
                        <a href="
                        <?php
                        if(isset($_SESSION['username']) && ($_SESSION['username'] === "admin"))
                        {
                            echo "admin.php";
                        }
                        else 
                        {
                            echo "login.php";
                        }
                        ?>
                        ">
                        Admin Panel
                        </a>
                        <ul>
                            <li>Research Sites</li>
                            <li>Research Papers</li>
                            <li>Magazines</li>
                            <li>Newspapers</li>
                            <li>Conference</li>
                            <li>YouTube Channels</li>
                            <li>Indian Scientists</li>
                            <li>Indian Scientific Movies</li>
                            <li>Indian Scientific Web Series</li>
                            <li>Awards</li>
                            <li>Observatories</li>
                            <li>User Feedback</li>
                            <li>Export MySQL Data to File</li>
                            <li>User Notifications</li>
                        </ul>
                    </li>
                    <li>
                    <a href="culture.php">
                    Culture
                    </a>
                        <ul>
                            <li><a href="magazines.php">Magazines</a></li>
                            <li><a href="newspapers.php">Newspapers</a></li>
                            <li><a href="conferences.php">Conferences</a></li>
                            <li><a href="channel.php">YouTube Channel</a></li>
                            <li><a href="scientist.php">Scientist</a></li>
                            <li><a href="movies.php">Movies</a></li>
                            <li><a href="awards.php">Awards</a></li>
                            <li><a href="observatories.php">Observatories</a></li>
                            <li><a href="scienceexhibition.php">Science Exhibition</a></li>
                            <li><a href="astronomy.php">Astronomy</a></li>
                        </ul>
                    </li>
                    <li>
                        User Logo 
                        <ul>
                            <li><a href="
                            <?php
                            if(isset($_SESSION['username']))
                            {
                                echo "changepassword.php";
                            }
                            else
                            {
                                echo "login.php";
                            }
                            ?>
                            ">Change Password</a></li>
                            <li><a href="
                            <?php
                            if(isset($_SESSION['username']))
                            {
                                echo "logout.php";
                            }
                            else
                            {
                                echo "login.php";
                            }
                            ?>
                            ">Logout</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Trademarks</a></li>
                    <li><a href="#">&copy;SRPSS 2024</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                    <li><a href="sitemap.php">Site Map</a></li>
                    
                </ul>
            </li>
        </ul>
    </div>

    <div class="userlogin">
     <ul>
        <li>
            <b>When User Login</b>
            <ul>
                <li><a href="index.php">Home (Submit visible)</a></li>
                <li><a href="researchsites.php">Research Sites</a></li>
                <li><a href="
                <?php
                    if(isset($_SESSION['username']))
                    {
                        echo "submit.php";
                    }
                    else 
                    {
                        echo "login.php";
                    }
                    ?>
                ">Submit</a></li>
                <li><a href="view.php">View</a></li>
                <li><a href="
                <?php
                    if(isset($_SESSION['username']))
                    {
                        echo "chat.php";
                    }
                    else 
                    {
                        echo "login.php";
                    }
                    ?>
                ">Chat</a></li>
                <li>
                <a href="culture.php">
                    Culture
                </a>
                        <ul>
                            <li><a href="magazines.php">Magazines</a></li>
                            <li><a href="newspapers.php">Newspapers</a></li>
                            <li><a href="conferences.php">Conferences</a></li>
                            <li><a href="channel.php">YouTube Channel</a></li>
                            <li><a href="scientist.php">Scientist</a></li>
                            <li><a href="movies.php">Movies</a></li>
                            <li><a href="awards.php">Awards</a></li>
                            <li><a href="observatories.php">Observatories</a></li>
                            <li><a href="scienceexhibition.php">Science Exhibition</a></li>
                            <li><a href="astronomy.php">Astronomy</a></li>
                        </ul>
                </li>
                <li>
                    User Logo 
                    <ul>
                        <li><a href="
                        <?php
                            if(isset($_SESSION['username']))
                            {
                                echo "dashboard.php";
                            }
                            else
                            {
                                echo "login.php";
                            }
                            ?>
                        ">Dashboard</a>
                        <ul>
                            <li><a href="
                            <?php
                            if(isset($_SESSION['username']))
                            {
                                echo "dashboard.php";
                            }
                            else
                            {
                                echo "login.php";
                            }
                            ?>
                            ">User Notifications</a></li>
                            <li><a href="
                            <?php
                            if(isset($_SESSION['username']))
                            {
                                echo "dashboard.php";
                            }
                            else
                            {
                                echo "login.php";
                            }
                            ?>
                            ">Submitted Research Papers</a></li>
                            <li><a href="
                            <?php
                            if(isset($_SESSION['username']))
                            {
                                echo "dashboard.php";
                            }
                            else
                            {
                                echo "login.php";
                            }
                            ?>
                            ">Feedback</a></li>
                        </ul>
                        </li>
                        <li><a href="
                        <?php
                            if(isset($_SESSION['username']))
                            {
                                echo "changepassword.php";
                            }
                            else
                            {
                                echo "login.php";
                            }
                            ?>
                        ">Change Password</a></li>
                        <li><a href="
                        <?php
                            if(isset($_SESSION['username']))
                            {
                                echo "logout.php";
                            }
                            else
                            {
                                echo "login.php";
                            }
                            ?>
                        ">Logout</a></li>
                    </ul>
                </li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Trademarks</a></li>
                <li><a href="#">&copy;SRPSS 2024</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="sitemap.php">Site Map</a></li>
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
