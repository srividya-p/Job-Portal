<?php
include("connection/db.php");
include('include/country_codes.php');
include('include/header.php');
include('include/sidebar.php');

$id = $_GET['id'];

$query = mysqli_query($conn, "select * from company where id = $id");

while ($row = mysqli_fetch_array($query)) {
    $cname = $row['name'];
    $desc = $row['description'];
    $country = $row['country'];
    $stream = $row['stream'];
    $website = $row['website'];
    $date = $row['date'];
    $email = $row['email'];
    $phone = $row['phone'];
    $password = $row['password'];
    $photo_prev = $row['photo'];
}

$code = array_search($country, $countrycodes);

?>

<style>
    label {
        font-size: 18px;
    }
</style>
<p><a href="dashboard.php" >Dashboard</a>&nbsp;/&nbsp;<a href="company.php">Companies</a>&nbsp;/&nbsp;<a href="#">Edit Company</a></p>

<div class="row">
    <div class="col">
        <h1 class="page-header" style="font-size: 25px;">
            Edit Company Details
        </h1>
    </div>
</div>
<div style="width: 50%; margin-left:15%; background-color:beige; border-radius:10px;">
    <form action="" style="margin:3%; padding:3%;" name="company_form" id="company_form" action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="Company Name">Enter Company Name</label><br><br>
            <input type="text" name="cname" value="<?php echo $cname ?>" class="form-control" placeholder="Enter Company Name">
        </div>

        <div class="form-group">
            <label for="Description">Enter Description</label><br><br>
            <textarea name="desc" cols="30" rows="10" class="form-control" id="desc"><?php echo $desc ?>
                </textarea>
        </div>

        <div class="form-group">
            <label for="Country">Enter Country</label><br><br>
            <select name="country" class="countries form-control presel-<?php echo $code ?>" id="countryId">
                <option>Select Country</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Stream">Enter Company Stream</label><br><br>
            <input type="text" name="stream" value="<?php echo $stream ?>" class="form-control" placeholder="Enter Stream">
        </div>

        <div class="form-group">
            <label for="Website">Enter Company Website</label><br><br>
            <input type="text" name="website" value="<?php echo $website ?>" class="form-control" placeholder="Enter Website">
        </div>

        <div class="form-group">
            <label for="Date">Enter Date of Formation</label><br><br>
            <input type="text" name="date" value="<?php echo $date ?>" class="form-control" placeholder="Enter Date">
        </div>

        <div class="form-group">
            <label for="Email">Enter Company Email</label><br><br>
            <input type="text" name="email" value="<?php echo $email ?>" class="form-control" placeholder="Enter Email">
        </div>

        <div class="form-group">
            <label for="Phone">Enter Company Phone</label><br><br>
            <input type="text" name="phone" value="<?php echo $phone ?>" class="form-control" placeholder="Enter Phone">
        </div>

        <div class="form-group">
            <label for="Password">Enter Password</label><br><br>
            <input type="text" name="password" value="<?php echo $password ?>" class="form-control" placeholder="Enter Password">
        </div>

        <div class="form-group">
            <label for="Photo">Upload New Photo</label><br><br>
            <input type="file" name="photo" class="form-control" placeholder="Enter Password">
            <p>Current File: <?php echo $photo_prev ?></p>
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
    $cname = $_POST['cname'];
    $desc = $_POST['desc'];
    $country = $_POST['country'];
    $stream = $_POST['stream'];
    $website = $_POST['website'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $photo = basename($_FILES['photo']['name']);
    $photo1 = substr($photo_prev, 0, 29).$photo;

    $query1 = mysqli_query($conn, "update company set name='$cname', description='$desc',
    country='$country', stream='$stream', website='$website', date='$date', email='$email',
    phone='$phone', password='$password', photo='$photo1' where id=$id");

    if ($query) {
        echo "<script>alert('Record updated successfully!')</script>";
    } else {
        echo "<script>alert('Could not update! Try again')</script>";
    }
}

?>