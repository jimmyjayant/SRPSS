<?php
require 'sessionstart.php';
?>

<?php
if(isset($_SESSION['username']))
{
   $none = 'style="display:none;"';   
}
else
{
   $none = NULL;
}
?>

<?php
require 'sessiontimeout.php';
?>

<?php 
 require 'headerandnavbar.php';
?>

        <div class="main">
            <h2>
                <?php
                if(isset($_SESSION['username']))
                {
                    echo "Feedback Form";
                }
                else
                {
                    echo "Contact Us";
                }
                ?>
            </h2>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" target="_self">
                <div <?php echo $none; ?>>
                <label for="name" >Name</label>
                <br>
                <input type="text" placeholder="Enter Your Name here" id="name" name="name" maxlength="50" required
                <?php 
                 if(isset($_SESSION['username']))
                 {
                    echo 'value="' . $_SESSION['username'] . " " . $_SESSION['username1'] . '"';
                 }
                ?>>

                <br>
                <br>
                </div>

                <label for="subject">Subject</label>
                <br>
                <input type="text" placeholder="Enter the Subject here" id="subject" name="subject" maxlength="100" required>

                <br>
                <br>

                <div <?php echo $none; ?>>
                <label for="mobile">Mobile Number</label>
                <br>
                <input type="tel" id="mobile" name="mobile" placeholder="+91-xxxxxxxxxx (Omit +91)" pattern="[0-9]{10}" required <?php 
                 if(isset($_SESSION['username']))
                 {
                    echo 'value="' . $_SESSION['mobno']. '"';
                 }
                ?>>

                <br>
                <br>
                
                <label for="email">Email</label>
                <br>
                <input type="email" placeholder="Enter your email here" id="email" name="email" validate required 
                <?php 
                 if(isset($_SESSION['username']))
                 {
                    echo 'value="' . $_SESSION['email']. '"';
                 }
                ?>>
                
                <br>
                <br>
                </div>

                <label for="message">Message</label>
                <br>
                <textarea id="message" name="message" rows="10" cols="50" required></textarea>

                <br>
                <br>
                
                <input type="submit" value="Submit" name="submit">

                <input type="reset" value="Reset">
            </form>

            <?php

                if(($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST["submit"]))) {
                    function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }


                    $name = test_input($_POST['name']);
                    $subject = test_input($_POST['subject']);
                    $mobile = test_input($_POST['mobile']);
                    $email = test_input($_POST['email']);
                    $message = test_input($_POST['message']);    
                    

                

                    // Connect to 'srpss' database and input necessary form information to 'feedback' table using MySQLi Object-Oriented method:- 

                    include('databaseconnection.php');

                    // sql to insert form data before checking if records already exists
                    $sql = "INSERT INTO feedback (fname, topic, contact, email, mess)
                    VALUES ('$name', '$subject', '$mobile', '$email', '$message')";


                    // Perform query
                    $result = $conn->query($sql);

                    if($result === TRUE) {
                        echo "<p style='color:green;'>Your feedback has been submitted.</p>";
                    }
                    else {
                        echo "<p style='color:red;'>Please enter UNIQUE feedback.</p>";
                    }

                    // Close the connection
                    $conn->close();
                }
            ?>
        </div>

        <?php require 'footer.php'; ?>
    </body>
</html>
