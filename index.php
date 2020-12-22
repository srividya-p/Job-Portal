<?php
include('include/header.php');
include('connection/db.php');

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $msg = $_POST['msg'];

  $query = mysqli_query($conn, "insert into querydesk(email, message) 
  values('$email','$msg')");

  if ($query) {
    echo "<script>alert('Your Query/Message was sent successfully.')</script>";
  } else {
    echo "<script>alert('Error! Your Query/Message was not sent!')</script>";
  }
}
?>

<body id="bod">
  <!-- JQuery -->
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <!-- Custom script for slider -->
  <script src="js/slider.js"></script>
  <!-- Slick.js plugin for carousel-->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <br>
  <div class="infobg">
    <div class="info">
      <div class="card">
        <img src="img/lock.png" alt="Avatar">
        <div class="container">
          <div id="info-head"><b>Create Account</b></div><br>
          <p>Create an account and provide all basic details which are required for Job Applications.</p>
        </div>
      </div>

      <div class="card">
        <img src="img/resume.png" alt="Avatar">
        <div class="container">
          <div id="info-head"><b>Submit Resume</b></div><br>
          <p>Upload your most recent Resume and showcase your skills to various recruiters and get noticed.</p>
        </div>
      </div>

      <div class="card">
        <img src="img/search.png" alt="Avatar">
        <div class="container">
          <div id="info-head"><b>Find a Job</b></div><br>
          <p>Search for over a myriad of Jobs and apply for the one most suitable with your skills and get selected.</p>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div id="blog" class="page-wrapper">
    <?php
    $url = 'http://newsapi.org/v2/top-headlines?country=in&category=business&apiKey=dd26976ed8184a4f8c897315c161e25c';
    $response = file_get_contents($url);
    $newsData = json_decode($response);
    ?>
    <div class="post-slider">
      <h1 class="slider-title"> Recent News </h1>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>
      <div class="post-wrapper">
        <?php
        foreach ($newsData->articles as $news) {
        ?>
          <div class="post">
            <img src="<?php echo $news->urlToImage ?>" alt="Avatar" class="slider-image">
            <div class="content">
              <div class="title"> <a href="<?php echo $news->url ?>">
                  <?php echo $news->title ?></a></div>
              <div class="author"><span style="color:black;font-weight:bolder"> Author:&nbsp;</span><?php echo $news->author ?> </div>
              <div class="newssrc"><span style="color:black;font-weight:bolder">News Source:&nbsp;</span> <?php echo $news->source->name ?> </div>
              <div class="pub"><span style="color:black;font-weight:bolder">Published At:&nbsp;</span> <?php echo $news->publishedAt ?></div>
              <div class="btn">
                <a href="<?php echo $news->url ?>"><button>Read more</button></a>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
  <br><br>

  <div class="head">
    <div class="heading"> Job Categories</div>
  </div>

  <div id="current">
    <a class="cat-but" href="seeker_signin.php">Web Development</a>
    <a class="cat-but" href="seeker_signin.php">Graphic Designing</a>
    <a class="cat-but" href="seeker_signin.php">Logistics</a>

    <a class="cat-but" href="seeker_signin.php">Consultancy</a>
    <a class="cat-but" href="seeker_signin.php">Pharma</a>
    <a class="cat-but" href="seeker_signin.php">Telecom Software</a>

    <a class="cat-but" href="seeker_signin.php">Programming</a>
    <a class="cat-but" href="seeker_signin.php">Analytics</a>
    <a class="cat-but" href="seeker_signin.php">Accounting</a>
  </div>
  <br><br>
</body>

<?php
include('include/footer.php')
?>

</html>