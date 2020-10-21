<?php
include("connection/db.php");
require 'vendor/autoload.php';

$id = $_GET['id'];

$query = mysqli_query($conn, "update company set verified =1 where id = $id");

$query1 = mysqli_query($conn, "select email, password from company where id = $id");
while( $row = mysqli_fetch_array($query1) ){
    $to_email = strval($row['email']);
    $password = strval($row['password']);
}

$content = "<h4>Your Company has been verified as a Legtimate one!</h4><br>
Here are your login credentials as per your registration: <br> Email: ".$to_email."<br>
Password: ".$password."<br><br> Please do not share these with anyone. <br> Regards
Job-Portal Administrator";

$email = new \SendGrid\Mail\Mail();
$email -> setFrom("scs3.laptop@gmail.com", "Job-Portal Admin");
$email -> setSubject("Job Portal Verification Complete!");
$email -> addTo($to_email, "");
$email -> addContent("text/html", $content);

$sendgrid = new \SendGrid("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");

try{
    $response = $sendgrid -> send($email);
    echo "<script>alert('Email sent Sucessfully!')</script>";
    header('location: uv_company.php');
} catch(Exception $e){
    print $e -> getMessage();
}


?>