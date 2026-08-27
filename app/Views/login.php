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
        $_SESSION['login_error'] = $e->getMessage();
    }

    // Access Denied for Web page DIRECT ACCESS 
    if(isset($_SESSION['username']))
    {
        header("location: index");
        exit();
    }

    if(isset($_SESSION['error']))
    {
        $_SESSION['login_error'] = $_SESSION['error'];
        $_SESSION['error'] = NULL;
    }

    // Check if can login again
    if(isset($_SESSION['attempt_again']))
    {
        $now = time();
        if($now >= $_SESSION['attempt_again'])
        {
            $_SESSION['attempt'] = NULL;
            $_SESSION['attempt_again'] = NULL;
        }
    }
 
    $css = ["css/index.css", "css/headerandnavbar.css", "css/form.css", "css/footer.css"];

    require 'headerandnavbar.php';
?>

    <div class="main">
        <h2>Log In</h2>

        <?php
            if(isset($_SESSION['login_error']))
            {
                echo "<div class='center'><span class='red_font'>" . $_SESSION['login_error'] . "</span></div>";
                $_SESSION['login_error'] = NULL;
            }
        ?>

        <form action="getuserlogindata" method="post" target="_self">
            <div class="row">
                <div class="col25">
                    <label for="email">Email</label>
                </div>
                <div class="col75">
                    <input type="email" id="email" name="email" placeholder="Enter your email here" validate required>
                </div>
            </div>

            <div class="row">
                <?php
                    if(isset($_SESSION['email_error']))
                    {
                        echo "<div><span class='red_font'>" . $_SESSION['email_error'] . "</span></div>";
                        $_SESSION['email_error'] = NULL;
                    }
                ?>
            </div>

            <div class="row">
                <div class="col25">
                    <label for="password">Password</label>
                </div>
                <div class="col75">
                    <input type="password" id="password" name="password" placeholder="Enter your password here" 
                    minlength="6" maxlength="12" required>
                </div>
            </div>

            <div class="row">
                <?php
                    if(isset($_SESSION['pass_error']))
                    {
                        echo "<div><span class='red_font'>" . $_SESSION['pass_error'] . "</span></div>";
                        $_SESSION['pass_error'] = NULL;
                    }
                ?>
            </div>

            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">

            <input type="submit" value="Submit" name="login_submit">
            <input type="reset" value="Reset">
        </form>
    </div>

        <?php require 'footer.php'; ?>
    </body>
</html>
