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
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="seeker.php">Job Seekers</a></li>
            <li class="breadcrumb-item"><a href="seeker_edit.php">Edit Job Seeker</a></li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Job Seeker</h1><br>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
        </div>
    </div>
    <div style="width: 60%; margin-left:20%; background-color:beige;">
        <form action="" style="margin:3%; padding:3%;" name="company_form" id="company_form" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="First Name">Enter First Name</label>
                <input type="text" name="fname" value="<?php echo $fname ?>" class="form-control" placeholder="First Name">
            </div>

            <div class="form-group">
                <label for="Last Name">Enter Last Name</label>
                <input type="text" name="lname" value="<?php echo $lname ?>" class="form-control" placeholder="Last Name">
            </div>
            
            <div class="form-group">
                <label for="Email">Enter Seeker Email</label>
                <input type="text" name="email" value="<?php echo $email ?>" class="form-control" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="Phone">Enter Seeker Phone</label>
                <input type="text" name="phone" value="<?php echo $phone ?>" class="form-control" placeholder="Phone">
            </div>

            <div class="form-group">
                <label for="Country">Enter Country</label>
                <select name="country" class="countries form-control presel-<?php echo $code?>" id="countryId">
                    <option>Select Country</option>
                </select>
            </div>

            <div class="form-group">
                <label for="Stream">Enter Seeker Age</label>
                <input type="text" name="age" value="<?php echo $age ?>" class="form-control" placeholder="Age">
            </div>
            
            <div class="form-group">
                <label for="Qualification">Enter Seeker Qualification</label>
                <input type="text" name="qual" value="<?php echo $qual ?>" class="form-control" placeholder="Qualification">
            </div>


            <div class="form-group">
                <label for="Password">Enter Seeker CGPA</label>
                <input type="text" name="cgpa" value="<?php echo $cgpa ?>" class="form-control" placeholder="CGPA">
            </div>

            <div class="form-group">
                <input name="submit" id="submit" type="submit" class="btn btn-success" placeholder="SAVE">
            </div>
        </form>
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