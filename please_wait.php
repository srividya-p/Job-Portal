<?php
include('include/header.php');
include('connection/db.php');
define ('SITE_ROOT', realpath(dirname(__FILE__)));

if (isset($_POST['submit'])) {
  $cname = $_POST['company_name'];
  $stream = $_POST['buisness_stream'];
  $website = $_POST['website'];
  $date = $_POST['dob'];
  $desc = $_POST['desc'];
  $country = $_POST['country'];
  $email = $_POST['email'];
  $p_no = $_POST['Phone_no'];
  $pass = $_POST['cpassword'];

  $targetPhoto = SITE_ROOT.'/companyFiles/profilePics/'.$_FILES['photo']['name'];
  $targetDoc = SITE_ROOT.'/companyFiles/formDocs/'.$_FILES['doc']['name'];

  $photo = '/ip/companyFiles/profilePics/'.$_FILES['photo']['name'];;
  $doc = '/ip/companyFiles/formDocs/'.$_FILES['doc']['name'];

  move_uploaded_file($_FILES['photo']['tmp_name'], $targetPhoto);
  move_uploaded_file($_FILES['doc']['tmp_name'], $targetDoc);

$query = mysqli_query($conn, "insert into company(name, stream, 
website, date, description, country, email, phone, password, photo, form_doc, verified)
values('$cname', '$stream', '$website', '$date', '$desc', '$country', '$email', 
'$p_no', '$pass', '$photo', '$doc', 0)");

//var_dump( $query );

  if ( $query ) {
    echo "<script>alert('Admin has been Notified!')</script>";
  } else {
    echo "<script>alert('Some error occured please try again!')</script>";
  }
}
?>

<link rel="stylesheet" href="css/seeker_signup.css">

<body>
    <div class="formcontainer" style="height: 400px;">
        <br><br><br><br><br><br><br>
        <p class="sub-head">
            Please wait, Your details will be Verified and your login Credentials will
            be sent via Email shortly!
        </p>
    </div>
</body>
<?php
include('include/footer.php');
?>