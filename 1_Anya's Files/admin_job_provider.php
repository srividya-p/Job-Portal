<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Job_portal</title>
    <!--Css scripts-->
    <link rel="stylesheet" type="text/css" href="admin_dashboard.css">
    <!--link href="sb-admin.css" rel="stylesheet"-->
    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Google charts-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Registered Seekers', 'Hired'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  1120,      520],
          ['2007',  1730,      1500]
        ]);

        var options = {
          title: 'Recruitment Rate',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
</head>
<body>
<section>
  
<div class="topnav">
  <a href="#home" style="float: left; width: 220px;">Admin</a>
  <a href="#about"><i class="fa fa-user"></i> </a>
</div>
<section>
<!-- Side navigation -->
<section class="mainbody">
<div class="sidenav">
  <a href="admin_dashboard.php"><i class="fa fa-dashboard"></i>Dashboard</a>
  <a href="admin_job_seeker.php"><i class="fa fa-fw fa-table"></i> Job Seeker</a>
  <a href="admin_job_provider.php" class="active"><i class="fa fa-fw fa-table"></i> Job Provider</a>
  <a href="#"><i class="fa fa-fw fa-envelope"></i> Mails</a>
  <a href="#"><i class="fa fa-fw fa-edit"></i> News Updates</a>
</div>

<!-- Page content -->
<div class="main">
  <div id="page-wrapper">
    <div class="row">
                    <h1 class="page-header" style="font-size: 25px; padding-top: 25px;"> Registered Company
                    </h1>
                  </div>
                  <br>

                  <div>
                    
                    <table style="margin: 20px;">
                      <tr>
                        <th>Company Name</th>
                        <th>Buisness stream</th>
                        <th>open Posts</th>
                        
                      </tr>
                      
                    </table>
                  </div>
            
                

                
            
  </div>
  <!-- /#page-wrapper -->
        
</div>
</section>
</body>

</html>
