<html>

<head>
    <title>Job Seeker Sign In</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<style>
    .limiter {
        width: 100%;
        margin: 0 auto;
        position: relative;
        overflow: hidden;
        background-image: url("/ip/img/seeker.jpg");
    }

    .focus-input {
        color: #DB4C4C;
    }

    .login-form-btn {
        background: #DB4C4C;
    }

    .input100:focus+.focus-input100+.symbol-input100 {
        color: #DB4C4C;
    }
</style>

<body>
    <div class="limiter">
        <br><br>
        <div class="topnav">
            <div class="topnav-left">
                <a href="index.php" style="color: white;" class="active">Job Portal</a>
            </div>
            <div class="topnav-right">
                <a href="index.php" style="color: white;">Home</a>
                <a href="company_signin.php" style="color: white;background-color: #1963E4; border-radius: 10px;">Post a Job</a>
                <a href="seeker_signin.php" style="color: white; background-color: #19E491; border-radius: 10px;">Want a Job</a>
            </div>
        </div>
        <div class="container-login">
            <div class="wrap-login p-l-50 p-r-50 p-t-77 p-b-30">
                <form class="login-form" id="admin_login" method="POST" action="seeker_forgot.php">
                    <span class="login-form-title p-b-55">
                        Please Check your <br> E-mail!
                    </span>

                    <div class="container-login-form-btn p-t-25">
                        <a class="login-form-btn" href="seeker_signin.php" style="text-decoration:none">Back</a>
                        <div class="wrap-input m-b-16">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
