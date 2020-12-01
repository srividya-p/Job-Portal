<?php
session_start();
if ($_SESSION['email'] == true) {
} else {
    header('location:seeker_signin.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>JobPortal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/style.css">
  </link>
  <link rel="stylesheet" href="css/seeker.css">
  </link>
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<header>
  
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
  
  <div id='wrap'>
    <br><br>
    <div class="topnav">
      <div class="topnav-left">
        <a href="index.php" class="active">Job Portal</a>
      </div>
      <div class="topnav-right" style="overflow: hidden;">
        <!--a href="#" style="background-color: #1963E4; border-radius: 10px;">My Applications</a-->
        <?php
        $email=$_SESSION['email'];
        include("connection/db.php");
        $query=mysqli_query($conn,"select id,email,fname,profile_img from job_seeker where email='$email';");
        $row = mysqli_fetch_array($query)
        ?>
        <div class="dropdown">
        <a class="dropbtn" onclick="myFunction()"><img src="<?php echo $row['profile_img']; ?>" onerror="this.onerror=null; this.src='img/profile.png'" class="Profile" style="border-radius: 50%; height: 40px; width: 40px; overflow-y: visible; z-index: 1; "><?php echo $row['fname']; ?></a>
        <div class="dropdown-content" id="myDropdown">
          <a href="seeker_update1.php?id=<?php echo $row['id']?>">Edit Profile</a><br>
          <a href="#">Logout</a>
        </div>
        </div>
        <!--div class="profile_dropdown">
          <a class="dropbtn" style="background-color: #19E491; border-radius: 10px;"><i class="fa fa-user"></i></a>
          <div id="myDropdown" class="dropdown-content" >
            <a href="#">Update profile</a>
            <a href="#">Log out</a>
          </div>
        </div-->
      </div>
    </div>

    <div id='main'>
      <br><br><br><br><br><br><br><br>
      <p id='p1'>We have 850,000 great job offers you deserve!</p>
      <h1 id="dream">Your Dream</h1>
      <h1 id="wait">Job is waiting</h1>
    </div>
    <br>

    <div class="search" id="main1">
      <!-- search bar -->
      <div class="search_text" id="searchjum" style="text-align: left; padding-left: 27% ">
        <h1 style="font-size: 35px;">Search for Jobs</h1>

        <form class="form-inline" id="homesearch">
          <input type="text" class="form-control" size="50" placeholder="Enter your search keyword" name="keyword" id="keyword">
          <button type="button" onclick="search()" class="btn " style="background-color: #1963E4; border-radius: 10px; padding: 10px;"><span class="glyphicon glyphicon-search"></span> Search</button>
        </form>
      </div>
    </div> <!-- search bar -->
  </div>
</header>

<body id="bod">
  <div id="page-wrapper">
    <div class="column" style="background-color: rgba(255,238,200,0.5);">
      <h2>Top Recruiting Companies</h2>

    </div>
    <div class="column" style="background-color: rgba(213,191,253,0.5);">
      <div style="width: 100%; text-align: center;">
        <h1>Open Posts </h1>
      </div>


    </div>
    <div class="column" style="background-color: rgba(255,238,200,0.5); padding: 30px; text-align: justify;">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      <br><br>
    </div>
  </div>

  
</body>

<?php
include('include/footer.php')
?>