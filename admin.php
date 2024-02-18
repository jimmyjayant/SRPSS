<?php
require 'sessionstart.php';
?>

<?php
// Access Denied for Web page DIRECT ACCESS 
if(!isset($_SESSION['username']) || ($_SESSION['username'] !== "admin"))
{
    header("location: login.php");
    die();
}
?>

<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<?php 
require 'headerandnavbar.php';
?>

        <div class="main" id="adminbody">
            <div class="navbar1">
                <a href="#" onclick="adminnavbar1()">Research Sites</a>
                <a href="#" onclick="adminnavbar2()">Research Papers</a>
                <a href="#" onclick="adminnavbar3()">Magazines</a>
                <a href="#" onclick="adminnavbar4()">Newspapers</a>
                <a href="#" onclick="adminnavbar5()">Conference</a>
                <a href="#" onclick="adminnavbar6()">YouTube Channels</a>
                <a href="#" onclick="adminnavbar7()">Indian Scientists</a>
                <a href="#" onclick="adminnavbar8()">Indian Scientific Movies</a>
                <a href="#" onclick="adminnavbar9()">Indian Scientific Web Series</a>
                <a href="#" onclick="adminnavbar10()">Awards</a>
                <a href="#" onclick="adminnavbar11()">Observatories</a>
                <a href="#" onclick="adminnavbar12()">User Feedback</a>
                <a href="#" onclick="adminnavbar13()">Export MySQL Data to File</a>
                <a href="#" onclick="adminnavbar14()">User Notifications</a>
            </div>
            <div class="adminpanel">
                <h2>
                    Welcome to the Admin Panel 
                </h2>
                
                <!-- Research Sites -->
                <div class="class1" id="researchsitedata">
                <h2>
                    Research Sites Data 
                </h2>

                <br>
                <br>
                <!-- Data from Database will be listed here -->
                <div id="researchsites">
                
                </div>

                <br>
                <br>

                <h2>
                    Insert New Entry 
                </h2>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="institute">Name of Research Site:- </label>
                    <br>
                    <input type="text" id="institute" name="institute" maxlength="500" size="50" placeholder="Enter the new research site here" required>

                    <br>
                    <br>
                    <label for="location">Headquarter:- </label>
                    <br>
                    <input type="text" id="location" name="location" maxlength="100" size="30" placeholder="Enter the location here" required>

                    <br>
                    <br>
                    <input type="submit" name="submit-research-site" value="Submit">
                    <input type="reset" value="Reset">
                </form>

                <?php 
                    if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['submit-research-site'])))
                    {
                        $institute = test_input($_POST['institute']);
                        $location = test_input($_POST['location']);

                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');

                        $sql = "INSERT IGNORE INTO researchsites (sitename, headquarter)
                        VALUES ('$institute', '$location')";

                        // Perform query
                        $result = $conn->query($sql);

                        if($result === TRUE) {
                            echo "<p style='color:green;'>New researchsite inserted.</p>";
                        }
                        else {
                            echo "<p style='color:red;'>Please enter UNIQUE details.</p>";
                        }

                        // Close the connection
                        $conn->close();
                    }
                ?>

                <br>
                <br>

                <h2>
                    Delete Entry 
                </h2>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="delete">Delete Entry:- </label>
                    <br>
                    <input type="number" id="delete" name="delete" min="1" size="20" placeholder="Enter the entry number" required>

                    <br>
                    <br>
                    <input type="submit" name="delete-research-site" value="Delete">
                    <input type="reset" value="Reset">
                </form>

                <?php
                    if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['delete-research-site'])))
                    {
                        $delete = test_input($_POST['delete']);

                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');

                        $sql = "DELETE FROM researchsites
                        WHERE id='$delete'";

                        // Perform query
                        $result = $conn->query($sql);

                        if($result === TRUE) {
                            echo "<p style='color:green;'>No. " . $delete . " research site deleted.</p>";
                        }
                        else {
                            echo "<p style='color:red;'>Please enter UNIQUE number.</p>";
                        }

                        // Close the connection
                        $conn->close();
                    }
                ?>
                </div>

                <!-- View Submitted Papers -->
                <div class="class2" id="researchpaperdata">
                    <h2>
                        Research Paper Data 
                    </h2>

                    <br>
                    <br>
                    <!-- Data from Database will be listed here -->
                    <div id="viewpapersadmin">
                
                    </div>

                    <br>
                    <br>

                    <h2>
                        Delete Entry 
                    </h2>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="delete">Delete Entry:- </label>
                    <br>
                    <input type="number" id="delete" name="delete" min="1" size="20" placeholder="Enter the entry number" required>

                    <br>
                    <br>
                    <input type="submit" name="delete-research-paper" value="Delete">
                    <input type="reset" value="Reset">
                    </form>

                <?php
                    if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['delete-research-paper'])))
                    {
                        $delete = test_input($_POST['delete']);
        
                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');
        
                        $sql = "DELETE FROM researchpapers
                        WHERE id='$delete'";
        
                        // Perform query
                        $result = $conn->query($sql);
        
                        if($result === TRUE) {
                            echo "<p style='color:green;'>No. " . $delete . " research paper deleted.</p>";
                        }
                        else {
                            echo "<p style='color:red;'>Please enter UNIQUE number.</p>";
                        }

                        // Close the connection
                        $conn->close();
                    }
                ?>

                <br>
                <br>

                <h2>
                        Approve Entry 
                </h2>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="approve">Approve Entry:- </label>
                    <br>
                    <input type="number" id="approve" name="approve" min="1" size="20" placeholder="Enter the entry number" required>

                    <br>
                    <br>

                    <input type="submit" name="approve-research-paper" value="Approve">
                    <input type="reset" value="Reset">
                    </form>

                    <?php
                    if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['approve-research-paper'])))
                    {
                        $approve = test_input($_POST['approve']);
        
                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');
        
                        $sql = "UPDATE researchpapers
                        SET approved = 1 
                        WHERE id = $approve";
        
                        // Perform query
                        $result = $conn->query($sql);
        
                        if($result === TRUE) {
                            echo "<p style='color:green;'>No. " . $approve . " research paper approved.</p>";
                        }
                        else {
                            echo "<p style='color:red;'>Please enter UNIQUE number.</p>";
                        }

                        // Close the connection
                        $conn->close();
                    }
                ?>
                </div>

                <!-- Magazines -->
                <div class="class3" id="magazinedata">
                    <h2>
                        Magazines Data 
                    </h2>

                    <br>
                    <br>
                    <!-- Data from Database will be listed here -->
                    <div id="magazines">
                        
                    </div>

                    <br>
                    <br>

                    <h2>
                        Insert New Entry 
                    </h2>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="magname">Name of Magazine:- </label>
                    <br>
                    <input type="text" id="magname" name="magname" maxlength="500" size="50" placeholder="Enter the new magazine here" required>

                    <br>
                    <br>
                    <label for="publisher">Publisher:- </label>
                    <br>
                    <input type="text" id="publisher" name="publisher" maxlength="100" size="30" placeholder="Enter the publisher here" required>

                    <br>
                    <br>
                    <input type="submit" name="submit-magazine" value="Submit">
                    <input type="reset" value="Reset">
                </form>

                <?php
                    if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['submit-magazine'])))
                    {
                        $magname = test_input($_POST['magname']);
                        $publisher = test_input($_POST['publisher']);

                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');

                        $sql = "INSERT IGNORE INTO magazines (magazinename, publisher)
                        VALUES ('$magname', '$publisher')";

                        // Perform query
                        $result = $conn->query($sql);

                        if($result === TRUE) {
                            echo "<p style='color:green;'>New magazine inserted.</p>";
                        }
                        else {
                            echo "<p style='color:red;'>Please enter UNIQUE details.</p>";
                        }

                        // Close the connection
                        $conn->close();
                    }
                ?>

                <br>
                <br>

                <h2>
                    Delete Entry 
                </h2>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="delete">Delete Entry:- </label>
                    <br>
                    <input type="number" id="delete" name="delete" min="1" size="20" placeholder="Enter the entry number" required>

                    <br>
                    <br>
                    <input type="submit" name="delete-magazine" value="Delete">
                    <input type="reset" value="Reset">
                </form>

                <?php
                    if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['delete-magazine'])))
                    {
                        $delete = test_input($_POST['delete']);
        
                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');
        
                        $sql = "DELETE FROM magazines 
                        WHERE id='$delete'";
        
                        // Perform query
                        $result = $conn->query($sql);
        
                        if($result === TRUE) {
                            echo "<p style='color:green;'>No. " . $delete . " magazine deleted.</p>";
                        }
                        else {
                            echo "<p style='color:red;'>Please enter UNIQUE number.</p>";
                        }
        
                        // Close the connection
                        $conn->close();
                    }
                ?>
                </div>

                <!-- Newspapers -->
                <div class="class4" id="newspapersdata">
                    <h2>
                        Newspapers Data 
                    </h2>

                    <br>
                    <br>
                    <!-- Data from Database will be listed here -->
                    <div id="newspapers">
                        
                    </div>

                    <br>
                    <br>

                    <h2>
                        Insert New Entry 
                    </h2>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="newsname">Name of Newspaper:- </label>
                    <br>
                    <input type="text" id="newsname" name="newsname" maxlength="500" size="50" placeholder="Enter the new newspaper here" required>

                    <br>
                    <br>
                    <label for="url">URL:- </label>
                    <br>
                    <input type="text" id="url" name="url" maxlength="100" size="30" placeholder="Enter the URL here" required>

                    <br>
                    <br>
                    <input type="submit" name="submit-newspaper" value="Submit">
                    <input type="reset" value="Reset">
                    </form>

                    <?php
                    if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['submit-newspaper'])))
                    {
                        $newsname = test_input($_POST['newsname']);
                        $url = test_input($_POST['url']);
        
                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');
        
                        $sql = "INSERT IGNORE INTO newspapers (newspapername, link)
                        VALUES ('$newsname', '$url')";
        
                        // Perform query
                        $result = $conn->query($sql);
        
                        if($result === TRUE) {
                            echo "<p style='color:green;'>New newspaper inserted.</p>";
                        }
                        else {
                            echo "<p style='color:red;'>Please enter UNIQUE details.</p>";
                        }

                        // Close the connection
                        $conn->close();
                    }
                    ?> 

                <br>
                <br>

                <h2>
                    Delete Entry 
                </h2>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="delete">Delete Entry:- </label>
                    <br>
                    <input type="number" id="delete" name="delete" min="1" size="20" placeholder="Enter the entry number" required>

                    <br>
                    <br>
                    <input type="submit" name="delete-newspaper" value="Delete">
                    <input type="reset" value="Reset">
                </form>

                <?php
                        if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['delete-newspaper'])))
                        {
                        $delete = test_input($_POST['delete']);
        
                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');
        
                        $sql = "DELETE FROM newspapers  
                        WHERE id='$delete'";
        
                        // Perform query
                        $result = $conn->query($sql);
        
                        if($result === TRUE) {
                            echo "<p style='color:green;'>No. " . $delete . " newspaper deleted.</p>";
                        }
                        else {
                            echo "<p style='color:red;'>Please enter UNIQUE number.</p>";
                        }
        
                        // Close the connection
                        $conn->close();
                        }
                ?>
                </div>

                <!-- Conferences -->
                <div class="class5" id="conferencedata">
                    <h2>
                        Conferences Data 
                    </h2>

                    <br>
                    <br>
                    <!-- Data from Database will be listed here -->
                    <div id="conferences">
                        
                    </div>

                    <br>
                    <br>

                    <h2>
                        Insert New Entry 
                    </h2>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="confname">Name of Conference:- </label>
                    <br>
                    <input type="text" id="confname" name="confname" maxlength="1000" size="50" placeholder="Enter the new conference here" required>

                    <br>
                    <br>
                    <input type="submit" name="submit-conference" value="Submit">
                    <input type="reset" value="Reset">
                    </form>

                    <?php
                        if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['submit-conference'])))
                        {
                        $confname = test_input($_POST['confname']);

                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');

                        $sql = "INSERT IGNORE INTO conferences (conferencename)
                        VALUES ('$confname')";

                        // Perform query
                        $result = $conn->query($sql);

                        if($result === TRUE) {
                            echo "<p style='color:green;'>New conference inserted.</p>";
                        }
                        else {
                            echo "<p style='color:red;'>Please enter UNIQUE details.</p>";
                        }

                        // Close the connection
                        $conn->close();
                        }
                    ?>

                <br>
                <br>

                <h2>
                    Delete Entry 
                </h2>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="delete">Delete Entry:- </label>
                    <br>
                    <input type="number" id="delete" name="delete" min="1" size="20" placeholder="Enter the entry number" required>

                    <br>
                    <br>
                    <input type="submit" name="delete-conference" value="Delete">
                    <input type="reset" value="Reset">
                </form>

                <?php
                        if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['delete-conference'])))
                        {
                            $delete = test_input($_POST['delete']);

                            // Connect to 'srpss' database and enter necessary information
                            include('databaseconnection.php');

                            $sql = "DELETE FROM conferences   
                            WHERE id='$delete'";

                            // Perform query
                            $result = $conn->query($sql);

                            if($result === TRUE) {
                                echo "<p style='color:green;'>No. " . $delete . " conference deleted.</p>";
                            }
                            else {
                                echo "<p style='color:red;'>Please enter UNIQUE number.</p>";
                            }

                            // Close the connection
                            $conn->close();
                        }
                ?>
                </div>

                <!-- Channels -->
                <div class="class6" id="youtubechannelsdata">
                    <h2>
                        YouTube Channels Data 
                    </h2>

                    <br>
                    <br>
                    <!-- Data from Database will be listed here -->
                    <div id="ytchannels">
                        
                    </div>

                    <br>
                    <br>

                    <h2>
                        Insert New Entry 
                    </h2>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="channelname">Name of YouTube Channel:- </label>
                    <br>
                    <input type="text" id="channelname" name="channelname" maxlength="100" size="30" placeholder="Enter the new YouTube Channel here" required>

                    <br>
                    <br>
                    <input type="submit" name="submit-channel" value="Submit">
                    <input type="reset" value="Reset">
                    </form>

                    <?php
                        if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['submit-channel'])))
                        {
                            $channelname = test_input($_POST['channelname']);
            
                            // Connect to 'srpss' database and enter necessary information
                            include('databaseconnection.php');
            
                            $sql = "INSERT IGNORE INTO ytchannels (channelname)
                            VALUES ('$channelname')";
            
                            // Perform query
                            $result = $conn->query($sql);
            
                            if($result === TRUE) {
                                echo "<p style='color:green;'>New YouTube Channel inserted.</p>";
                            }
                            else {
                                echo "<p style='color:red;'>Please enter UNIQUE details.</p>";
                            }

                            // Close the connection
                            $conn->close();
                        }
                    ?>

                <br>
                <br>

                <h2>
                    Delete Entry 
                </h2>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="delete">Delete Entry:- </label>
                    <br>
                    <input type="number" id="delete" name="delete" min="1" size="20" placeholder="Enter the entry number" required>

                    <br>
                    <br>
                    <input type="submit" name="delete-channel" value="Delete">
                    <input type="reset" value="Reset">
                </form>

                <?php
                        if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['delete-channel'])))
                        {
                            $delete = test_input($_POST['delete']);
            
                            // Connect to 'srpss' database and enter necessary information
                            include('databaseconnection.php');
            
                            $sql = "DELETE FROM ytchannels    
                            WHERE id='$delete'";
            
                            // Perform query
                            $result = $conn->query($sql);
            
                            if($result === TRUE) {
                                echo "<p style='color:green;'>No. " . $delete . " YouTube Channel deleted.</p>";
                            }
                            else {
                                echo "<p style='color:red;'>Please enter UNIQUE number.</p>";
                            }

                            // Close the connection
                            $conn->close();
                        }
                ?>
                </div>

                <!-- Scientists -->
                <div class="class7" id="indianscientistdata">
                    <h2>
                        Indian Scientists Data 
                    </h2>

                    <br>
                    <br>
                    <!-- Data from Database will be listed here -->
                    <div id="scientists">
                        
                    </div>

                    <br>
                    <br>

                    <h2>
                        Insert New Entry 
                    </h2>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="scientistname">Name of Scientist:- </label>
                    <br>
                    <input type="text" id="scientistname" name="scientistname" maxlength="100" size="30" placeholder="Enter the new Scientist here" required>

                    <br>
                    <br>
                    <input type="submit" name="submit-scientist-name" value="Submit">
                    <input type="reset" value="Reset">
                    </form>

                    <?php
                        if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['submit-scientist-name'])))
                        {
                        $scientistname = test_input($_POST['scientistname']);

                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');

                        $sql = "INSERT IGNORE INTO scientists (scientistname)
                        VALUES ('$scientistname')";

                        // Perform query
                        $result = $conn->query($sql);

                        if($result === TRUE) {
                            echo "<p style='color:green;'>New Scientist inserted.</p>";
                        }
                        else {
                            echo "<p style='color:red;'>Please enter UNIQUE details.</p>";
                        }

                        // Close the connection
                        $conn->close();
                        }
                    ?>

                <br>
                <br>

                <h2>
                    Delete Entry 
                </h2>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="delete">Delete Entry:- </label>
                    <br>
                    <input type="number" id="delete" name="delete" min="1" size="20" placeholder="Enter the entry number" required>

                    <br>
                    <br>
                    <input type="submit" name="delete-scientist-name" value="Delete">
                    <input type="reset" value="Reset">
                </form>

                <?php
                        if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['delete-scientist-name'])))
                        {
                            $delete = test_input($_POST['delete']);

                            // Connect to 'srpss' database and enter necessary information
                            include('databaseconnection.php');

                            $sql = "DELETE FROM scientists     
                            WHERE id='$delete'";

                            // Perform query
                            $result = $conn->query($sql);

                            if($result === TRUE) {
                                echo "<p style='color:green;'>No. " . $delete . " Scientist Name deleted.</p>";
                            }
                            else {
                                echo "<p style='color:red;'>Please enter UNIQUE number.</p>";
                            }

                            // Close the connection
                            $conn->close();
                        }
                ?>
                </div>

                <!-- Movies -->
                <div class="class8" id="indianscientificmoviesdata">
                    <h2>
                        Indian Scientific Movies Data 
                    </h2>

                    <br>
                    <br>
                    <!-- Data from Database will be listed here -->
                    <div id="movies">
                        
                    </div>

                    <br>
                    <br>

                    <h2>
                        Insert New Entry 
                    </h2>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="moviename">Name of Movie:- </label>
                    <br>
                    <input type="text" id="moviename" name="moviename" maxlength="100" size="30" placeholder="Enter the new Movie here" required>

                    <br>
                    <br>
                    <input type="submit" name="submit-movies" value="Submit">
                    <input type="reset" value="Reset">
                    </form>

                    <?php
                        if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['submit-movies'])))
                        {
                            
                            $moviename = test_input($_POST['moviename']);

                            // Connect to 'srpss' database and enter necessary information
                            include('databaseconnection.php');

                            $sql = "INSERT IGNORE INTO movies (moviename)
                            VALUES ('$moviename')";

                            // Perform query
                            $result = $conn->query($sql);

                            if($result === TRUE) {
                                echo "<p style='color:green;'>New Movie inserted.</p>";
                            }
                            else {
                                echo "<p style='color:red;'>Please enter UNIQUE details.</p>";
                            }


                            // Close the connection
                            $conn->close();
                        }
                    ?>

                <br>
                <br>

                <h2>
                    Delete Entry 
                </h2>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="delete">Delete Entry:- </label>
                    <br>
                    <input type="number" id="delete" name="delete" min="1" size="20" placeholder="Enter the entry number" required>

                    <br>
                    <br>
                    <input type="submit" name="delete-movies" value="Delete">
                    <input type="reset" value="Reset">
                </form>

                <?php
                    if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['delete-movies'])))
                    {
                        
                        $delete = test_input($_POST['delete']);

                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');

                        $sql = "DELETE FROM movies      
                        WHERE id='$delete'";

                        // Perform query
                        $result = $conn->query($sql);

                        if($result === TRUE) {
                            echo "<p style='color:green;'>No. " . $delete . " Movie deleted.</p>";
                        }
                        else {
                            echo "<p style='color:red;'>Please enter UNIQUE number.</p>";
                        }


                        // Close the connection
                        $conn->close();

                    }
                ?>
                </div>

                <!-- Web Series -->
                <div class="class9" id="indianscientificwebseriesdata">
                    <h2>
                        Indian Scientific Web Series Data 
                    </h2>

                    <br>
                    <br>
                    <!-- Data from Database will be listed here -->
                    <div id="webseries">
                        
                    </div>

                    <br>
                    <br>

                    <h2>
                        Insert New Entry 
                    </h2>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="webseriesname">Name of Web Series:- </label>
                    <br>
                    <input type="text" id="webseriesname" name="webseriesname" maxlength="100" size="30" placeholder="Enter the new Web Series here" required>

                    <br>
                    <br>
                    <input type="submit" name="submit-webseries" value="Submit">
                    <input type="reset" value="Reset">
                    </form>

                    <?php
                        if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['submit-webseries'])))
                        {
                        $webseriesname = test_input($_POST['webseriesname']);

                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');

                        $sql = "INSERT IGNORE INTO webseries (webseriesname)
                        VALUES ('$webseriesname')";

                        // Perform query
                        $result = $conn->query($sql);

                        if($result === TRUE) {
                            echo "<p style='color:green;'>New Web Series inserted.</p>";
                        }
                        else {
                            echo "<p style='color:red;'>Please enter UNIQUE details.</p>";
                        }

                        // Close the connection
                        $conn->close();
                        }
                    ?>

                <br>
                <br>

                <h2>
                    Delete Entry 
                </h2>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="delete">Delete Entry:- </label>
                    <br>
                    <input type="number" id="delete" name="delete" min="1" size="20" placeholder="Enter the entry number" required>

                    <br>
                    <br>
                    <input type="submit" name="delete-webseries" value="Delete">
                    <input type="reset" value="Reset">
                </form>

                <?php
                        if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['delete-webseries'])))
                        {
                        $delete = test_input($_POST['delete']);

                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');

                        $sql = "DELETE FROM webseries      
                        WHERE id='$delete'";

                        // Perform query
                        $result = $conn->query($sql);

                        if($result === TRUE) {
                            echo "<p style='color:green;'>No. " . $delete . " Webseries deleted.</p>";
                        }
                        else {
                            echo "<p style='color:red;'>Please enter UNIQUE number.</p>";
                        }

                        // Close the connection
                        $conn->close();

                        }
                ?>
                </div>

                <!-- Awards -->
                <div class="class10" id="indianscientificawardsdata">
                <h2>
                        Indian Scientific Awards Data 
                    </h2>

                    <br>
                    <br>
                    <!-- Data from Database will be listed here -->
                    <div id="awards">
                        
                    </div>

                    <br>
                    <br>

                    <h2>
                        Insert New Entry 
                    </h2>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="awardname">Name of Award:- </label>
                    <br>
                    <input type="text" id="awardname" name="awardname" maxlength="100" size="30" placeholder="Enter the new Award here" required>

                    <br>
                    <br>
                    <input type="submit" name="submit-award" value="Submit">
                    <input type="reset" value="Reset">
                    </form>

                    <?php
                        if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['submit-award'])))
                        {
                        $awardname = test_input($_POST['awardname']);

                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');

                        $sql = "INSERT IGNORE INTO awards (awardsname)
                        VALUES ('$awardname')";

                        // Perform query
                        $result = $conn->query($sql);

                        if($result === TRUE) {
                            echo "<p style='color:green;'>New Award inserted.</p>";
                        }
                        else {
                            echo "<p style='color:red;'>Please enter UNIQUE details.</p>";
                        }

                        // Close the connection
                        $conn->close();
                        }
                    ?>

                <br>
                <br>

                <h2>
                    Delete Entry 
                </h2>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="deleteaward">Delete Award:- </label>
                    <br>
                    <input type="number" id="deleteaward" name="deleteaward" min="1" size="20" placeholder="Enter the entry number" required>

                    <br>
                    <br>
                    <input type="submit" name="delete-award" value="Delete">
                    <input type="reset" value="Reset">
                </form>

                <?php
                        if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['delete-award'])))
                        {
                        $deleteaward = test_input($_POST['deleteaward']);

                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');

                        $sql = "DELETE FROM awards      
                        WHERE id='$deleteaward'";

                        // Perform query
                        $result = $conn->query($sql);

                        if($result === TRUE) {
                            echo "<p style='color:green;'>No. " . $deleteaward . " Award deleted.</p>";
                        }
                        else {
                            echo "<p style='color:red;'>Please enter UNIQUE number.</p>";
                        }

                        // Close the connection
                        $conn->close();

                        }
                ?>
                </div>

                <!-- Observatories -->
                <div class="class11" id="indianscientificobservatoriesdata">
                <h2>
                        Indian Scientific Observatories Data 
                    </h2>

                    <br>
                    <br>
                    <!-- Data from Database will be listed here -->
                    <div id="observatory">
                        
                    </div>

                    <br>
                    <br>

                    <h2>
                        Insert New Entry 
                    </h2>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="observatoryname">Name of Observatory:- </label>
                    <br>
                    <input type="text" id="observatoryname" name="observatoryname" maxlength="100" size="30" placeholder="Enter the new Observatory here" required>

                    <br>
                    <br>
                    <input type="submit" name="submit-observatory" value="Submit">
                    <input type="reset" value="Reset">
                    </form>

                    <?php
                        if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['submit-observatory'])))
                        {
                        $observatoryname = test_input($_POST['observatoryname']);

                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');

                        $sql = "INSERT IGNORE INTO observatory (observatoryname)
                        VALUES ('$observatoryname')";

                        // Perform query
                        $result = $conn->query($sql);

                        if($result === TRUE) {
                            echo "<p style='color:green;'>New Observatory inserted.</p>";
                        }
                        else {
                            echo "<p style='color:red;'>Please enter UNIQUE details.</p>";
                        }

                        // Close the connection
                        $conn->close();
                        }
                    ?>

                <br>
                <br>

                <h2>
                    Delete Entry 
                </h2>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="deleteobservatory">Delete Entry:- </label>
                    <br>
                    <input type="number" id="deleteobservatory" name="deleteobservatory" min="1" size="20" placeholder="Enter the entry number" required>

                    <br>
                    <br>
                    <input type="submit" name="delete-observatory" value="Delete">
                    <input type="reset" value="Reset">
                </form>

                <?php
                        if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['delete-observatory'])))
                        {
                        $deleteobservatory = test_input($_POST['deleteobservatory']);

                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');

                        $sql = "DELETE FROM observatory      
                        WHERE id='$deleteobservatory'";

                        // Perform query
                        $result = $conn->query($sql);

                        if($result === TRUE) {
                            echo "<p style='color:green;'>No. " . $deleteobservatory . " Observatory deleted.</p>";
                        }
                        else {
                            echo "<p style='color:red;'>Please enter UNIQUE number.</p>";
                        }

                        // Close the connection
                        $conn->close();

                        }
                ?>
                </div>

                <!-- Feedback -->
                <div class="class12" id="userfeedbackdata">
                    <h2>
                        User Feedback Data 
                    </h2>

                    <br>
                    <br>
                    <!-- Data from Database will be listed here -->
                    <div id="feedback">
                        
                    </div>

                    <br>
                    <br>

                    <h2>
                        Approve Feedback  
                    </h2>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="approvefeedbacknum">Approve Entry:- </label>
                    <br>
                    <input type="number" id="approvefeedbacknum" name="approvefeedbacknum" min="1" size="30" placeholder="Enter the Feedback No." required>

                    <br>
                    <br>
                    <input type="submit" name="submit-feedback" value="Approve">
                    <input type="reset" value="Reset">
                    </form>

                    <?php
                        if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['submit-feedback'])))
                        {
                        $approvefeedbacknum = test_input($_POST['approvefeedbacknum']);

                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');
                        
                        $sql = "SELECT id FROM feedback";
                        $result = $conn->query($sql);

                        // Error Variable 
                        $res = 2;

                        while($row = $result->fetch_assoc())
                        {
                            if($approvefeedbacknum == $row['id'])
                            {
                                $sql1 = "UPDATE feedback SET approved = 1 WHERE id = $approvefeedbacknum";
                                $result1 = $conn->query($sql1);
                
                                if($result1 === TRUE) {
                                    echo "<p style='color:green;'>No. " . $approvefeedbacknum . " Feedback approved.</p>";
                                    $res = 0;
                                }
                                else {
                                    echo "<p style='color:red;'>Error Approving Feedback.</p>";
                                    $res = 1;
                                }
                            }
                        }
                        
                        if($res != 0 && $res != 1)
                            {
                                echo "<p style='color:red;>Please enter correct Feedback Number.</p>";
                            }

                        $result->free_result();
                        //$result1->free_result();

                        // Close the connection
                        $conn->close();
                        }
                    ?>

                <br>
                <br>

                <h2>
                    Reject Feedback  
                </h2>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <label for="rejfeedbacknum">Delete Entry:- </label>
                    <br>
                    <input type="number" id="rejfeedbacknum" name="rejfeedbacknum" min="1" size="50" placeholder="Enter the Feedback No." required>

                    <br>
                    <br>
                    <input type="submit" name="delete-feedback" value="Reject">
                    <input type="reset" value="Reset">
                </form>

                <?php
                        if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['delete-feedback'])))
                        {
                        $rejfeedbacknum = test_input($_POST['rejfeedbacknum']);

                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');

                        $sql = "SELECT id FROM feedback";

                        // Perform query
                        $result = $conn->query($sql);

                        // Error Variable 
                        $res1 = 2;

                        while($row = $result->fetch_assoc())
                        {
                            if($rejfeedbacknum == $row['id'])
                            {
                                $sql1 = "UPDATE feedback SET approved = -1 WHERE id = $rejfeedbacknum";
                                $result1 = $conn->query($sql1);
                
                                if($result1 === TRUE) {
                                    echo "<p style='color:green;'>No. " . $rejfeedbacknum . " Feedback rejected.</p>";
                                    $res1 = 0;
                                }
                                else {
                                    echo "<p style='color:red;'>Error Rejecting Feedback.</p>";
                                    $res1 = 1;
                                }
                            }
                        }
                        
                        if($res1 != 0 && $res1 != 1)
                            {
                                echo "<p style='color:red;>Please enter correct Feedback Number.</p>";
                            }

                        $result->free_result();
                        //$result1->free_result();

                       

                        // Close the connection
                        $conn->close();

                        }
                ?>
                </div>

                <!-- Export MySQL Data to 'srpss.sql' File-->
                <div class="class13" id="exportmysqltofile">
                    <h2>
                    Export MySQL Data to File 
                    </h2>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                    <input type="submit" name="export-mysqldata" value="Export">
                    </form>

                    <?php
                        if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['export-mysqldata'])))
                        {

                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');

                        // Path to sql file in which mysql database is exported
                        $file = 'srpss.sql';

                        // Get the list of tables
                        $result = $conn->query("SHOW TABLES");
                        $tables = [];
                        while($row = $result->fetch_row())
                        {
                            $tables[] = $row[0];
                        }

                        // Create SQL file or open it if it already exists
                        $handle = fopen($file, "w");

                        if($handle === false)
                        {
                            die("Error opening output file.");
                        }

                        // Iterate through tables and export structure and data
                        foreach($tables as $table)
                        {
                            // Structure
                            $structure = $conn->query("SHOW CREATE TABLE $table");
                            if($structure === false)
                            {
                                die("Error getting structure for table $table: " . $conn->error);
                            }
                            $createTableSQL = $structure->fetch_row()[1];
                            fwrite($handle, "$createTableSQL;\n");

                            // Data
                            $data = $conn->query("SELECT * FROM $table");
                            if($data === false)
                            {
                                die("Error getting data for table $table: " . $conn->error);
                            }
                            while($row = $data->fetch_assoc())
                            {
                                $values = implode("', '", array_map([$conn, 'real_escape_string'], $row));
                                fwrite($handle, "INSERT INTO $table VALUES ('$values');\n");
                            }
                        }

                        fclose($handle);
                        

                        // Close the connection
                        $conn->close();

                        echo "<p style='color:green'>Export Successful to srpss.sql file!</p>";

                        }
                    ?>

                </div>

                <!-- User Notifications -->
                <div class="class14" id="usernotificationadminpanel">
                  <h2>
                    User Notifications 
                  </h2>

                  <p>
                    Please select an individual user or multiple users from the dropdown below or select the checkbox to select all users:- 
                  </p>

                  <?php
                    // define Error messages variables and set to empty values
                    $textareaErr = "";
                    $selectedUsersErr = "";

                    // define user notification send status message
                    $sendmessage = "";
                    
                    if(($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['sendnotification'])))
                    {
                      if(empty($_POST['allregisteredusers']) && empty($_POST['selectallusers']))
                      {
                        $selectedUsersErr = "No User Selected. Please select users through Dropdown or Checkbox.";
                      }
                      else if(!empty($_POST['allregisteredusers']) && !empty($_POST['selectallusers']))
                      {
                        $selectedUsersErr = "You cannot select BOTH Dropdown and Checkbox. Please select one."; 
                      }
                      
                      else if(($_POST['notificationmessage']) == "")
                      {
                        $textareaErr = "Please provide notification message.";
                      }
                      
                      else if(!empty($_POST['allregisteredusers']))
                      {
                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');

                        $usernotification = test_input($_POST['notificationmessage']);

                        $usrs = ($_POST['allregisteredusers']);
                        foreach($usrs as $key => $value)
                        {
                            // store query in a variable
                            $sql = "SELECT firstname, lastname FROM researchers WHERE email='$value'";

                            // perform query and store result in a variable
                            $result = $conn->query($sql);

                            if($result->num_rows > 0)
                            {
                                while($row = $result->fetch_assoc())
                                {
                                    // store query in a variable
                                    $sql3 = "INSERT INTO usernotif (firstname, lastname, email, usrnotification)
                                             VALUES ('{$row['firstname']}', '{$row['lastname']}', '$value', '$usernotification')";

                                    // perform query and store the result in a variable
                                    $result2 = $conn->query($sql3);

                                    /*
                                    if($result2 === TRUE)
                                    {

                                    }
                                    */
                                    
                                }
                            }
                        }
                        $sendmessage = "Users Notifications Send Successfully.";
                      }

                      else if(!empty($_POST['selectallusers']))
                      {
                        // Connect to 'srpss' database and enter necessary information
                        include('databaseconnection.php');

                        $usernotification = test_input($_POST['notificationmessage']);

                        // store query in a variable
                        $sql4 = "SELECT firstname, lastname, email FROM researchers";

                        // perform query and store the result in a variable
                        $result4 = $conn->query($sql4);

                        if($result4->num_rows > 0)
                        {
                            while($row = $result4->fetch_assoc())
                            {
                              // skip the admin
                              if($row['firstname'] == "admin")
                              continue;
                              // store query in a variable
                              $sql5 = "INSERT INTO usernotif (firstname, lastname, email, usrnotification)
                                       VALUES ('{$row['firstname']}', '{$row['lastname']}', '{$row['email']}', '$usernotification')";

                              // perform query and store result in a variable
                              $result5 = $conn->query($sql5);
                            }
                        }
                        $sendmessage = "Users Notifications Send Successfully.";
                      }
                    }
                  ?>
                  

                  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" target="_self">
                    <label for="allregisteredusers">
                      Dropdown menu containing all registered users:- 
                      <br>
                      [Hold down the Ctrl(Windows)/Command(Mac) for multiple selection]
                    </label>

                    <br>
                    <br>

                    <select id="allregisteredusers" name="allregisteredusers[]" multiple></select>

                    <br>
                    <br>

                    <label>OR</label>

                    <br>
                    <br>

                    <label for="selectallusers">Select All</label>
                    <br>
                    <input type="checkbox" id="selectallusers" name="selectallusers" value="allusers">
                    <br>
                    <span style='color:red'><?php echo $selectedUsersErr; ?></span>

                    <br>
                    <br>

                    <textarea name="notificationmessage" id="notificationmessage" rows="10" cols="50"></textarea>
                    <br>
                    <span style='color:red'><?php echo $textareaErr; ?></span>
                    <br>
                    <br>

                    <input type="submit" name="sendnotification" value="Send" id="sendnotification">
                    <input type="reset" name="resetnotificationform" value="Reset" id="resetnotificationform">
                    <br>
                    <p style='color:green;'><?php echo $sendmessage; ?></p>
                  </form>

                </div>
            </div>
        </div>

        <?php require 'footer.php'; ?>
    </body>
</html>