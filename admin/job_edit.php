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
<p><a href="dashboard.php" >Dashboard</a>&nbsp;/&nbsp;<a href="job.php">Job Posts</a>&nbsp;/&nbsp;<a href="#">Edit Job Post</a></p>

<div class="row">
    <div class="col">
        <h1 class="page-header" style="font-size: 25px;">
            Edit Job Post Details
        </h1>
    </div>
</div>
<div style="width: 50%; margin-left:15%; background-color:beige; border-radius:10px;">
    <form action="" style="margin:3%; padding:3%;" name="job_form" id="job_form" action="" method="POST">
        <div class="form-group">
            <label for="Job Title">Enter Job Title</label><br><br>
            <input type="text" value="<?php echo $job_title ?>" name="jobTitle"  placeholder="Enter Job Title">
        </div>

        <div class="form-group">
            <label for="Description">Enter Description</label><br><br>
            <textarea name="desc" id="desc" cols="30" rows="10"  id="desc"><?php echo $description ?></textarea>
        </div>

        <div class="form-group">
            <label for="Country">Enter Country</label><br><br>
            <select name="country" class="countries presel-<?php echo $code ?>" id="countryId">
                <option>Select Country</option>
            </select>
        </div>

        <div class="form-group">
            <label for="State">Enter State</label><br><br>
            <select name="state" class="states" id="stateId">
                <option>Select State</option>
            </select>
        </div>

        <div class="form-group">
            <label for="City">Enter City</label><br><br>
            <select name="city" class="cities" id="cityId">
                <option>Select City</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Openings">Enter Number of Openings</label><br><br>
            <input type="number" id="openings" required name="openings" value="<?php echo $openings ?>">
        </div>

        <div class="form-group">
            <label for="Openings">Enter Salary</label><br><br>
            <input type="number" id="salary" required name="salary" value="<?php echo $salary ?>">
        </div>

        <div class="form-group">
            <input name="submit" id="submit" type="submit" class="submit-button" value="UPDATE">
        </div>
    </form>
</div>
</div>
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