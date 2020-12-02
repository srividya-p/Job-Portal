<?php

$user_id = $_GET['user-id'];
$job_id = $_GET['job-id'];

include("connection/db.php");


$conn = mysqli_connect('localhost', 'root', '', 'job_portal');
$query = mysqli_query($conn, "insert into applicant values('$job_id','$user_id', 'applied')");

if($query){
    header("location:seeker_dashboard.php");
}
else{
    echo "<script>alert('Error!')</script>";
}
?>
