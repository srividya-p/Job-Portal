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

<style>
  .button {
    background-color: #4CAF50;
    /* Green */
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    font-family: Raleway-SemiBold;
  }
</style>

<header>
  <div id='wrap'>
    <br><br>
    <div class="topnav">
      <div class="topnav-left">
        <a href="seeker_dashboard.php" class="active">Job Portal</a>
      </div>
      <div class="topnav-right">
        <a href="my_applications.php" style="background-color: #1963E4; border-radius: 10px;">My Applications</a>
        <div class="profile_dropdown">
          <a href="logout.php" class="dropbtn" style="background-color: #19E491; border-radius: 10px;"><i class="fa fa-user"></i></a>
        </div>
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
    </div>
  </div>
</header>

<body id="bod">
  <div id="posts">
    <h1>My Applications</h1>
    <?php
    include("connection/db.php");
    $conn = mysqli_connect('localhost', 'root', '', 'job_portal');
    
    $user_email = $_SESSION['email'];
    $query2 = mysqli_query($conn, "select id from job_seeker where email='$user_email'");
    $user_id = mysqli_fetch_array($query2);

    $query = mysqli_query($conn, "select j.job_title, j.creator_email, j.description, j.openings, j.salary,
    a.status from job_seeker s, jobs j, applicant a 
    where a.user_id=s.id and a.job_post_id=j.job_id");

    while ($row = mysqli_fetch_array($query)) {
      $creator = $row['creator_email'];
      $query1 = mysqli_query($conn, "select photo from company where email='$creator'");
      $path = mysqli_fetch_array($query1);
    ?>
      <div class="post-card">
        <img id="image" src="<?php echo $path[0] ?>">
        <div class="container">
          <h4><b><?php echo $row['job_title'] ?></b></h4>
          <p><?php echo $row['description'] ?></p>
          <p>Openings: <?php echo $row['openings'] ?></p>
          <p>Salary: <?php echo $row['salary'] ?></p>
          <p>Status:</p>
          <?php if ($row['status']=='selected'){?>
            <p style="color:green">Selected</p>
          <?php } elseif($row['status']=='applied') { ?>
            <p style="color:blue">Applied</p>
          <?php } else {?>
            <p style="color:gray">Not Selected</p>
          <?php } ?>
        </div>
      </div>
    <?php  } ?>
  </div>
</body>