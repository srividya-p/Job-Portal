<?php
include('include/header.php');
include('connection/db.php');

if(isset($_POST['submit'])){
  $email= $_POST['email'];
  $msg= $_POST['msg'];

  $query= mysqli_query($conn, "insert into querydesk(email,message)
  values('$email','$msg')");

    /*if ( $query ) {
    echo "<script>alert('Your Query/Message was sent successfully.')</script>";
  }*/
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
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <br>
  <div class="infobg">
    <div class="info">
      <div class="card">
        <img src="img/lock.png" alt="Avatar">
        <div class="container">
          <div id="info-head"><b>Create Account</b></div><br>
          <p>Lorem ipsum dolor sit amet, a arcu justo eget, placerat suspendisse ornare accumsan et fringilla consectetuer</p>
        </div>
      </div>
      
      <div class="card">
        <img src="img/resume.png" alt="Avatar">
        <div class="container">
          <div id="info-head"><b>Submit Resume</b></div><br>
          <p>Lorem ipsum dolor sit amet, a arcu justo eget, placerat suspendisse ornare accumsan et fringilla consectetuer</p>
        </div>
      </div> 

      <div class="card">
        <img src="img/search.png" alt="Avatar">
        <div class="container">
          <div id="info-head"><b>Find a Job</b></div><br>
          <p>Lorem ipsum dolor sit amet, a arcu justo eget, placerat suspendisse ornare accumsan et fringilla consectetuer</p>
        </div>
      </div>   
    </div>
  </div>
  <br>
  <div id="blog" class ="page-wrapper">
    <div class = "post-slider">
      <h1 class= "slider-title"> Recent News </h1>
      <i class= "fas fa-chevron-left prev"></i>
      <i class= "fas fa-chevron-right next"></i>
        <div class="post-wrapper">
        <div class="post">
            <img src="https://img.etimg.com/thumb/msid-79522315,width-300,imgsize-114429,,resizemode-4,quality-100/stress-agenc.jpg" alt="Avatar" class="slider-image">
            <div class="content">
                <div class="title"> <a href="https://economictimes.indiatimes.com/jobs/americans-are-staying-jobless-for-longer-as-pandemic-stretches-on/articleshow/79522305.cms?utm_source=contentofinterest&utm_medium=text&utm_campaign=cppst">
                Americans are staying jobless for longer as pandemic stretches on</a></div>
                <div class="author"><span style="color:black;font-weight:bolder"> Author:&nbsp;</span> AFP </div>
                <div class="newssrc"><span style="color:black;font-weight:bolder">News Source:&nbsp;</span> Economic Times </div>
                <div class="pub"><span style="color:black;font-weight:bolder">Updated On:&nbsp;</span> Dec 02, 2020, 08.40 PM IST</div>
                <div class="btn">
                  <a href="https://economictimes.indiatimes.com/jobs/americans-are-staying-jobless-for-longer-as-pandemic-stretches-on/articleshow/79522305.cms?utm_source=contentofinterest&utm_medium=text&utm_campaign=cppst"><button>Read more</button></a>
                </div>
              </div>
           </div>
           <div class="post">
            <img src="https://img.etimg.com/thumb/msid-79458616,width-300,imgsize-106665,,resizemode-4,quality-100/indian-law-firm.jpg" alt="Avatar" class="slider-image">
            <div class="content">
                <div class="title"> <a href="https://economictimes.indiatimes.com/jobs/law-firms-consultancies-in-india-restart-hiring-as-economy-bounces-back/articleshow/79458622.cms?utm_source=contentofinterest&utm_medium=text&utm_campaign=cppst">
                Law firms, consultancies in India restart hiring as economy bounces back</a></div>
                <div class="author"><span style="color:black;font-weight:bolder"> Author:&nbsp;</span> Sachin Dava & Maulik Vyas </div>
                <div class="newssrc"><span style="color:black;font-weight:bolder">News Source:&nbsp;</span> Economic Times </div>
                <div class="pub"><span style="color:black;font-weight:bolder">Updated On:&nbsp;</span> Dec 02, 2020, 08.57 PM IST</div>
                <div class="btn">
                  <a href="https://economictimes.indiatimes.com/jobs/law-firms-consultancies-in-india-restart-hiring-as-economy-bounces-back/articleshow/79458622.cms?utm_source=contentofinterest&utm_medium=text&utm_campaign=cppst"><button>Read more</button></a>
                </div>
              </div>
           </div>
          <div class="post">
            <img src="https://img.etimg.com/thumb/msid-79535446,width-160,height-120,imgsize-99641/permanent-work-from-home-not-an-option-for-most-hindustan-unilever-staff.jpg" alt="Avatar" class="slider-image">
            <div class="content">
                <div class="title"> <a href="https://economictimes.indiatimes.com/jobs/permanent-wfh-not-an-option-for-most-hul-staff/articleshow/79535446.cms">
                 Permanent work from home not an option for most Hindustan Unilever staff</a></div>
                <div class="author"><span style="color:black;font-weight:bolder"> Author:&nbsp;</span> Rica Bhattacharya </div>
                <div class="newssrc"><span style="color:black;font-weight:bolder">News Source:&nbsp;</span> Economic Times </div>
                <div class="pub"><span style="color:black;font-weight:bolder">Updated On:&nbsp;</span> Dec 02, 2020, 11.29 PM IST</div>
                <div class="btn">
                  <a href='https://economictimes.indiatimes.com/jobs/permanent-wfh-not-an-option-for-most-hul-staff/articleshow/79535446.cms'><button>Read more</button></a>
                </div>
              </div>
           </div>
           <div class="post">
            <img src="https://img.etimg.com/thumb/msid-79533456,width-300,imgsize-5752,,resizemode-4,quality-100/jobs-.jpg" alt="Avatar" class="slider-image">
            <div class="content">
                <div class="title"> <a href=https://economictimes.indiatimes.com/jobs/iit-bhu-students-receive-396-job-offers-including-ppos/articleshow/79533466.cms>
                IIT BHU students receive 396 job offers including PPOs</a></div>
                <div class="author"><span style="color:black;font-weight:bolder"> Author:&nbsp;</span> Prachi Verma </div>
                <div class="newssrc"><span style="color:black;font-weight:bolder">News Source:&nbsp;</span> Economic Times </div>
                <div class="pub"><span style="color:black;font-weight:bolder">Updated On:&nbsp;</span> Dec 02, 2020, 08.50 PM IST</div>
                <div class="btn">
                  <a href='https://economictimes.indiatimes.com/jobs/iit-bhu-students-receive-396-job-offers-including-ppos/articleshow/79533466.cms'><button>Read more</button></a>
                </div>
              </div>
           </div>
           <div class="post">
            <img src="https://img.etimg.com/thumb/msid-79459833,width-300,imgsize-386073,,resizemode-4,quality-100/job2.jpg" alt="Avatar" class="slider-image">
            <div class="content">
                <div class="title"> <a href="https://economictimes.indiatimes.com/jobs/pharma-hiring-to-remain-conservative-despite-pace-in-vaccine-development-study/articleshow/79459843.cms?utm_source=contentofinterest&utm_medium=text&utm_campaign=cppst">
                Pharma hiring to remain conservative despite pace in vaccine development</a></div>
                <div class="author"><span style="color:black;font-weight:bolder"> Author:&nbsp;</span> Riya Bhatia </div>
                <div class="newssrc"><span style="color:black;font-weight:bolder">News Source:&nbsp;</span> Economic Times </div>
                <div class="pub"><span style="color:black;font-weight:bolder">Updated On:&nbsp;</span> Nov 28, 2020, 11.58 PM IST</div>
                <div class="btn">
                  <a href="https://economictimes.indiatimes.com/jobs/pharma-hiring-to-remain-conservative-despite-pace-in-vaccine-development-study/articleshow/79459843.cms?utm_source=contentofinterest&utm_medium=text&utm_campaign=cppst"><button>Read more</button></a>
                </div>
              </div>
           </div>
        </div>
    </div>
  </div>
  <br><br>
  <div id="current">
    <div class="head">
      <br>
      <div class="heading"> Job Categories</div>
    </div> <br><br>
    <div>
      <div class="cat">
        <ul class="category">
          <li><a class="cat-but" href="#">Web Development</a></li><br><br><br>
          <li><a class="cat-but" href="#">Graphic Designing</a></li><br><br><br>
          <li><a class="cat-but" href="#">Logistics</a></li><br><br><br>
          <li><a class="cat-but" href="#">Advertising</a></li><br><br><br>
        </ul>
      </div>
      <div class="cat">
        <ul class="category">
          <li><a class="cat-but" href="#">Consultancy</a></li><br><br><br>
          <li><a class="cat-but" href="#">Pharma</a></li><br><br><br>
          <li><a class="cat-but" href="#">Telecom Software</a></li><br><br><br>
          <li><a class="cat-but" href="#">Marketting</a></li><br><br><br>
        </ul>
      </div>
      <div class="cat">
        <ul class="category">
          <li><a class="cat-but" href="#">System Programming</a></li><br><br><br>
          <li><a class="cat-but" href="#">Analytics</a></li><br><br><br>
          <li><a class="cat-but" href="#">Accounting</a></li><br><br><br>
          <li><a class="cat-but" href="#">Content Writing</a></li><br><br><br>
        </ul>
      </div>
    </div>
  </div>
  </div>
<br><br>
</body>
<?php
include('include/footer.php')
?>
</html>


