<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Job portal</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Google Font -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style>
  body{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: 20px;
    text-align: center;
    background-image:  url("/ip-mini-project/images/img1.png");
    background-repeat: no-repeat;
    background-size: cover;
    filter: brightness(90%);
    opacity: 0.9;
    height: 900px;
  }
</style>
  </head>
<body class="loginpage">
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
      <br><br><br><br>
      <div>
        <div class="login-form">
          <form id="loginSeeker" method="POST" class="loginSeeker" enctype="multipart/form-data">
            <h2>Seeker Login</h2>
            <input type="text" name="email" class="form-control" placeholder="Email"><br><br>
            <input type="password" name="password" class="form-control" placeholder="Enter Password"><br><br>
                <div>    
                <a href="resetpass.php">Forgot Password</a>
                </div><br>
                <input type="submit" name="login" class="btn" value="Login" href="login-seeker.php">

          </form>
      </div>
    </div>

</body>
</html>