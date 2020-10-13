<?php 
include("connection/db.php");

$del = $_GET['del'];

$query = mysqli_query($conn, "delete from company where company_id=$del");

if($query){
    echo "<script>alert('Record deleted successfully!')</script>";
    header('location: company.php');
} else{
    echo "<script>alert('Could not delete! Try again')</script>";
    header('location: company.php');
}
?>
