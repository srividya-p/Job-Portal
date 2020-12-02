<?php

session_start();

?>
<html>

<head>
    <title>Company Sign In</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="limiter">
        <br><br>
        <div class="topnav">
            <div class="topnav-left">
                <a href="index.php" class="active">Job Portal</a>
            </div>
            <div class="topnav-right">
                <a href="index.php">Home</a>
                <a href="company_signin.php" style="background-color: #1963E4; border-radius: 10px;">Post a Job</a>
                <a href="seeker_signin.php" style="background-color: #19E491; border-radius: 10px;">Want a Job</a>
            </div>
        </div>
        <div class="container-login">
            <div class="wrap-login p-l-50 p-r-50 p-t-77 p-b-30">
                <form class="login-form" id="provider_signin" method="POST" action="company_signin.php">
                    <span class="login-form-title p-b-55">
                        Company Sign In
                    </span>

                    <div class="wrap-input m-b-16">
                        <input class="input" type="text" id="email" name="email" placeholder="Email" autocomplete="no">
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <span class="lnr lnr-envelope"></span>
                        </span>
                    </div>

                    <div class="wrap-input m-b-16">
                        <input class="input" type="password" id="pass" name="pass" placeholder="Password">
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <span class="lnr lnr-lock"></span>
                        </span>
                    </div>

                    <div class="container-login-form-btn p-t-25">
                        <input class="login-form-btn" id="submit" name="submit" placeholder="Sign In" type="submit">
                        OR
                        <a href="company_register.php" class="login-form-btn" style="text-decoration: none">Get Registered</a>
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

    $query = mysqli_query($conn, "select * from company where email='$email' 
    and password='$pass'");
    //var_dump($query);
    if ($query) {
        if (mysqli_num_rows($query) > 0) {
            $_SESSION['email'] = $email;
            //echo $_SESSION['email'];
            header('location:admin/dashboard.php');
        } else {
            echo "<script>alert('Invalid Credentials! Please try again.')</script>";
        }
    } else {
        echo "<script>alert('Error')</script>";
    }
}
?>