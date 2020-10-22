<?php 

include("connection/db.php");
require 'vendor/autoload.php';
$fullPath = realpath(dirname(__FILE__));
$reqPath = substr($fullPath,0,strlen($fullPath)-9);

$del = $_GET['del'];

$query1 = mysqli_query($conn, "select email, password, photo, form_doc from company where id = $del");
while( $row = mysqli_fetch_array($query1) ){
    $to_email = strval($row['email']);
    $password = strval($row['password']);
    $photo = $row['photo'];
    $doc = $row['form_doc'];
}

$content = "<h4>Sorry, but your Company does not seem to be a Legtimate one!</h4>
Please try registering again with more credible details.<br>
Regards Job Portal-Administrator";

$email = new \SendGrid\Mail\Mail();
$email -> setFrom("scs3.laptop@gmail.com", "Job-Portal Admin");
$email -> setSubject("Job Portal Verification Failed!");
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

unlink($reqPath.$photo);
unlink($reqPath.$doc);

$query = mysqli_query($conn, "delete from company where id=$del");

header('location: uv_company.php');
?>