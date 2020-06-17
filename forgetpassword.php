<?php require_once("header.php");
    
    session_start();
    if(isset($_SESSION['userId'])){
        header("location: profile.php");
        exit();
    }
?>

        <section class="left" id="left">
            <div class="quotes">
            <form action="resetpwd.php" id="forgetpwd" method="post">
                    <fieldset>
                        <legend>
                            <h2>Forget Password</h2>
                        </legend>
                        <label for="email">Email Address</label>
                        <input type="email" class="textbox" name="email" id="email" required title="Please enter the email address" />
                        <br>
                        <br>
                        <button type="submit">Reset Password</button>
                        <a href="login.php">Login</a>
                    </fieldset>
                </form>
            </div>
        </section>
        
        <?php require_once("footer.php");?>