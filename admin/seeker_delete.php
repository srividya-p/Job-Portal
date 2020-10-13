<?php 
include("connection/db.php");

$del = $_GET['del'];

$query = mysqli_query($conn, "delete from admin_login where id=$del");

if($query){
    echo "<script>alert('Record deleted successfully!')</script>";
    header('location: job_seeker.php');
} else{
    echo "<script>alert('Could not delete! Try again')</script>";
    header('location: job_seeker.php');
}
?>