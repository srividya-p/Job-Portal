<?php
$conn = mysqli_connect("localhost", "root", "selin@1234", "job_portal");
if($conn->connect_error){
    die("Connection Failed!".$conn->connect_error);
}
else{
	echo "conn success";
}
?>
