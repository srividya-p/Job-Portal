<!DOCTYPE html>
<html lang="en">
<head>
  <title>JobPortal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/style.css"></link>
  <link rel="stylesheet" href="css/seeker.css"></link>
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<header>
	<script type="text/javascript">
		/* When the user clicks on the button,
		toggle between hiding and showing the dropdown content */
		function myFunction() {
		  document.getElementById("myDropdown").classList.toggle("show");
		}

		// Close the dropdown menu if the user clicks outside of it
		window.onclick = function(event) {
		  if (!event.target.matches('.dropbtn')) {
		    var dropdowns = document.getElementsByClassName("dropdown-content");
		    var i;
		    for (i = 0; i < dropdowns.length; i++) {
		      var openDropdown = dropdowns[i];
		      if (openDropdown.classList.contains('show')) {
		        openDropdown.classList.remove('show');
		      }
		    }
		  }
		}
	</script>
<div id='wrap' style="background-image: url('/Job-Portal/img/bg_4.jpeg');">
    <br><br>
    <div class="topnav">
      <div class="topnav-left">
        <a href="index.php" class="active">Job Portal</a>
      </div>
      <div class="topnav-right">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="blog.php">Blog</a>
        <a href="contact.php">Contact</a> 
        <a href = "#" style = "background-color: #1963E4; border-radius: 10px;" >My Applications</a> 
        <div class="profile_dropdown">
		  <a onclick="myFunction()" class="dropbtn"  style="background-color: #19E491; border-radius: 10px;"><i class="fa fa-user"></i></a>
		  <div id="myDropdown" class="dropdown-content">
		    <a href="#">Link 1</a>
		    <a href="#">Link 2</a>
		    <a href="#">Link 3</a>
		  </div>
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
  <div class="search" id="main1"> <!-- search bar -->
	<div class="search_text" id="searchjum" style="text-align: left; padding-left: 27% ">
	<h1 style="font-family: Poppins; font-size: 35px;">Search for Jobs</h1>
	    
	    <form class="form-inline" id="homesearch">
	        <input type="text" class="form-control" size="50" placeholder="Enter your search keyword" name="keyword" id="keyword" >
	        <button type="button" onclick="search()" class="btn  " style = "background-color: #1963E4; border-radius: 10px; padding: 10px;"><span class="glyphicon glyphicon-search"></span> Search</button>
	    </form>
	</div>
	</div> <!-- search bar -->
</div>
</header>

<body id="bod">
  <div id="page-wrapper">
  				<div class="column" style="background-color: rgba(255,238,200,0.5);"><h2>Top Recruiting Companies</h2>

    			</div>
                <div class="column" style="background-color: rgba(213,191,253,0.5);">
                    <div style="width: 100%; text-align: center;"><h1>Open Posts </h1></div>

                    
                  </div>
                  <div class="column" style="background-color: rgba(255,238,200,0.5); padding: 30px; text-align: justify;">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <br><br>
                  </div>
                

            
                

                
            
  </div>
  <!-- /#page-wrapper -->
</body>

<?php
include('include/footer.php')
?>