<?php require_once("header.php");
    
    session_start();
    if(isset($_SESSION['userId'])){
        header("location: profile.php");
        exit();
    }
?>

        <section class="left" id="left">
            <div class="quotes">
            <form action="validatelogin.php" id="login" method="post">
                    <fieldset>
                        <legend>
                            <h2>Login</h2>
                        </legend>
                        <label for="email">Email Address</label>
                        <input type="email" class="textbox" name="email" id="email" required title="Please enter the email address" />
                        <br>
                        <br>
                        <label for="password">Password</label>
                        <input type="password" class="textbox" name="password" id="password" required title="Please enter the password"/>
                        <br>
                        <br>
                        <button type="submit">Login</button>
                        <a href="forgetpassword.php">Forget Password</a>
                    </fieldset>
                </form>
            </div>
        </section>
        
        <?php require_once("footer.php");?>