<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Job portal</title>
	<link rel="stylesheet" type="text/css" href="register_company.css">
	<link rel="stylesheet" type="text/css" href="registerstyle.css">
</head>
<body>
	<nav>
    
    <div id="wrap" style="height: 400px;">
    	<br><br>
    <div class="topnav">
      <div class="topnav-left">
        <a href="#home" class="active">Job Portal</a>
      </div>
      <div class="topnav-right">
        <a href="home.php">Home</a>
        <a href="#about">About</a>
        <a href="#blog">Blog</a>
        <a href="#contact">Contact</a>
        <a style="background-color: blue;" href="login_page.php">Post a Job</a>
        <a style="background-color: green;">Want a Job</a>
      </div>
    </div>
    <br><br><br><br><br><br><br>
      	<p id='p1' style="text-align: left; padding-left: 50px;">Home>Company Register</p>
	</div>
	</nav>
	<section style="width: 60%; margin-left: 20%; background-color: #F0F3F7 ">
		
		<div class="register-form">
			<h1 style="font-size: 40px; color: #030A43; text-align: center; padding-top: 50px;">Company Profile</h1>	
		        <form id="registerCompany"method="post" action="#" enctype="multipart/form-data" onsubmit="return passvalidation(event);">
		            <div>
		                <input type="text" name="company_name" class="form-control" placeholder="Company_name *" required>
		            </div>
		            <div>
		                <input type="text" name="buisness_stream" class="form-control" placeholder="Buisness Stream *" required>
		            </div>
		            <div>
		                <input type="text" name="website" class="form-control" placeholder="Company website *" required>
		            </div>
		            <div>
					<input class="form-control" type="date" id="dob" min="1960-01-01" max="2018-01-31" name="dob" value="" placeholder="Establishment Date" required>
		            </div>
		            <div>
		            	<textarea rows="6" cols="50" class="form-control" style="font-size: 20px;" >Company Description
		            	</textarea>
		            </div>
		            
		            <div>
		                <input type="text" name="country" class="form-control" placeholder="Country *" required>
		            </div>
		            <div>
		                <label style="font-size: 20px;">Attach Company Logo</label><br>
		                <input type="file" id="file" class="form-control" name="photo" onchange="return filetypeValidation(event);return filetypeValidation(event)" required >
					  <label style="color: red; font-size:16px;">File Format JPG or PNG Only!</label>
					  <p id="output" style="font-size:16px;"></p>

					</div>
		                     

		        
		   		<h1 style="font-size: 40px; color: #030A43; text-align: center; padding-top: 50px;">Account Details</h1>
		            <div>
		                <input type="text" id="email" name="email" class="form-control" placeholder="Email * (abc@example.com)" onchange="return validateEmail(event);" required>
		            </div>
		            <div>
		                <input type="text" name="Phone_no" class="form-control" maxlength="10" minlength="10" placeholder="Phone Number"  onkeypress="return validatePhone(event);"required>
		            </div>
		            <div>
                      <input class="form-control" type="password" id="password" name="password" minlength="8" placeholder="Password *" onchange="return passvalidation(event);" required>
                    </div>
                    <div>
                      <input class="form-control" type="password" id="cpassword" name="cpassword" minlength="8" placeholder="Confirm Password *" required >
                      <span id="pwd"> </span>
                    </div>
					<div style="align-content: center; padding-left: 50px;">
				       <input type="submit" name="register" class="btn" value="Register" href="#">
				    </div>
				</form>
		</div>
		
	</section>
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
  $("#registerCompany").on("submit", function(e) {
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
            var allowedExtension =  /(\.jpg||\.png)$/i; 
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

        if ( size > 3) { 
            alert("	Too big..File must be less than 3MB"); 
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