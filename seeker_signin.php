<html>

<head>
    <title>Job Seeker Sign In</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
</head>

<body>
    <div class="limiter">
        <div class="container-login">
            <div class="wrap-login p-l-50 p-r-50 p-t-77 p-b-30">
                <form class="login-form" id="admin_login" method="POST" action="admin_login.php">
                    <span class="login-form-title p-b-55">
                        Job Seeker Sign In
                    </span>

                    <div class="wrap-input m-b-16">
                        <input class="input" type="text" name="email" placeholder="Email" autocomplete="no">
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <span class="lnr lnr-envelope"></span>
                        </span>
                    </div>

                    <div class="wrap-input m-b-16">
                        <input class="input" type="password" name="pass" placeholder="Password">
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <span class="lnr lnr-lock"></span>
                        </span>
                    </div>

                    <div class="container-login-form-btn p-t-25">
                        <input class="login-form-btn" id="submit" name="submit" value="Sign In" type="submit">
                        OR
                        <anchor href="create_account.php" class="login-form-btn">Create an Account</anchor>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
