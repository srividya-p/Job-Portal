<?php
include("connection/db.php");
include('include/country_codes.php');
include('include/header.php');
include('include/sidebar.php');

$id = $_GET['id'];

$query = mysqli_query($conn, "select * from jobs where job_id = $id");

while ($row = mysqli_fetch_array($query)) {
    $job_title = $row['job_title'];
    $description = $row['description'];
    $country = $row['country'];
    $state = $row['state'];
    $city = $row['city'];
    $salary = $row['salary'];
    $openings = $row['openings'];
}
$code = array_search($country, $countrycodes);
?>

<style>
    label {
        font-size: 18px;
    }
</style>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="job.php">Job Posts</a></li>
            <li class="breadcrumb-item"><a href="job_edit.php">Edit Job</a></li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Job</h1><br>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
        </div>
    </div>
    <div style="width: 60%; margin-left:20%; background-color:beige;">
        <form action="" style="margin:3%; padding:3%;" name="job_form" id="job_form" action="" method="POST">
        <div class="form-group">
                <label for="Job Title">Enter Job Title</label>
                <input type="text" value="<?php echo $job_title ?>" name="jobTitle" class="form-control" placeholder="Enter Job Title">
            </div>

            <div class="form-group">
                <label for="Description">Enter Description</label>
                <textarea name="desc" id="desc" cols="30" rows="10" class="form-control" id="desc"><?php echo $description ?></textarea>
            </div>

            <div class="form-group">
                <label for="Country">Enter Country</label>
                <select name="country" class="countries form-control presel-<?php echo $code?>" id="countryId">
                    <option>Select Country</option>
                </select>
            </div>

            <div class="form-group">
                <label for="State">Enter State</label>
                <select name="state"  class="states form-control" id="stateId">
                    <option>Select State</option>
                </select>
            </div>

            <div class="form-group">
                <label for="City">Enter City</label>
                <select name="city" class="cities form-control" id="cityId">
                    <option>Select City</option>
                </select>
            </div>

            <div class="form-group">
                <label for="Openings">Enter Number of Openings</label>
                <input type="number" id="openings" required name="openings" class="form-control" value="<?php echo $openings?>">
            </div>

            <div class="form-group">
                <label for="Openings">Enter Salary</label>
                <input type="number" id="salary" required name="salary" class="form-control" value="<?php echo $salary?>">
            </div>

            <div class="form-group">
                <input name="submit" id="submit" type="submit" class="btn btn-success" placeholder="SAVE">
            </div>
        </form>
        <div id='msg'></div>
    </div>
</main>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<!-- <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script> -->

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>

<!-- datatables plugin -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

</body>

</html>

<?php

include("connection/db.php");

if (isset($_POST['submit'])) {
    $jobTitle = $_POST['jobTitle'];
    $desc = $_POST['desc'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $salary = $_POST['salary'];
    $openings = $_POST['openings'];

    $query1 = mysqli_query($conn, "update jobs set job_title='$jobTitle', description='$desc', 
    city='$city', country='$country', state='$state', salary='$salary', openings='$openings'
    where job_id=$id");

    if ($query) {
        echo "<script>alert('Record updated successfully!')</script>";
    } else {
        echo "<script>alert('Could not update! Try again')</script>";
    }
}

?>