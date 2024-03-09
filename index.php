<?php
require 'sessionstart.php';
?>

<?php
require 'sessiontimeout.php';
?>

<?php 
require 'headerandnavbar.php';
?>

        <div class="main">

            <div class="part1">
                <h2>
                    Welcome To SRPSS 
                </h2>

                <p>
                    This web portal is designed specially for scientific researchers in India country. 
                    <br>
                    The Indian Researchers from various fields of Science and Technology can publish their research work on this platform. 
                    <br>
                    They will also be able to view others research work on this platform. And will also be able to chat with other researchers also. 
                    <br>
                    Besides that, there is a whole culture of science and technology dedicated to this platform such as Newspapers, Magazines, Conferences, and Youtube Channels. 
                    <br>
                    Also, you can check out the research sites in India and the Scientist Wiki on this platform. 

                    <br>
                    <br>

                    <img src="Images/science1.jpg" alt="Science Image 1">
                </p>
            </div>

            <div class="part2">
             <p>
                So try to be a part of this platform. 
                <br>
                Just Register yourself. 
                <br>
                And either submit your research work or view others research work. 
                <br>
                And at last, as a science enthusiast, join our community by subscribing to the science magazines, newspapers, youtube channels, or attend the conferences in the India country. 

                <br>
                <br>

                <img src="Images/science2.webp" alt="Science Image 2">
             </p>
            </div>
            
            <div class="part3"
                <?php
                if(isset($_SESSION['username']))
                {
                    echo "style='display:none;'";
                }
                ?>>
                <div class="part31">
                    <h2>
                        Register  
                    </h2>

                    <p>
                        Register to become a part of the website  

                        <br>
                        <br>

                        <a href="register.php">Register</a>
                    </p>
                </div>

                <div class="part32">
                    <img src="Images/register.jpg" alt="Register">
                </div>
            </div>

            <div class="part4"
                <?php
                if(isset($_SESSION['username']))
                {
                    echo "style='display:none;'";
                }
                ?>>
                <div class="part41">
                    <h2>
                        Login  
                    </h2>

                    <p>
                        Login to the platform  

                        <br>
                        <br>

                        <a href="login.php">Login</a>
                    </p>
                </div>

                <div class="part42">
                    <img src="Images/login.png" alt="Login">
                </div>
            </div>

            <div class="part5">
                <div class="part51">
                    <h2>
                        Research Sites in India 
                    </h2>

                    <p>
                        Check out the Research Places in India 

                        <br>
                        <br>

                        <a href="researchsites.php">Research Sites</a>
                    </p>
                </div>

                <div class="part52">
                    <img src="Images/science3.jpg" alt="Research Sites in India">
                </div>
            </div>

            <div class="part6" 
            <?php
                if(!isset($_SESSION['username']))
                {
                    echo "style='display:none;'";
                }
                ?>>
                <div class="part61">
                   <h2>
                    Submit Research Papers 
                   </h2>

                   <p>
                    Submit your Research Papers on this platform 

                    <br>
                    <br>

                    <a href="submit.php">Submit</a>
                   </p>
                </div>

                <div class="part62">
                    <img src="Images/submit.png" alt="Submit Research Papers">
                </div>
            </div>

            <div class="part7">
                <div class="part71">
                   <h2>
                    View Research Papers 
                   </h2>

                   <p>
                    View the Research Papers on this platform 

                    <br>
                    <br>

                    <a href="view.php">View</a>
                   </p>
                </div>

                <div class="part72">
                    <img src="Images/view.jpg" alt="View Research Papers">
                </div>
            </div>

            <div class="part8">
                <div class="part81">
                    <h2>
                        Culture 
                    </h2>

                    <p>
                        Check out the Culture Section 

                        <br>
                        <br>

                        <a href="culture.php">Culture</a>

                        <br>
                        <br>

                        <img src="Images/culture.webp" alt="Scientific Culture">
                    </p>
                </div>
            </div>
        </div>

        <?php require 'footer.php'; ?>
    </body>
</html>
