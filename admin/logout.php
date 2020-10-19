<?php
session_start();
session_unset();
header('location:admin_dashboard.php');
include('connection/db.php');
$query= mysqli_query($conn, "select * from admin_login where admin_email='{$SESSION['email']}' and user_type='2'");
if($query){
    header("location:http://localhost/ip/");
}
else{
    header("location:admin_login.php");
}
?>
