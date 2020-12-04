<?php
include("connection/db.php");
include('admin/include/country_codes.php');
include('term_and_condition.php');

$id = $_GET['id'];

$query = mysqli_query($conn, "select * from job_seeker where id = $id");

while ($row = mysqli_fetch_array($query)) {
    $id=$row['id'];
      $fname = $row['fname'];
      $lname = $row['lname'];
      $email = $row['email'];
      $password = $row['password'];
      $mobileno = $row['mobileno'];
      $address = $row['address'];
      $country = $row['country'];
      $city = $row['city'];
      $state = $row['state'];
      $dob = $row['dob'];
      $age = $row['age'];
      $qualification = $row['qualification'];
      $stream = $row['stream'];
      $passingyear = $row['passingyear'];
      $cgpa = $row['cgpa'];
      $aboutme = $row['aboutme'];
      $skills = $row['skills'];
      $profile_img = $row['profile_img'];
      $resume = $row['resume'];
}
$code = array_search($country, $countrycodes);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/seeker_signup.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <style>
    .registerSeeker input,
    textarea {
      border: 1px solid #eee;
      border-left: 3px solid;
      border-radius: 5px;
    }

    .registerSeeker input:valid,
    textarea:valid {
      border-left-color: black;
    }

    .registerSeeker input:optional,
    textarea:optional {
      border-left-color: #999999;
    }

    .registerSeeker input:invalid,
    textarea:invalid {
      border-left-color: red;
    }
    .limiter {
        width: 100%;
        margin: 0 auto;
        position: relative;
        overflow-y: scroll;
        background-image: url("/ip/img/seeker.jpg");

    }
  </style>
</head>

<body class="limiter">
  <br>
        <div class="topnav">
            <div class="topnav-left">
                <a href="seeker_dashboard.php" style="color: white;" class="active"
                >Job Portal</a>
            </div>
            <div class="navbar">
                <a href="seeker_dashboard.php" style="color: white; background-color: #19E491; border-radius: 10px;">Dashboard</a>
            </div>
        </div><br><br>
  <div class="wrapper">
    <div class="formcontainer">
      <br>
      <div class="title">EDIT YOUR PROFILE</div>
      <form action="seeker_update1.php?id=<?php echo $id?>" style="margin:3%; padding:3%;" name="company_form" id="company_form"  method="POST" enctype="multipart/form-data" onsubmit="return passvalidation(event); return validateEmail(event);">
        <div class="form-section">
            <div class="imgcontainer" style=" z-index: 1;">
                <div class="form-top">
                <div class="form-left">
                <img src="<?php echo $profile_img; ?>" onerror="this.onerror=null; this.src='img/profile.png'" class="Profile" style="border-radius: 50%; height: 200px; width: 200px; margin-left: 50%; "><br><br>
                </div>
                <div class="form-right"><br><br>
                 <label style="font-size: 20px;">Update Profile Image</label><br>
                  <input type="file" id="Profile_img" class="form-control inp" name="Profile_img" onchange="return filetypeValidationPhoto(event); return filetypeValidationPhoto(event)" >
                  <label style="color: red; font-size:16px;">File Format image Only!</label>
                  <p id="output1" style="font-size:16px;"></p>
                </div>
            </div>
            </div>
        </div><br><br><br><br><br>

        <div class="form-section">
          <p class="sub-head"> Personal details </p>
          <div class="form-top">
            <div class="form-left">
              <div>
                <input class="form-control" type="text" id="fname" name="fname" placeholder="First Name *" value="<?php echo $fname; ?>" required>
              </div>
              <div>
                <input class="form-control" type="text" id="lname" name="lname" placeholder="Last Name *" value="<?php echo $lname; ?>" required>
              </div>
              <div>
                <input class="form-control" type="email" id="email" name="email" placeholder="Email * (abc@example.com)" value="<?php echo $email; ?>" onchange="return validateEmail(event);" required disabled>
              </div>
              <div>
                <textarea class="form-control" type="text" rows="4" id="aboutme" name="aboutme" placeholder="Brief intro about yourself"><?php echo $aboutme; ?></textarea>
              </div>
              <div>
                <label>Date of birth:</label>
                <input class="form-control" type="date" id="dob" min="1960-01-01" max="1999-01-31" name="dob" placeholder="Date Of Birth *" value="<?php echo $dob; ?>" onchange="return calAge();" required>
              </div>
              <div>
                <input class="form-control" id="age" name="age" placeholder="Age" value="<?php echo $age; ?>" readonly>
              </div>
            </div>
            <div class="form-right">
              <div>
                <input class="form-control" value="<?php echo $password?>" type="password" id="password" name="password" minlength="8" placeholder="Password *" onchange="return passvalidation(event);" required>
              </div>
              <div>
                <input class="form-control" value="<?php echo $password?>" type="password" id="cpassword" name="cpassword" minlength="8" placeholder="Confirm Password *" required>
                <span id="pwd"> </span>
              </div>
              <div>
                <input class="form-control" type="number" id="mobileno" name="mobileno" minlength="10" maxlength="10" onkeypress="return validatePhone(event);" placeholder="Mobile Number *" value="<?php echo $mobileno; ?>" required>
              </div>
              <div>
                <textarea style="height:110px" type="text" class="form-control" rows="4" id="address" name="address" placeholder="Address" ><?php echo $address; ?></textarea>
              </div> <br>
              <div>
                <select name="country" class="countries form-control" id="countryId">
                  <option value="">Select Country</option>
                </select>
              </div> <br>
              <div>
                <select name="state" class="states form-control" id="stateId">
                  <option value="">Select State</option>
                </select>
              </div> <br>
              <div>
              <select name="city" class="cities form-control" id="cityId">
                    <option value="">Select City</option>
                </select>
              </div>
            </div>
          </div>
          <p class="sub-head"> Education details </p>
          <div class="form-bottom">
            <div class="form-left">
              <div>
                <label style="margin-top:23px">Passing Year:</label>
                <input class="form-control" type="date" id="passingyear" max="2020-10-31" name="passingyear" placeholder="Passing Year *" value="<?php echo $passingyear; ?>" required>
              </div>
              <div>
                <input class="form-control" type="text" id="qualification" name="qualification" placeholder="Highest Qualification *" value="<?php echo $qualification; ?>" required>
              </div>
              <div>
                <input class="form-control" type="text" id="stream" name="stream" placeholder="Stream *" value="<?php echo $stream; ?>" required>
              </div>
            </div>
            <div class="form-right">
              <div>
                <textarea style="margin-top:35px" type="text" class="form-control" rows="4" id="skills" name="skills"  placeholder="Enter Skills" ><?php echo $skills; ?></textarea>
              </div>
              <div>
                <input class="form-control" type="number" id="cgpa" name="cgpa" placeholder="CGPA *" value="<?php echo $cgpa; ?>" name="price" min="4.00" step=".01" required>
              </div>
              <div>
                <label>Upload New Resume If Required:</label>
                <input type="file" id="file" name="resume" class="form-control" onchange="return filetypeValidation(event);return filetypeValidation(event)" value="<?php echo $row['resume'];?>" >
                <p id="output" style="font-size:14px;"></p>
                <p>Current File:<br><?php echo $resume; ?></p>
                <label style="color: red; font-size:14px;">File Format PDF Only!</label>
              </div>
            </div>
          </div>
          <div>
            <button class="register" type="submit" name="submit" id="submit">Update</button>
          </div>
        </div>
      </form>
    </div>
  </div>
<!--terms and condition show document-->
<script>
    function showDoc(pth) {
        window.open(pth, '_blank');
    }
</script>
<!--validation of form-->
<script>
    function filetypeValidationPhoto(event) {
      var fileInput = document.getElementById('photo');

      var filePath = fileInput.value;
      console.log(filePath)

      var allowedExtension = /\.(gif|jpe?g|tiff?|png|webp|bmp)$/i
      if (!allowedExtension.exec(filePath)) {
        alert('Invalid file type');
        fileInput.value = '';
        return false;
      }
    }
  </script>
  <script type="text/javascript">
    function validatePhone(event) {
      //event.keycode will return unicode for characters and numbers like a, b, c, 5 etc.
      //event.which will return key for mouse events and other events like ctrl alt etc. 
      var key = window.event ? event.keyCode : event.which;
      if (event.keyCode == 8 || event.keyCode == 46 || event.keyCode == 37 || event.keyCode == 39) {
        // 8 means Backspace
        //46 means Delete
        // 37 means left arrow
        // 39 means right arrow
        return true;
      } else if (key < 48 || key > 57 || event.shiftkey == true) {
        // 48-57 is 0-9 numbers on your keyboard.
        return false;
      } else return true;
    }
  </script>
  <script type="text/javascript">
    function calAge() {
      var dob = document.SeekerRegistration.dob.value;
      var today = new Date();
      var birthDate = new Date(dob);
      var age = today.getFullYear() - birthDate.getFullYear();
      var m = today.getMonth() - birthDate.getMonth();
      if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
      }
      document.SeekerRegistration.age.value = age;
    }
  </script>
  <script type="text/javascript">
    function passvalidation(event) {
      var str = document.getElementById("password").value;
      if (str.match(/[a-z]/g) && str.match(
          /[0-9]/g) && str.match(
          /[^a-zA-Z\d]/g) && str.length >= 8)
        return true;
      else
        alert("Password must contain minimum 8 characters with atleast 1 digit and 1 special character");
      document.getElementById("password").value = '';
      return false;
    }
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript">
    $("#registerSeeker").on("submit", function(e) {
      e.preventDefault();
      if ($('#password').val() != $('#cpassword').val()) {
        $('#pwd').html("Password Mismatch!").css('color', 'red')
      } else {
        $(this).unbind('submit').submit();
      }
    });
  </script>

  <script type="text/javascript">
    function validateEmail(event) {
      var emailText = document.getElementById('email').value;
      var pattern = /^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/;
      if (pattern.test(emailText)) {
        return true;
      } else {
        alert('Bad email address: ' + emailText);
        document.getElementById('email').value = '';
        return false;
      }

    }
  </script>

  <script type="text/javascript">
    function filetypeValidation() {
      var fileInput =
        document.getElementById('file');

      var filePath = fileInput.value;

      // Allows only pdf file type 
      var allowedExtension = /(\.pdf)$/i;
      if (!allowedExtension.exec(filePath)) {
        alert('Invalid file type');
        fileInput.value = '';
        return false;
      }
    }
  </script>

  <script type="text/javascript">
    $('#file').on('change', function() {
      const size =
        (this.files[0].size / 1024 / 1024).toFixed(2);

      if (size > 4 || size < 2) {
        alert("File must be between the size of 2-4 MB");
        document.getElementById('file').value = '';
        return false;
      } else {
        $("#output").html('<b>' +
          'This file size is: ' + size + " MB" + '</b>');
        return true;
      }
    });
  </script>
  <script src="//geodata.solutions/includes/countrystatecity.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<!-- <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script> -->

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>

<!-- datatables plugin -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

</body>

<?php

include("connection/db.php");

if (isset($_POST['submit'])) {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $password = $_POST['password'];
      $mobileno = $_POST['mobileno'];
      $address = $_POST['address'];
      $country = $_POST['country'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $dob = $_POST['dob'];
      $age = $_POST['age'];
      $qualification = $_POST['qualification'];
      $stream = $_POST['stream'];
      $passingyear = $_POST['passingyear'];
      $cgpa = $_POST['cgpa'];
      $aboutme = $_POST['aboutme'];
      $skills = $_POST['skills'];
define ('SITE_ROOT', realpath(dirname(__FILE__)));
      $targetResume = SITE_ROOT.'/seekerFiles/resumes/'.$_FILES['resume']['name'];
    $resume = '/ip/seekerFiles/resumes/'.$_FILES['resume']['name'];
    move_uploaded_file($_FILES['resume']['tmp_name'], $targetResume);

    $targetphoto = SITE_ROOT.'/img/'.$_FILES['Profile_img']['name'];
    $profile_img = '/ip/img/'.$_FILES['Profile_img']['name'];
    move_uploaded_file($_FILES['Profile_img']['tmp_name'], $targetphoto);

    $query1 = mysqli_query($conn, "update job_seeker set fname='$fname', lname='$lname',
    country='$country', mobileno='$mobileno', age='$age', qualification='$qualification', address='$address',  dob='$dob', age='$age', stream='$stream', passingyear='$passingyear', aboutme='$aboutme', skills='$skills', 
    cgpa='$cgpa', password='$password' where id=$id");

    if (!$country==""){
        $query2 = mysqli_query($conn, "update job_seeker set country='$country', city='$city', state='$state' where id=$id");
    }

    if ($resume=='/ip/seekerFiles/resumes/'){
        echo "empty";
    }
    else{
        $query3 = mysqli_query($conn, "update job_seeker set resume='$resume' where id=$id");
    }

    if ($profile_img=='/ip/img/'){
        echo "empty";
    }
    else{
        $query3 = mysqli_query($conn, "update job_seeker set profile_img='$profile_img' where id=$id");
    }

    if ($query1) {
        echo "<script>alert('Record updated successfully!')</script>";
    } else {
        echo "<script>alert('Could not update! Try again')</script>";
    }
}

?>
</html>