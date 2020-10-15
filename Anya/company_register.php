<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Job portal</title>
	<link rel="stylesheet" type="text/css" href="register.css">
	<link rel="stylesheet" type="text/css" href="style.css">
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
    <br><br><br><br><br><br><br><br><br><br><br>
      	<p id='p1' style="text-align: left; padding-left: 50px;">Home>Company Register</p>
	</div>
	</nav>
	<section style="width: 80%; margin-left: 10%; background-color: #F0F3F7 ">
		
		<div class="register-form">
			<h1 style="font-size: 40px; color: #030A43; text-align: center; padding-top: 50px;">Company Profile</h1>	
		        <form method="post" action="#" enctype="multipart/form-data">
		            <div>
		                <input type="text" name="company_name" class="form-control" placeholder="Company_name" required>
		            </div>
		            <div>
		                <input type="text" name="buisness_stream" class="form-control" placeholder="Buisness Stream" required>
		            </div>
		            <div>
		                <input type="text" name="website" class="form-control" placeholder="Company website" required>
		            </div>
		            <div>
		                <input type="date" name="date" class="form-control" placeholder="Establishment Date" required>
		            </div>
		            <div>
		                <input type="email" name="email" class="form-control" placeholder="E-mail" required>
		            </div>
		            <div>
		            	<textarea rows="6" cols="50" class="form-control" style="font-size: 15px;">Company Description
		            	</textarea>
		            </div>
		            
		            <div>
		                <input type="text" name="country" class="form-control" placeholder="Country" required>
		            </div>
		            <div>
		                <label style="font-size: 20px;">Attach Company Logo</label><br>
		                <input type="file" class="form-control" name="photo" >
		            </div>
		                     

		        
		   		<h1 style="font-size: 40px; color: #030A43; text-align: center; padding-top: 50px;">Account Details</h1>
		            <div>
		                <input type="text" name="email" class="form-control" placeholder="Enter e-mail" required>
		            </div>
		            <div>
		                <input type="number" name="Phone_no" class="form-control" placeholder="Phone Number" required>
		            </div>
		            <div>
		                <input type="password" name="password" class="form-control" placeholder="New password" required>
		            </div>
		            <div>
		                <input type="password" name="confirm_pass" class="form-control" placeholder="Confirm Password" required>
		            </div>         
		        
					<div style="align-content: center; padding-left: 50px;">
				       <input type="submit" name="register" class="btn" value="Register" href="#">
				    </div>
				</form>
		</div>
		
	</section>
	
</body>
</html>