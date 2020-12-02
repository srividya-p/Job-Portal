<?php
include('include/header.php');
include('include/sidebar.php');
?>
<br>
<div class="row">
  <div class="col">
    <h1 class="page-header" style="font-size: 25px;"><i data-feather="home"></i>
      Dashboard
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
          <a href="seeker.php">
            <div style="background-color: white; ">
              <span class="pull-left">View Details</span>
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
                <i class="fa fa-cube fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right" style="text-align: right;">
                <div class="huge">12</div>
                <div>Registered Companies</div>
              </div>
            </div>
          </div>
          <a href="company.php">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
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
                  <i class="fa fa-newspaper-o fa-5x"></i>
                </div>
                <div style="text-align: right">
                  <div class="huge">30</div>
                  <div>Open Job Posts</div>
                </div>
              </div>
            </div>
            <a href="job.php">
              <footer style="vertical-align: bottom;">
                <span class="pull-left">View Details</span>
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
                  <div>Unverified Companies</div>
                </div>
              </div>
            </div>
            <a href="uv_company.php">
              <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <h1 style="font-size: 25px; padding-top: 25px;"><i data-feather="bar-chart-2"></i> Graphical statistics
      </h1>
    </div>
    <div class="row">
      <div id="curve_chart" style="width: 1000px; height: 600px;"></div>
    </div>
  </div>

</div>
</div>



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


<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
  feather.replace()
</script>

</body>

</html>