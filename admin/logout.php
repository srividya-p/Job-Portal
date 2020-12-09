<?php
session_start();
session_unset();
header('location:dashboard.php');
include('connection/db.php');
$query= mysqli_query($conn, "select * from admin_login where admin_email='{$SESSION['email']}'");
if($query){
    header("location: ../index.php");
}
else{
    //header("location:admin_login.php");
}
?>
