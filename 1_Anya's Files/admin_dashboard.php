<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Job_portal</title>
  <link rel="stylesheet" type="text/css" href="admin_dashboard.css">
  <!--link href="sb-admin.css" rel="stylesheet"-->
  <link href="css/plugins/morris.css" rel="stylesheet">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--Google charts-->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Year', 'Registered Seekers', 'Hired'],
        ['2004', 1000, 400],
        ['2005', 1170, 460],
        ['2006', 1120, 520],
        ['2007', 1730, 1500]
      ]);

      var options = {
        title: 'Recruitment Rate',
        curveType: 'function',
        legend: {
          position: 'bottom'
        }
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
          <a href="admin_dashboard.php" class="active"><i class="fa fa-dashboard"></i>Dashboard</a>
          <a href="admin_job_seeker.php"><i class="fa fa-fw fa-table"></i> Job Seeker</a>
          <a href="admin_job_provider.php"><i class="fa fa-fw fa-table"></i> Job Provider</a>
          <a href="#"><i class="fa fa-fw fa-envelope"></i> Mails</a>
          <a href="#"><i class="fa fa-fw fa-edit"></i> News Updates</a>
        </div>

        <!-- Page content -->
        <div class="main">
          <div id="page-wrapper">

            <div class="container-fluid">
              <wbr>
              <!-- Page Heading -->
              <div class="row">
                <div class="col">
                  <h1 class="page-header" style="font-size: 25px; padding-top: 25px;"><i class="fa fa-dashboard"></i>
                    Dashboard <small>Statistics Overview</small>
                  </h1>
                </div>
              </div>

              <!--row-->
              <div class="row">
                <div class="grid-container">

                  <div class="card" style="background-color: #2A75D5;">
                    <div class="container">
                      <div class="panel panel-primary">
                        <div class="panel-heading">
                          <div class="grid-container">
                            <div>
                              <i class="fa fa-user fa-5x"></i>
                            </div>
                            <div style="text-align: right">
                              <div class="huge">26</div>
                              <div>Registered Seekers</div>
                            </div>
                          </div>
                        </div>
                        <a href="admin_job_seeker.php">
                          <div style="background-color: white; ">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="card" style="background-color: #6EF140 ;">
                    <div class="container">
                      <div class="panel panel-green">
                        <div class="panel-heading">
                          <div class="grid-container">
                            <div class="col-xs-3">
                              <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right" style="text-align: right;">
                              <div class="huge">12</div>
                              <div>Registered company</div>
                            </div>
                          </div>
                        </div>
                        <a href="admin_job_provider.php">
                          <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="grid-container">

                    <div class="card" style="background-color: #F4ED5A;">
                      <div class="container">
                        <div class="panel panel-primary">
                          <div class="panel-heading">
                            <div class="grid-container">
                              <div>
                                <i class="fa fa-user fa-5x"></i>
                              </div>
                              <div style="text-align: right">
                                <div class="huge">30</div>
                                <div>Open Job Posts</div>
                              </div>
                            </div>
                          </div>
                          <a href="#">
                            <footer style="vertical-align: bottom;">
                              <span class="pull-left">View Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                            </footer>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="card" style="background-color: #F16040">
                      <div class="container">
                        <div class="panel panel-green">
                          <div class="panel-heading">
                            <div class="grid-container">
                              <div class="col-xs-3">
                                <i class="fa fa-tasks fa-5x"></i>
                              </div>
                              <div class="col-xs-9 text-right" style="text-align: right;">
                                <div class="huge">12</div>
                                <div>Hired employees</div>
                              </div>
                            </div>
                          </div>
                          <a href="#">
                            <div class="panel-footer">
                              <span class="pull-left">View Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <h1 class="page-header" style="font-size: 25px; padding-top: 25px;"><i class="fa fa-graph"></i> Graphical statistics
                    </h1>
                  </div>
                  <br>
                  <div class="row">
                    <div id="curve_chart" style="padding-left: 10%; width: 900px; height: 500px;"></div>
                  </div>


                  <br>
                  <br>
                  <div class="row">
                    <h1 class="page-header" style="font-size: 25px; padding-top: 25px;"> Top Recruiters
                    </h1>
                  </div>
                  <br>


                </div>
                <!-- /.container-fluid -->

              </div>
              <!-- /#page-wrapper -->

            </div>
      </section>
</body>

</html>