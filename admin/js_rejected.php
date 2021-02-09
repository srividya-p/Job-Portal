<?php
include("connection/db.php");
require 'vendor/autoload.php';

$u_id = $_GET['u-id'];
$j_id = $_GET['j-id'];

$query = mysqli_query($conn, "update applicant set status='not selected' where 
job_post_id = $j_id and user_id= $u_id");

$query1 = mysqli_query($conn, "select email, fname from job_seeker where id = $u_id");
while( $row = mysqli_fetch_array($query1) ){
    $to_email = strval($row['email']);
    $name = strval($row['fname']);
}

$query2 = mysqli_query($conn, "select job_title, creator_email from jobs where job_id= $j_id");
$val = mysqli_fetch_array($query2);

$query3 = mysqli_query($conn, "select name from company where email='$val[1]'");
$company_name = mysqli_fetch_array($query3);

$content = $name.",<br><br>This email is to inform you that you have not been selected for the role of ".$val[0].
" at ".$company_name[0].". We reccomend that you apply for more jobs. <br><br> Regards Job-Portal Administrator";

$subject = "Update on Job Application";

$email = new \SendGrid\Mail\Mail();
$email -> setFrom("jobportal1000@gmail.com", "Job-Portal Admin");
$email -> setSubject($subject);
$email -> addTo($to_email, "");
$email -> addContent("text/html", $content);

$sendgrid = new \SendGrid("Enter your Sendgrid API Key here");

try{
    $response = $sendgrid -> send($email);
    echo "<script>alert('Email sent Sucessfully!')</script>";
    header('location: applicants.php');
} catch(Exception $e){
    print $e -> getMessage();
}

?>