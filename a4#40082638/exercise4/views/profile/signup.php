<?php 
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cPassword = $_POST["confirmPassword"];
        $termsAndCond = $_POST["termsAndConds"];

        $curr = new User($username, $password);
        $error = [];

        if (sizeof(preg_match("/^[A-Za-z0-9]{6,20}$/", $username)) == 0) {
            $error[] = "Username is invalid.";
        }
        if (sizeof(preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{6,256}$/", $password)) == 0) {
            $error[] = "Password is invalid.";
        }
        if ($password != $cPassword) {
            $error[] = "Passwords do not match.";
        }
        if ($termsAndCond != "on") {
            $error[] = "Must accept the terms and conditions.";
        }

        foreach ($context->users as $user) {
            if ($user->authenticate($username, $password)) {
                $error[] = "An account with this username already exists.";
                break;
            }
        }

        if (sizeof($error) == 0) {
            $context->users[] = $curr;
            $_SESSION["user"] = $curr;
            file_put_contents(".$root/app_data/users.csv" , "\n$username:$password", FILE_APPEND);
            header("Location: /");
            die();
        }
        else {         

            displayPage($username, $email, $error);
        }
    }
    else {
        displayPage();
    }

    function displayPage($username = null, $email = null, $errors = null) {
        ?>
            <link href="/styles/signup.css" type="text/css" rel="stylesheet" />
            <section class="login">
                <h2>Welcome to Cottage Finder!</h2>
                <h4>
                    Fill in the form below to sign up and find the perfect cottage for you - for free! 
                    If you already have an account, <a href="/profile/login/">log in here</a>.
                </h4>
                <br />
                <?php 
                    if (isset($errors) && sizeof($errors) > 0) {
                        echo "<ul>";
                        foreach ($errors as $error) {
                            echo "<li>$error</li>";
                        }
                        echo "</ul>";
                    }
                ?>
                <form method="post" action="/profile/signup" autocomplete="on">
                    <div class="flex fields">
                        <div>
                            <label>Email: </label><br />
                            <input 
                                type="text" 
                                name="email" 
                                placeholder="jsmith@gmail.com" 
                                value="<?php echo $email == null ? "" : $username ?>"/>
                        </div>
                        <div>
                            <label>Username: </label><br />
                            <input 
                                type="text" 
                                name="username" 
                                placeholder="jsmith" 
                                value="<?php echo $username == null ? "" : $username ?>"/>
                        </div>
                    </div>
                    <br />
                    <div class="flex fields">
                        <div>
                            <?php tooltip("<label>Password: </label><br />",
                            "Password must contain: 
                                <ul>
                                    <li>At least 1 uppercase letter.</li>
                                    <li>At least 1 lowercase letter.</li>
                                    <li>At least 1 number.</li>
                                    <li>At least 1 symbol.</li>
                                    <li>Between 8 and 256 characters.</li>
                                </ul>
                            "); ?>
                            <input type="password" name="password" placeholder="1!aA_____" />
                        </div>
                        <div>
                            <label>Confirm Password:</label><br />
                            <input type="password" name="confirmPassword" placeholder="1!aA_____" />
                        </div>
                    </div>
                    <br />
                    <label>I agree to the terms and conditions: </label> <input type="checkbox" name="termsAndConds"/>
                    <br /><br />
                    <input type="submit" id="btnSignup" name="submit" value="Sign up"/>
                </form>
            </section>
        <?php
    }
?>