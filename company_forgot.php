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
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
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
                <form class="login-form" id="provider_signin" method="POST" action="company_forgot.php">
                    <span class="login-form-title p-b-55">
                        Forgot Password
                    </span>

                    <div class="wrap-input m-b-16">
                        <input class="input" type="text" id="email" name="email" placeholder="Email" autocomplete="no">
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <span class="lnr lnr-envelope"></span>
                        </span>
                    </div>

                    <div class="container-login-form-btn p-t-25">
                        <input class="login-form-btn" id="submit" name="submit" placeholder="Sign In" type="submit">
                        <div class="wrap-input m-b-16">
                        </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php
include('connection/db.php');
require 'vendor/autoload.php';

if (isset($_POST['submit'])) {
    
    $forgot_email = $_POST['email'];

    $query = mysqli_query($conn, "select password from company where email='$forgot_email'");

    if ($query) {
        if (mysqli_num_rows($query) > 0) {

            $row = mysqli_fetch_array($query);
            $content="We recieved a request for accessing your password. Your password is:<br>".$row[0]."<br>Do not share it with anyone. 
            You may update your password in the profile section.<br> Regards, <br> Job-Portal Administrator";
            $email = new \SendGrid\Mail\Mail();
            $email->setFrom("jobportal1000@gmail.com", "Job-Portal Admin");
            $email->setSubject("Request for resetting password");
            $email->addTo($forgot_email, "");
            $email->addContent("text/html", $content);

            $sendgrid = new \SendGrid("Enter your Sendgrid API Key here");

            try {
                $response = $sendgrid->send($email);
                echo "<script>alert('Please check your email for your password!')</script>";
                header('location: c_forgot_notice.php');
            } catch (Exception $e) {
                print $e->getMessage();
            }
        } else {
            echo "<script>alert('Entered email is not valid!')</script>";
        }
    } else {
        echo "<script>alert('Error!')</script>";
    }
}
?>