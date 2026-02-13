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

        <div class="main">
          <h2>
            Submit Your Research Papers 
          </h2>

          <form action="submit" method="post" target="_self" enctype="multipart/form-data">
            <label for="category">Choose Research Category:- </label>
            <br>
            <select id="category" name="category" required>
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
            require '../app/Models/submitpaper.php';
          ?>
        </div>
        <?php require 'footer.php'; ?>
    </body>
</html>
