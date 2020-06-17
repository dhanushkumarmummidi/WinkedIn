<?php 
    require_once("header.php");
    session_start();
    if(isset($_SESSION['userId']))
    {
        header("location: profile.php");
        exit();
    }

?>
        <section class="left" id="left">
            <div class="quotes">
                <p>
                    <h1>Find a perfect match for you...</h1><br>
                    It's fun to have a partner who understands your life and lets you be you.
                </p>
            </div>
        </section>
        <section class="right" id="right">
            <div class="register">
                <form action="home.php" id="register" method="post">
                    <fieldset>
                        <legend>
                            <h1>Register</h1>
                        </legend>
                        <label for="username">Username</label>
                        <input type="text" class="textbox" name="username" id="username" required title="Please enter your name">
                        <br>
                        <br>
                        <label for="email">Email Address</label>
                        <input type="email" class="textbox" name="email" id="email" required title="Please enter the email address" />
                        <br>
                        <br>
                        <?php 
                            if(isset($_GET['email']) && $_GET['email'] === 'incorrect') {
                                echo "<p>This email already exists</p><br><br>";    
                            }                        
                        ?>
                        <label for="password">Password</label>
                        <input type="password" class="textbox" name="password" id="password" required title="Please enter the password"/>
                        <br>
                        <br>
                        <label for="confirmpwd">Confirm Password</label>
                        <input type="password" class="textbox" name="confirmpwd" id="confirmpwd" required title="Re-enter the password here..."/>
                        <br>
                      
                        <p><input type="checkbox" required/>   I accept the <a href="#" name="terms">Terms and Conditions</a>.</p>
                        <br />
                        <button type="submit" id="registerbtn">Register Now</button>
                        <?php 
                            if(isset($_GET['register']) && $_GET['register'] == 'false') {
                                echo "<b>The data is not inserted successfully</b>";    
                            }                        
                        ?>
                    </fieldset>
                </form>
            </div>
        </section>
        <?php require_once("footer.php");?>