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
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
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
      <div class="navbar">
        <a href="seeker_dashboard.php" style="background-color: #1963E4; border-radius: 10px;">Dashboard</a>
      </div>
    </div>

    <div id='main'>
      <br><br><br><br><br>
      <p id='p1'>We have 850,000 great job offers you deserve!</p>
      <h1 id="dream">Your Dream</h1>
      <h1 id="wait">Job is waiting</h1>
    </div>
    <br>
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