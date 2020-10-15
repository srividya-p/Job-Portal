<?php 
include("connection/db.php");

$del = $_GET['del'];

$query = mysqli_query($conn, "delete from admin_login where id=$del");

header('location: job_seeker.php');

?>