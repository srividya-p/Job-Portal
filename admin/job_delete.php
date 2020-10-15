<?php 
include("connection/db.php");

$del = $_GET['del'];

$query = mysqli_query($conn, "delete from jobs where job_id=$del");

header('location: job.php');
?>
