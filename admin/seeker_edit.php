<?php
include("connection/db.php");
include('include/country_codes.php');
include('include/header.php');
include('include/sidebar.php');

$id = $_GET['id'];

$query = mysqli_query($conn, "select * from job_seeker where id = $id");

while ($row = mysqli_fetch_array($query)) {
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $phone = $row['mobileno'];
    $country = $row['country'];
    $age = $row['age'];
    $qual = $row['qualification'];
    $cgpa = $row['cgpa'];
}

$code = array_search($country, $countrycodes);

?>

<style>
    label {
        font-size: 18px;
    }
</style>
<p><a href="dashboard.php" >Dashboard</a>&nbsp;/&nbsp;<a href="seeker.php">Job Seekers</a>&nbsp;/&nbsp;<a href="#">Edit Job Seeker</a></p>
<div class="row">
    <div class="col">
        <h1 class="page-header" style="font-size: 25px;">
            Edit Job Seeker Details
        </h1>
    </div>
</div>
<div style="width: 50%; margin-left:15%; background-color:beige; border-radius:10px;">
    <form action="" style="margin:3%; padding:3%;" name="company_form" id="company_form" action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="First Name">Enter First Name</label><br><br>
            <input type="text" name="fname" value="<?php echo $fname ?>" placeholder="First Name">
        </div>

        <div class="form-group">
            <label for="Last Name">Enter Last Name</label><br><br>
            <input type="text" name="lname" value="<?php echo $lname ?>" placeholder="Last Name">
        </div>

        <div class="form-group">
            <label for="Email">Enter Seeker Email</label><br><br>
            <input type="text" name="email" value="<?php echo $email ?>" placeholder="Email">
        </div>

        <div class="form-group">
            <label for="Phone">Enter Seeker Phone</label><br><br>
            <input type="text" name="phone" value="<?php echo $phone ?>" placeholder="Phone">
        </div>

        <div class="form-group">
            <label for="Country">Enter Country</label><br><br>
            <select name="country" class="countries presel-<?php echo $code ?>" id="countryId">
                <option>Select Country</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Stream">Enter Seeker Age</label><br><br>
            <input type="text" name="age" value="<?php echo $age ?>" placeholder="Age">
        </div>

        <div class="form-group">
            <label for="Qualification">Enter Seeker Qualification</label><br><br>
            <input type="text" name="qual" value="<?php echo $qual ?>" placeholder="Qualification">
        </div>


        <div class="form-group">
            <label for="Password">Enter Seeker CGPA</label><br><br>
            <input type="text" name="cgpa" value="<?php echo $cgpa ?>" placeholder="CGPA">
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
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $age = $_POST['age'];
    $qual = $_POST['qual'];
    $cgpa = $_POST['cgpa'];


    $query1 = mysqli_query($conn, "update job_seeker set fname='$fname', lname='$lname',
    country='$country', email='$email', mobileno='$phone', age='$age', qualification='$qual',
    cgpa='$cgpa' where id=$id");

    if ($query) {
        echo "<script>alert('Record updated successfully!')</script>";
    } else {
        echo "<script>alert('Could not update! Try again')</script>";
    }
}

?>