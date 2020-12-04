<?php
include('include/header.php');
?>

<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="css/register_company.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

<style>
  #wrap{
    height: 800px;
  }
</style>

<body>
  <section style="width: 60%; margin-left: 20%; background-color: #F0F3F7; border-radius: 20px;">
    <div class="register-form">
      <br>
      <div class="title">COMPANY PROFILE</div>
      <form id="registerCompany" method="POST" action="please_wait.php" enctype="multipart/form-data" onsubmit="return passvalidation(event);">
        <p class="sub-head"> Basic Information </p>
        <div>
          <input type="text" name="company_name" class="form-control inp" placeholder="Company Name *" required>
        </div>
        <div>
          <input type="text" name="buisness_stream" class="form-control inp" placeholder="Buisness Stream *" required>
        </div>
        <div>
          <input type="text" name="website" class="form-control inp" placeholder="Company Website *" required>
        </div>
        <div>
          <label>Date of Formation</label>
          <input class="form-control inp" type="date" id="dob" min="1960-01-01" max="2018-01-31" name="dob" value="" placeholder="Establishment Date" required>
        </div>
        <div>
          <textarea rows="6" cols="50" name="desc" class="form-control inp" style="font-size: 20px;">Company Description
		            	</textarea>
        </div>

        <div>
          <select name="country" class="countries form-control" id="countryId">
            <option value="">Select Country</option>
          </select>
        </div>

        <div>
          <label style="font-size: 20px;">Attach Company Logo</label><br>
          <input type="file" id="photo" class="form-control inp" name="photo" onchange="return filetypeValidationPhoto(event); return filetypeValidationPhoto(event)" required>
          <label style="color: red; font-size:16px;">File Format image Only!</label>
          <p id="output1" style="font-size:16px;"></p>
        </div>

        <div>
          <label style="font-size: 20px;">Attach Company Formation Documents</label><br>
          <input type="file" id="doc" class="form-control inp" name="doc" onchange="return filetypeValidationDoc(event); return filetypeValidationDoc(event)" required>
          <label style="color: red; font-size:16px;">File Format PDF Only!</label>
          <p id="output2" style="font-size:16px;"></p>
        </div>

        <p class="sub-head"> Account Details </p>
        <div>
          <input type="email" id="email" name="email" class="form-control inp" placeholder="Email * (abc@example.com)" onchange="return validateEmail(event);" required>
        </div>
        <div>
          <input type="text" name="Phone_no" class="form-control inp" maxlength="10" minlength="10" placeholder="Phone Number" onkeypress="return validatePhone(event);" required>
        </div>
        <div>
          <input class="form-control inp" type="password" id="password" name="password" minlength="8" placeholder="Password *" onchange="return passvalidation(event);" required>
        </div>
        <div>
          <input class="form-control inp" type="password" id="cpassword" name="cpassword" minlength="8" placeholder="Confirm Password *" required>
          <span id="pwd"> </span>
        </div>
        <div style="text-align:center;">
          <input type="submit" name="submit" id="submit" class="btn" value="Register">
        </div>
      </form>
    </div> <br>
  </section> <br><br>

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
    $("#registerCompany").on("submit", function(e) {
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

  <script>
    function filetypeValidationDoc(event) {
      var fileInput = document.getElementById('doc');

      var filePath = fileInput.value;

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

      if (size > 3) {
        alert("	Too big..File must be less than 3MB");
        document.getElementById('file').value = '';
        return false;
      } else {
        $("#output").html('<b>' +
          'This file size is: ' + size + " MB" + '</b>');
        return true;
      }
    });
  </script>
</body>
<script src="//geodata.solutions/includes/countrystatecity.js"></script>

</html>

<?php
include('include/footer.php');
?>