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
            <div class="logo">
                <a href="home.php" alt=" Website Logo">
                  SRPSS 
                  <!--<img src="images/srpss.png" alt="SRPSS Logo">-->
                </a>
            </div>

            <div class="heading">
                <h1>
                  Scientific Research Paper Submission System (SRPSS)  
                </h1>
            </div>
            
            <div class="login">
                <img src="images/login user.png" alt="Logged In User">
                <div class="currentstatus">
                    <a href="login.php" alt="Login">Login</a>
                    <a href="register.php" alt="Register">Signup</a>
                </div>
            </div>
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
            Submit Your Research Papers 
          </h2>

          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" target="_self" enctype="multipart/form-data">
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

            <label for="papername">Research Paper Name</label>
            <br>
            <input type="text" id="papername" name="papername" maxlength="300" placeholder="Enter the paper name" required>

            <br>
            <br>

            <input type="file" name="upload" accept=".pdf" required>

            <br>
            <br>

            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
          </form>

          <?php
           

           if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_FILES['upload']['name'])) {
            $category = ($_POST['category']);
            $papername = test_input($_POST['papername']);

            if(isset($_FILES['upload']['name']))
            {
              $file_name = $_FILES['upload']['name'];
              $file_tmp = $_FILES['upload']['tmp_name'];

              move_uploaded_file($file_tmp,"./researchpapers/".$file_name);

              

              // Create connection using MySQLi Object-Oriented

                include('databaseconnection.php');

                $sql = "INSERT INTO researchpapers(category, topic, paper)
                      VALUES ('$category', '$papername', '$file_name')";

                $result = $conn->query($sql);
                
                if($result === TRUE)
                {
                    echo "<p style='color:green;'>Your research paper has been successfully submitted.</p>";
                }
                else 
                {
                    echo "<p style='color:red;'>Error submitting research paper.</p>";
                }
                
                // Close the connection
                $conn->close();

            }
           }
            
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
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