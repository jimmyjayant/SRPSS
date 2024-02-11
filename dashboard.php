<?php
require 'sessionstart.php';
?>

<?php
// Access Denied for Web page DIRECT ACCESS 
if(!isset($_SESSION['username']))
{
    header("location: login.php");
    die();
}
?>

<?php 
require 'headerandnavbar.php';
?>

<div class="main" id="userdashboard">
    <div class="navbar2">
        <a href="#" onclick="usernavbar1()">User Notifications</a>
        <a href="#" onclick="usernavbar2()">Submitted Research Papers</a>
    </div>
    <div class="userpanel">
        <h2>
            Welcome to the User Dashboard 
        </h2>

        <!-- User Notifications -->
        <div class="class12">
            <h2>
                User Notifications 
            </h2>

            <br>
            <br>

            <!-- Data from Database will be listed here -->
            <div id="usernotifications">

            </div>
        </div>

        <!-- Submitted Research Papers by the User -->
        <div class="class13">
            <h2>
                Submitted Research Papers 
            </h2>

            <br>
            <br>

            <!-- Data from Database will be listed here -->
            <div id="papersubmittedbyuser">

            </div>
        </div>
    </div>
</div>

        <?php require 'footer.php'; ?>
    </body>
</html>