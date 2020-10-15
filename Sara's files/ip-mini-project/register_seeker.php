<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seeker Registration</title>
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="styles.css">
  <style>
    .registerSeeker input,textarea{
    border: 1px solid #eee;
    border-left: 3px solid;
    border-radius: 5px;  
    }
    .registerSeeker input:valid, textarea:valid {
    border-left-color: black;
    }
    .registerSeeker input:optional,textarea:optional {
      border-left-color: #999999;
    }
    .registerSeeker input:invalid, textarea:invalid {
      border-left-color: red;
    }

  </style>
  
  </head>
<body>
  
<div class="wrapper">
  <div id="reg-image">
  <br><br>
    <div class="topnav">
      <div class="topnav-left">
        <a href="#home" class="active">Job Portal</a>
      </div>
      <div class="topnav-right">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#blog">Blog</a>
        <a href="#contact">Contact</a>
        <a style="background-color: blue;">Post a Job</a>
        <a style="background-color: green;" href="wantjob.php">Want a Job</a>
      </div>
    </div>
  </div>
  <div class="formcontainer">
      <br>
      <div class="title">CREATE YOUR PROFILE</div>
      <form id="registerSeeker" method="POST" action="action_seeker.php" name="SeekerRegistration"
       class="registerSeeker" enctype="multipart/form-data" onsubmit="return passvalidation(event); return validateEmail(event);" >   
          <div class="form-section"> 
              <p class="sub-head"> Personal details </p>
                <div class="form-top">
                  <div class="form-left">
                    <div>
                    <input class="form-control" type="text" id="fname" name="fname" placeholder="First Name *" required>
                    </div>
                    <div>
                      <input class="form-control" type="text" id="lname" name="lname" placeholder="Last Name *" required>
                    </div>
                    <div>
                      <input class="form-control" type="email" id="email" name="email" placeholder="Email * (abc@example.com)" onchange="return validateEmail(event);" required >
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
                      <input class="form-control" type="password" id="cpassword" name="cpassword" minlength="8" placeholder="Confirm Password *" required >
                      <span id="pwd"> </span>
                    </div>
                    <div>
                      <input class="form-control" type="number" id="contactno" name="contactno" minlength="10" maxlength="10" style=" " onkeypress="return validatePhone(event);" 
                      placeholder="Phone Number *"required>
                    </div>
                    <div>
                      <textarea style="height:132px" type="text" class="form-control" rows="4" id="address" name="address" placeholder="Address"></textarea>
                    </div>
                    <div>
                      <input class="form-control" type="text" id="city" name="city" placeholder="City">
                    </div>
                    <div>
                      <input class="form-control" type="text" id="state" name="state" placeholder="State">
                    </div>
                  </div>
                </div>
              <p class="sub-head"> Education details </p>
                <div class="form-bottom">
                  <div class="form-left">
                    <div>
                      <label style="margin-top:23px">Passing Year:</label>
                      <input class="form-control" type="date" id="passingyear" name="passingyear" placeholder="Passing Year *" required>
                    </div>       
                    <div>
                      <input class="form-control" type="text" id="qualification" name="qualification" placeholder="Highest Qualification *" required>
                    </div>
                    <div>
                      <input class="form-control" type="text" id="stream" name="stream" placeholder="Stream *" required>
                    </div>                    
                    <div>
                    <label  style="font-size:16px"><input type="checkbox">&nbsp;I accept terms & conditions</label>
                    </div>
                    <div>
                      <button class="register" type="submit" name="submit" value="submit">Register</button>
                    </div>
                  </div>
                  <div class="form-right">
                    <div>
                      <textarea style="margin-top:35px" type="text"class="form-control" rows="4" id="skills" name="skills" placeholder="Enter Skills"></textarea>
                    </div>              
                    <div>
                      <input class="form-control" type="number" id="cgpa" name="cgpa" placeholder="CGPA *" name="price" min="4.00" step=".01" required>
                    </div>
                    <div>
                      <label>Upload Resume:</label>
                      <input type="file" id="file"name="resume" class="form-control" onchange="return filetypeValidation(event);return filetypeValidation(event)" required>
                      <p id="output" style="font-size:14px;"></p>
                      <label style="color: red; font-size:14px;">File Format PDF Only!</label>
                    </div>
                  </div>
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
if(event.keyCode == 8 || event.keyCode == 46 || event.keyCode == 37 || event.keyCode == 39 ) {
  // 8 means Backspace
  //46 means Delete
  // 37 means left arrow
  // 39 means right arrow
  return true;
} else if( key < 48 || key > 57 || event.shiftkey== true ) {
  // 48-57 is 0-9 numbers on your keyboard.
  return false;
} else return true;
}
</script>    

<script type="text/javascript">
function calAge() {
    var dob= document.SeekerRegistration.dob.value;  
    var today = new Date();
    var birthDate = new Date(dob);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();

    if(m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
      age--;
    }

    document.SeekerRegistration.age.value=age;
}
</script>   
  
<script type="text/javascript"> 
        function passvalidation(event) { 
           var str = document.getElementById("password").value; 
            if (str.match(/[a-z]/g)&& str.match( 
                    /[0-9]/g) && str.match( 
                    /[^a-zA-Z\d]/g) && str.length >= 8) 
                return true;
            else 
            alert("Password must contain minimum 8 characters with atleast 1 digit and 1 special character");
            document.getElementById("password").value='';
                return false;   
        } 
</script> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
<script type="text/javascript">
  $("#registerSeeker").on("submit", function(e) {
    e.preventDefault();
    if( $('#password').val() != $('#cpassword').val() ) {
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
        document.getElementById('email').value='';
        return false;
    }

}
</script>
<script> 
        function filetypeValidation() { 
            var fileInput =  
                document.getElementById('file'); 
              
            var filePath = fileInput.value; 
          
            // Allowing file type 
            var allowedExtension =  /(\.pdf)$/i; 
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
            document.getElementById('file').value='';
            return false;
        } else { 
            $("#output").html('<b>' + 
                'This file size is: ' + size + " MB" + '</b>'); 
                return true;
        } 
    }); 
</script>
</body>
</html>
