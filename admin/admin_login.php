<?php
session_start();
?>

<html>

<head>
    <title>Admin Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/admin_login.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>

<style>
    .focus-input {
        color: #2E8B57;
    }

    .login-form-btn {
        background: #2E8B57;
    }

    .input100:focus+.focus-input100+.symbol-input100 {
        color: #2E8B57;
    }
</style>

<body>
    <div class="limiter">
        <br><br>
        <div class="topnav">
            <div class="topnav-left">
                <a href="http://localhost/ip/" style="color: white;" class="active">Job Portal</a>
            </div>
            <div class="topnav-right">
                <a href="http://localhost/ip/" style="color: white;">Home</a>
                <a href="http://localhost/ip/company_signin.php" style="color: white;background-color: #1963E4; border-radius: 10px;">Post a Job</a>
                <a href="http://localhost/ip/seeker_signin.php" style="color: white; background-color: #19E491; border-radius: 10px;">Want a Job</a>
            </div>
        </div>
        <div class="container-login">
            <div class="wrap-login p-l-50 p-r-50 p-t-77 p-b-30">
                <form class="login-form" id="admin_login" method="POST" action="admin_login.php">
                    <span class="login-form-title p-b-55">
                        Admin Login
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
                        <input class="login-form-btn" id="submit" name="submit" placeholder="Sign In" type="submit">
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
    $pass = $_POST['pass'];

    $query = mysqli_query($conn, "select * from admin_login where admin_email='$email' 
    and admin_pass='$pass'");

    if ($query) {
        if (mysqli_num_rows($query)) {
            $_SESSION['email'] = $email;
            header('location:dashboard.php');
        } else {
            echo "<script>alert('Invalid Credentials! Please try again.')</script>";
        }
    }
}
?>