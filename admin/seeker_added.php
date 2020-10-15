<?php 
session_start();
include("connection/db.php");

$email = $_POST['email'];
$username = $_POST['username'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password = $_POST['password'];
$user_type = $_POST['user_type'];

$query = mysqli_query($conn, "insert into admin_login(admin_email, admin_pass, 
admin_username, first_name, last_name, user_type) values('$email', '$password',
 '$username', '$first_name', '$last_name', '$user_type')");

if($query){
    echo "Data Inserted Sucessfully!";
}else{
    echo "Error!";}

?>