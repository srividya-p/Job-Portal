<?php
session_start();
session_unset();
header('location:dashboard.php');
include('connection/db.php');
$query= mysqli_query($conn, "select * from job_seeker where email='{$SESSION['email']}'");
if($query){
    header("location:http://localhost/ip/");
}
else{
    //header("location:admin_login.php");
}
?>
