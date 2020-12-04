<!DOCTYPE html>
<html lang="en">
<head>
  <title>JobPortal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/style.css"></link>
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<header>
  <!--for responsive navbar -->
  <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav-right") {
    x.className += " responsive";
  } else {
    x.className = "topnav-right";
  }
}

</script>
<div id='wrap'>
    <br><br>
    <div class="topnav">
      <div class="topnav-left">
        <a href="index.php" class="active">Job Portal</a>
      </div>
      <div class="topnav-right" id="myTopnav">
        <a href="index.php">Home</a>
        <a href="index.php#aboutus">About</a>
        <a href="index.php#blog">Blog</a>
        <a href="index.php#contact">Contact</a> 
        <a href = "company_signin.php" style = "background-color: #1963E4; border-radius: 10px;" >Post a Job</a> 
        <a href = "seeker_signin.php" style="background-color: #19E491; border-radius: 10px;" >Want a Job</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
        </a>
      </div>
    </div>

    <div id='main'>
      <br><br><br><br><br><br>
      <p id='p1'>We have 850,000 great job offers you deserve!</p>
      <h1 id="dream" >Your Dream</h1>
      <h1 id="wait">Job is waiting</h1>
    </div>
  </div>
</header>
