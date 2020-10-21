<?php 

include("connection/db.php");

$del = $_GET['del'];

$query = mysqli_query($conn, "delete from job_seeker where id=$del");

header('location: seeker.php');
?>