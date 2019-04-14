<?php 
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $curr = new User($username, $password);
        foreach ($context->users as $user) {
            if ($user->authenticate($username, $password)) {
                $_SESSION["user"] = $curr;
                break;
            }
        }

        if (!isset($_SESSION["user"])) {
            displayPage($username);
        }
        else {           
            header("Location: /home/home/");
            die();
        }
    }
    else {
        displayPage();
    }

    function displayPage($username = null) {
        ?>
            <link href="/styles/login.css" type="text/css" rel="stylesheet" />
            <section class="login">
                <h2>Welcome back!</h2>
                <h4>
                    If you don't have an account, <a href="/profile/signup/">sign up here</a> to 
                    find the perfect cottage for you - for free!
                </h4>
                <br />
                <?php 
                    if (isset($username)) {
                        echo "Error: The username and password you entered were incorrect.<br />";
                    }
                ?>
                <form method="post" action="/profile/login" autocomplete="on">
                    <label>Username/Email</label><br />
                    <input type="text" name="username" value="<?php echo $username == null ? "" : $username ?>"/>
                    <br />
                    <label>Password</label><br />
                    <input type="password" name="password"/>
                    <br />
                    <label>Remember me? </label> <input type="checkbox" name="rememberMe"/>
                    <br /><br />
                    <input type="submit" name="submit" value="Log in"/>
                </form>
            </section>
        <?php
    }
?>