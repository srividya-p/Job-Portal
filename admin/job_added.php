<?php 
session_start();
include("connection/db.php");
$email = $_SESSION['email'];
$jobTitle = $_POST['jobTitle'];
$desc = $_POST['desc'];
$country = $_POST['country'];
$city = $_POST['city'];
$state = $_POST['state'];


$query = mysqli_query($conn, "insert into jobs(creator_email, job_title, description, country, state, city) 
values('$email', '$jobTitle', '$desc', '$country', '$city', '$state')");

if($query){
    echo "Data Inserted Sucessfully!";
}else{
    echo "Error!";}

?>