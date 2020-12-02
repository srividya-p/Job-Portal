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
                <form class="login-form" id="admin_login" method="POST" action="seeker_forgot.php">
                    <span class="login-form-title p-b-55">
                        Forgot Password
                    </span>

                    <div class="wrap-input m-b-16">
                        <input class="input" type="text" name="email" placeholder="Enter Email" autocomplete="no">
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <span class="lnr lnr-envelope"></span>
                        </span>
                    </div>

                    <div class="container-login-form-btn p-t-25">
                        <input class="login-form-btn" id="submit" name="submit" value="Submit" type="submit">
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

    $query = mysqli_query($conn, "select password from job_seeker where email='$forgot_email'");

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

            $sendgrid = new \SendGrid("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");

            try {
                $response = $sendgrid->send($email);
                echo "<script>alert('Please check your email for your password!')</script>";
                header('location: s_forgot_notice.php');
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