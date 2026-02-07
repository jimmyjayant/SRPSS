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

<?php
    // Access Denied for Web page DIRECT ACCESS 
    if(!isset($_SESSION['username']))
    {
        header("location: login");
        die();
    }
?>

<?php require 'headerandnavbar.php'; ?>

<div class="main" id="userdashboard">
    <div class="navbar2">
        <a href="#" onclick="usernavbar1()">User Notifications</a>
        <a href="#" onclick="usernavbar2()">Submitted Research Papers</a>
        <a href="#" onclick="usernavbar3()">Feedback</a>
    </div>
    <div class="userpanel">
        <h2>
            Welcome to the User Dashboard 
        </h2>

        <!-- User Notifications -->
        <div class="class20">
            <h2>
                User Notifications 
            </h2>

            <br>
            <br>

            <!-- Data from 'usernotif' table will be listed here -->
            <div id="usernotifications"></div>
        </div>

        <!-- Submitted Research Papers by the User -->
        <div class="class21">
            <h2>
                Submitted Research Papers 
            </h2>

            <br>
            <br>

            <!-- Data from Database will be listed here -->
            <div id="papersubmittedbyuser"></div>
        </div>

        <!-- Feedback by the User -->
        <div class="class22">
            <h2>
                Submitted Feedback 
            </h2>

            <br>
            <br>

            <!-- Data from 'feedback' table will be listed here -->
            <div id="feedbackbyuser"></div>
        </div>
    </div>
</div>

        <?php require 'footer.php'; ?>
    </body>
</html>
