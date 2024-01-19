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
            $loggeduser = $_SESSION['username'];

            if(isset($_FILES['upload']['name']))
            {
              $file_name = $_FILES['upload']['name'];
              $file_tmp = $_FILES['upload']['tmp_name'];

              move_uploaded_file($file_tmp,"./researchpapers/".$file_name);

              

              // Create connection using MySQLi Object-Oriented

                include('databaseconnection.php');

                $sql = "INSERT INTO researchpapers(loggeduser, category, topic, paper)
                      VALUES ('$loggeduser', '$category', '$papername', '$file_name')";

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

        <?php require 'footer.php'; ?>
    </body>
</html>