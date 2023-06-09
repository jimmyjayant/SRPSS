<!DOCTYPE html>
<html lang="en-in">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Jimmy Jayant">
        <meta name="keywords" content="science, research, papers, engineering, research paper">
        <meta name="description" content="Scientific Research Paper Submission System (SRPSS) online platform allows you to submit and view research papers">
        <link rel="stylesheet" href="style.css">
        <title>
            Scientific Research Paper Submission System (SRPSS) 
        </title> 
    </head>
    <body>
        <div class="header">
            <h1>
                Scientific Research Paper Submission System (SRPSS)  
            </h1>
        </div>

        <div class="navbar">
            <a href="home.php">Home</a>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
            <a href="researchsites.php">Research Sites</a>
            <a href="submit.php">Submit</a>
            <a href="view.php">View</a>
            <div class="dropdown">
              <a href="culture.php" class="dropbtn">Culture</a>
                 <div class="dropdown-content">
                    <a href="magazines.php">Magazines</a>
                    <a href="newspapers.php">Newspapers</a>
                    <a href="conferences.php">Conferences</a>
                    <a href="channel.php">Youtube Channel</a>
                    <a href="scientist.php">Scientist</a>
                    <a href="movies.php">Movies</a>
                 </div>
            </div>
        </div>

        <div class="main">
            <h2>
                Register Yourself 
            </h2>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self">
                <label for="firstname">First Name</label>
                <br>
                <input type="text" id="firstname" name="firstname" maxlength="100" placeholder="Enter Your First Name here" required>

                <br>
                <br>

                <label for="lastname">Last Name</label>
                <br>
                <input type="text" id="lastname" name="lastname"  maxlength="100" placeholder="Enter Your Last Name here" required>

                <br>
                <br>
                
                <legend>
                Gender
                </legend>
                <br>
                <input type="radio" name="gender" id="male" value="Male">
                <label for="male">Male</label>
                <br>
                <input type="radio" name="gender" id="female" value="Female">
                <label for="female">Female</label>

                <br>
                <br>

                <label for="date">Date of Birth</label>
                <br>
                <input type="date" id="date" name="date" required>

                <br>
                <br>

                <label for="address">Address</label>
                <br>
                <input type="text" id="address" name="address" maxlength="300" placeholder="Enter your address here" required>

                <br>
                <br>

                <label for="mobile">Mobile Number</label>
                <br>
                <input type="tel" id="mobile" name="mobile" placeholder="+91-xxxxxxxxxx (Omit +91)" pattern="[0-9]{10}" required>

                <br>
                <br>

                <label for="email">Email</label>
                <br>
                <input type="email" placeholder="Enter your email here" id="email" name="email" validate required>

                <br>
                <br>

                <label for="category">Choose Research Category:- </label>
                <br>
                <select id="category" name="category" required>
                    <option value="">Choose Your Research Category</option>
                    <option value="science">Science</option>
                    <option value="mathematics">Mathematics</option>
                    <option value="engineering">Engineering</option>
                </select>

                <br>
                <br>

                <label for="twitter">Twitter</label>
                <br>
                <input type="text" id="twitter" name="twitter" size="30" maxlength="100" placeholder="Enter your Twitter handle here">

                <br>
                <br>

                <label for="facebook">Facebook</label>
                <br>
                <input type="text" id="facebook" name="facebook" size="30" maxlength="100" placeholder="Enter your Facebook handle here">
                <br>
                <br>

                <label for="linkedin">LinkedIn</label>
                <br>
                <input type="text" id="linkedin" name="linkedin" size="30" maxlength="100" placeholder="Enter your LinkedIn handle here">

                <br>
                <br>

                <label for="password">Password</label>
                <br>
                <input type="password" id="password" name="password" size="30" maxlength="30" placeholder="Enter your password here">

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
                    $password = test_input($_POST['password']);    




                // Connect to 'srpss' database and input necessary form information to 'researchers' table using MySQLi Object-Oriented method:- 

                include('databaseconnection.php');

                $sql = "INSERT IGNORE INTO researchers (firstname, lastname, gender, dob, addr, contact, email, researchcategory, twitter, facebook, linkedin, pass)
                VALUES ('$firstname', '$lastname', '$gender', '$date', '$address', '$mobile', '$email', '$category', '$twitter', '$facebook', '$linkedin', '$password')";


                // Perform query
                $result = $conn->query($sql);

                if($result === TRUE) {
                    echo "<p style='color:green;'>Your are successfully registered.</p>";
                }
                else {
                    echo "<p style='color:red;'>Please enter UNIQUE registration details.</p>";
                }


                // Close the connection
                $conn->close();
            }
           ?>
        </div>

        <div class="footer">
            <div>
            <a href="">Privacy</a>
            <a href="">Terms of Use</a>
            <a href="">Trademarks</a>
            <a href="">&copy;SRPSS 2023</a>
            <a href="feedback.php">Feedback</a>
            </div>
            <div>
            <a href="https://www.facebook.com" target="_blank"><img src="Images/facebook.png" width="20" height="20" alt="Facebook Logo"></a>
            <a href="https://www.twitter.com" target="_blank"><img src="Images/twitter.png" width="20" height="20" alt="Twitter Logo"></a>
            <a href="https://www.instagram.com" target="_blank"><img src="Images/instagram.png" width="20" height="20" alt="Instagram Logo"></a>
            </div>
        </div>
    </body>
</html>

