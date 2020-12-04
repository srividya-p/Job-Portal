<?php
include('include/header.php');
include('connection/db.php');
include('term_and_condition.php');
define ('SITE_ROOT', realpath(dirname(__FILE__)));

if (isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
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
  
  $targetResume = SITE_ROOT.'/seekerFiles/resumes/'.$_FILES['resume']['name'];
  $resume = '/ip/seekerFiles/resumes/'.$_FILES['resume']['name'];

  //Encrypt Password
  move_uploaded_file($_FILES['resume']['tmp_name'], $targetResume);


  $query = mysqli_query($conn, "insert into job_seeker(fname, lname, email, password, mobileno, address, country, city,
  state, dob, age, qualification, stream, passingyear, cgpa, aboutme, skills, resume) values
  ('$fname','$lname','$email','$password','$mobileno','$address','$country','$city','$state','$dob', '$age','$qualification','$stream',
  '$passingyear','$cgpa','$aboutme','$skills','$resume')");

  if ($query) {
    echo "<script>alert('Now you can login!')</script>";
    header('location:seeker_signin.php');
  } else {
    echo "<script>alert('Some error occured please try again!')</script>";
  }
}
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
  </style>
</head>

<body>
  <div class="wrapper">
    <div class="formcontainer">
      <br>
      <div class="title">CREATE YOUR PROFILE</div>
      <form id="registerSeeker" method="post" action="seeker_signup.php" name="SeekerRegistration" class="registerSeeker" enctype="multipart/form-data" onsubmit="return passvalidation(event); return validateEmail(event);">
        <div class="form-section">
          <p class="sub-head"> Personal details </p>
          <div class="form-top">
            <div class="form-left">
              <div>
                <input class="form-control" type="text" id="fname" name="fname" placeholder="First Name *" pattern="[a-zA-Z][a-zA-Z ]{2,}" required>
              </div>
              <div>
                <input class="form-control" type="text" id="lname" name="lname" placeholder="Last Name *" pattern="[a-zA-Z][a-zA-Z ]{2,}" required>
              </div>
              <div>
                <input class="form-control" type="email" id="email" name="email" placeholder="Email * (abc@example.com)" onchange="return validateEmail(event);" required>
              </div>
              <div>
                <textarea class="form-control" type="text" rows="4" id="aboutme" name="aboutme" placeholder="Brief intro about yourself"></textarea>
              </div>
              <div>
                <label>Date of birth:</label>
                <input class="form-control" type="date" id="dob" min="1960-01-01" max="1999-01-31" name="dob" placeholder="Date Of Birth *" value="" onchange="return calAge();" required>
              </div>
              <div>
                <input class="form-control" id="age" name="age" placeholder="Age" value="" readonly>
              </div>
            </div>
            <div class="form-right">
              <div>
                <input class="form-control" type="password" id="password" name="password" minlength="8" placeholder="Password *" onchange="return passvalidation(event);" required>
              </div>
              <div>
                <input class="form-control" type="password" id="cpassword" name="cpassword" minlength="8" placeholder="Confirm Password *" required>
                <span id="pwd"> </span>
              </div>
              <div>
                <input class="form-control" type="number" id="mobileno" name="mobileno" minlength="10" maxlength="10" onkeypress="return validatePhone(event);" placeholder="Mobile Number *" required>
              </div>
              <div>
                <textarea style="height:110px" type="text" class="form-control" rows="4" id="address" name="address" placeholder="Address"></textarea>
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
                <input class="form-control" type="date" id="passingyear" max="2020-10-31" name="passingyear" placeholder="Passing Year *" required>
              </div>
              <div>
                <input class="form-control" type="text" id="qualification" name="qualification" placeholder="Highest Qualification *" required>
              </div>
              <div>
                <input class="form-control" type="text" id="stream" name="stream" placeholder="Stream *" required>
              </div>
              <div>
                <label style="font-size:16px"><input type="checkbox">&nbsp;I accept all the <a href="#modalWindow">terms & conditions</a></label>
              </div>
            </div>
            <div class="form-right">
              <div>
                <textarea style="margin-top:35px" type="text" class="form-control" rows="4" id="skills" name="skills" placeholder="Enter Skills"></textarea>
              </div>
              <div>
                <input class="form-control" type="number" id="cgpa" name="cgpa" placeholder="CGPA *" name="price" min="4.00" step=".01" required>
              </div>
              <div>
                <label>Upload Resume:</label>
                <input type="file" id="file" name="resume" class="form-control" onchange="return filetypeValidation(event);return filetypeValidation(event)" required>
                <p id="output" style="font-size:14px;"></p>
                <label style="color: red; font-size:14px;">File Format PDF Only!</label>
              </div>
            </div>
          </div>
          <div>
            <button class="register" type="submit" name="submit" id="submit">Register</button>
            <p id="text-center">Already have an account?&emsp14;<a href="seeker_signin.php">Sign in </a></p>
          </div>
        </div>
      </form>
    </div>
  </div>

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

</body>

</html>

<?php
include('include/footer.php');
?>