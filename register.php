<?php
require 'sessionstart.php';
?>

<?php
    if(($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST["submit"]))) {

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $firstname = test_input($_POST['firstname']);
        $lastname = test_input($_POST['lastname']);
        $gender = test_input($_POST['gender']);
        $date = test_input($_POST['date']);
        $address = test_input($_POST['address']);
        $mobile = test_input($_POST['mobile']);
        $email = test_input($_POST['email']);
        $category = test_input($_POST['category']);
        $twitter = test_input($_POST['twitter']);
        $facebook = test_input($_POST['facebook']);
        $linkedin = test_input($_POST['linkedin']);
        $user_password = test_input($_POST['password']);

        // converting the entered password into a password hash
        $hashedpassword = password_hash($user_password, PASSWORD_DEFAULT);

        // Connect to 'srpss' database and input necessary form information to 'researchers' table using MySQLi Object-Oriented method:- 

        require('databaseconnection.php');
        
        $sql = "INSERT IGNORE INTO researchers (firstname, lastname, gender, dob, addr, contact, email, researchcategory, twitter, facebook, linkedin, pass)
        VALUES ('$firstname', '$lastname', '$gender', '$date', '$address', '$mobile', '$email', '$category', '$twitter', '$facebook', '$linkedin', '$hashedpassword')";

        // Perform query
        $result = $conn->query($sql);

        if($result === TRUE) {
            // Close the connection
            $conn->close();
            header("Location: login.php", true, 301);
            exit();
        }
        else {
            // Close the connection
            $conn->close();

            $regerror = "<p style='color:red;'>Please enter UNIQUE registration details.</p>";
        }
    }
?>

<?php 
require 'headerandnavbar.php';
?>

        <div class="main">
            <h2>
                Register Yourself 
            </h2>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                <div class="row">
                    <div class="col25">
                        <label for="firstname">First Name</label>
                    </div>
                    <div class="col75">
                        <input type="text" id="firstname" name="firstname" maxlength="100" placeholder="Enter Your First Name here" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col25">
                        <label for="lastname">Last Name</label>
                    </div>
                    <div class="col75">
                        <input type="text" id="lastname" name="lastname"  maxlength="100" placeholder="Enter Your Last Name here" required>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col25" style="padding:1rem 0;">
                        <label>Gender</label>
                    </div>
                    <div class="col75">
                        <input type="radio" name="gender" id="male" value="Male">
                        <label for="male">Male</label>
                        <br>
                        <input type="radio" name="gender" id="female" value="Female">
                        <label for="female">Female</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col25">
                        <label for="date">Date of Birth</label>
                    </div>
                    <div class="col75">
                        <input type="date" id="date" name="date" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col25">
                        <label for="address">Address</label>
                    </div>
                    <div class="col75">
                        <input type="text" id="address" name="address" maxlength="300" placeholder="Enter your address here" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col25">
                        <label for="mobile">Mobile Number</label>
                    </div>
                    <div class="col75">
                        <input type="tel" id="mobile" name="mobile" placeholder="+91-xxxxxxxxxx (Omit +91)" pattern="[0-9]{10}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col25">
                        <label for="email">Email</label>
                    </div>
                    <div class="col75">
                        <input type="email" placeholder="Enter your email here" id="email" name="email" validate required>
                    </div>
                </div>

                <div class="row">
                    <div class="col25" style="padding:0;">
                        <label for="category">Choose Research Category:- </label>
                    </div>
                    <div class="col75">
                        <select id="category" name="category" required>
                            <option value="">Choose Your Research Category</option>
                            <option value="science">Science</option>
                            <option value="mathematics">Mathematics</option>
                            <option value="engineering">Engineering</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col25">
                        <label for="twitter">Twitter</label>
                    </div>
                    <div class="col75">
                        <input type="text" id="twitter" name="twitter" size="30" maxlength="100" placeholder="Enter your Twitter handle here">
                    </div>
                </div>

                <div class="row">
                    <div class="col25">
                        <label for="facebook">Facebook</label>
                    </div>
                    <div class="col75">
                        <input type="text" id="facebook" name="facebook" size="30" maxlength="100" placeholder="Enter your Facebook handle here">
                    </div>
                </div>

                <div class="row">
                    <div class="col25">
                        <label for="linkedin">LinkedIn</label>
                    </div>
                    <div class="col75">
                        <input type="text" id="linkedin" name="linkedin" size="30" maxlength="100" placeholder="Enter your LinkedIn handle here">
                    </div>
                </div>

                <div class="row">
                    <div class="col25">
                        <label for="password">Password</label>
                    </div>
                    <div class="col75">
                        <input type="password" id="password" name="password" size="30" maxlength="30" placeholder="Enter your password here" required>
                    </div>
                </div>

                <input type="submit" value="Submit" name="submit">
                <input type="reset" value="Reset">
            </form>

            <?php
                if(isset($regerror))
                {
                    echo $regerror;
                    $regerror = NULL;
                }
            ?>

        </div>

        <?php require 'footer.php'; ?>
    </body>
</html>

