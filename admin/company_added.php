<?php 
session_start();
include("connection/db.php");

$c_name = $_POST['c_name'];
$desc = $_POST['desc'];


$query = mysqli_query($conn, "insert into company(company_name, description) values('$c_name', '$desc')");
if($query){
    echo "Data Inserted Sucessfully!!";
}else{
    echo "Error!";}

?>