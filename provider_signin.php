<html>

<head>
    <title>Company Sign In</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
</head>

<body>
    <div class="limiter">
        <div class="container-login">
            <div class="wrap-login p-l-50 p-r-50 p-t-77 p-b-30">
                <form class="login-form" id="provider_signin.php" method="POST" action="admin/admin_login.php">
                    <span class="login-form-title p-b-55">
                        Company Sign In
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
    and admin_pass='$pass' and admin_type='2'");

    if ($query) {
        if (mysqli_num_rows($query)) {
            $_SESSION['email'] = $email;
            header('location:admin/admin_dashboard.php'); //jhol
        } else {
            echo "<script>alert('Invalid Credentials! Please try again.')</script>";
        }
    }
}
?>