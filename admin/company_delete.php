<?php 
define ('SITE_ROOT', realpath(dirname(__FILE__)));
include("connection/db.php");

$del = $_GET['del'];

$query = mysqli_query($conn, "select photo, form_doc from company where id=$del");

while($row = mysqli_fetch_array($query)){
    $photo = $row['photo'];
    $doc = $row['form_doc'];
}

unlink('/home/pika/php'.$photo);
unlink('/home/pika/php'.$doc);
$query1 = mysqli_query($conn, "delete from company where id=$del");

header('location: company.php');
?>
