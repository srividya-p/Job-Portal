<?php 
session_start();
?>

<html>

<head>
    <title>Job Seeker Sign In</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
                <form class="login-form" id="admin_login" method="POST" action="seeker_signin.php">
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
                        <a href="seeker_signup.php" class="login-form-btn" style="text-decoration: none">Create an Account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
include('connection/db.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = base64_encode(strrev(md5($_POST['pass'])));

    $query = mysqli_query($conn, "select email, password from job_seeker where email='$email' 
    and password='$pass'");
    //var_dump($query);
    if ($query) {
        if (mysqli_num_rows($query) > 0) {
            $_SESSION['email'] = $email;
            header('location:seeker_dashboard.php');
        } else {
            echo "<script>alert('Invalid Credentials! Please try again.')</script>";
        }
    } else {
        echo "<script>alert('Error')</script>";
    }
}
?>