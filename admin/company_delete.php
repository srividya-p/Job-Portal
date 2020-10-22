<?php 
$fullPath = realpath(dirname(__FILE__));
$reqPath = substr($fullPath,0,strlen($fullPath)-9);
include("connection/db.php");

$del = $_GET['del'];

$query = mysqli_query($conn, "select photo, form_doc from company where id=$del");

while($row = mysqli_fetch_array($query)){
    $photo = $row['photo'];
    $doc = $row['form_doc'];
}


unlink($reqPath.$photo);
unlink($reqPath.$doc);
$query1 = mysqli_query($conn, "delete from company where id=$del");

header('location: company.php');
?>
