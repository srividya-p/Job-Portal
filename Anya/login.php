<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Job portal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="register.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Google Font -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
	<!--<a href="company_register.php"><button class="btn" role="button">Post A Job</button></a>
	<a href="#"><button class="btn" role="button">Find A Job</button></a>-->
	<div id='wrap'>
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
      <div>
        <div class="login-form">
          <style >
            .form-control{
              padding: 5px;
              font-size: 20px;
              width: 300px;
             }
          </style>
          <form method="post" action="#" enctype="multipart/form-data">
            <h2>Company Login</h2>
            <input type="text" name="email" class="form-control" placeholder="Email"><br><br>
            <input type="password" name="password" class="form-control" placeholder="Enter Password"><br><br>
            <input type="submit" name="login" class="btn" value="Login" href="#" style="background-color: green; width: 300px; font-size: 20px; color: white; padding: 10px;">
          </form>
      </div>
    </div>

    
  	</div>
</body>
</html>