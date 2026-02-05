<div class="adminlogin">
        <ul>
            <li>
                <b>When Admin Login</b>
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
                        <a href="
                        <?php
                        if(isset($_SESSION['username']) && ($_SESSION['username'] === "admin"))
                        {
                            echo "admin";
                        }
                        else 
                        {
                            echo "login";
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
    